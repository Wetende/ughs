<?php

namespace App\Services\Notice;

use App\Models\Notice;
use App\Models\User;
use App\Notifications\ImportantNoticeNotification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

/**
 * Notice service.
 * 
 * @method bool can(string $permission) User model method from Spatie\Permission\Traits\HasRoles
 */
class NoticeService
{
    /**
     * Get all notices.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllNotices()
    {
        return Notice::where('school_id', auth()->user()->school_id)->get();
    }

    /**
     * Get present notices which are active.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPresentNotices()
    {
        return Notice::where('school_id', auth()->user()->school_id)
            ->whereDate('start_date', '<=', date('Y-m-d'))
            ->whereDate('stop_date', '>=', date('Y-m-d'))
            ->where('active', 1)
            ->get();
    }

    /**
     * Get approved notices by category.
     *
     * @param string $category
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getApprovedNoticesByCategory($category = 'all')
    {
        $query = Notice::query();
        
        // Only filter by school_id if user is authenticated
        if (auth()->check()) {
            $query->where('school_id', auth()->user()->school_id);
        }
        
        return $query->approved()
            ->byCategory($category)
            ->whereDate('start_date', '<=', date('Y-m-d'))
            ->whereDate('stop_date', '>=', date('Y-m-d'))
            ->where('active', 1)
            ->latest()
            ->paginate(10);
    }

    /**
     * Get featured notices.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeaturedNotices()
    {
        $query = Notice::query();
        
        // Only filter by school_id if user is authenticated
        if (auth()->check()) {
            $query->where('school_id', auth()->user()->school_id);
        }
        
        return $query->approved()
            ->featured()
            ->whereDate('start_date', '<=', date('Y-m-d'))
            ->whereDate('stop_date', '>=', date('Y-m-d'))
            ->where('active', 1)
            ->latest()
            ->take(3)
            ->get();
    }

    /**
     * Get notices pending approval.
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getPendingNotices()
    {
        return Notice::where('school_id', auth()->user()->school_id)
            ->pending()
            ->latest()
            ->paginate(10);
    }

    /**
     * Get upcoming events.
     *
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getUpcomingEvents($limit = 5)
    {
        $query = Notice::query();
        
        // Only filter by school_id if user is authenticated
        if (auth()->check()) {
            $query->where('school_id', auth()->user()->school_id);
        }
        
        return $query->approved()
            ->whereNotNull('event_date')
            ->where('event_date', '>=', now())
            ->where('active', 1)
            ->orderBy('event_date')
            ->take($limit)
            ->get();
    }

    /**
     * Store notice.
     *
     * @param array $data
     * @return \App\Models\Notice
     */
    public function storeNotice(array $data)
    {
        if (isset($data['attachment'])) {
            $data['attachment'] = $data['attachment']->store('notice/', 'public');
        } else {
            $data['attachment'] = null;
        }

        // If user is admin, auto-approve the notice
        if (!isset($data['approval_status']) && auth()->check() && Gate::allows('approve-notices', auth()->user())) {
            $data['approval_status'] = 'approved';
            $data['approved_by'] = auth()->id();
            $data['approved_at'] = now();
        }

        $notice = Notice::create([
            'title'           => $data['title'],
            'content'         => $data['content'],
            'start_date'      => $data['start_date'],
            'stop_date'       => $data['stop_date'],
            'attachment'      => $data['attachment'],
            'school_id'       => auth()->user()->school_id,
            'category'        => $data['category'] ?? 'Academic',
            'is_featured'     => isset($data['is_featured']) ? (bool)$data['is_featured'] : false,
            'approval_status' => $data['approval_status'] ?? 'pending',
            'approved_by'     => $data['approved_by'] ?? null,
            'approved_at'     => $data['approved_at'] ?? null,
            'is_important'    => isset($data['is_important']) ? (bool)$data['is_important'] : false,
            'event_date'      => $data['event_date'] ?? null,
        ]);

        // If notice is approved and important, send notifications
        if ($notice->approval_status === 'approved' && $notice->is_important) {
            $this->sendImportantNoticeNotifications($notice);
        }

        return $notice;
    }

    /**
     * Approve a notice.
     *
     * @param \App\Models\Notice $notice
     * @param \App\Models\User $approver
     * @return \App\Models\Notice
     */
    public function approveNotice(Notice $notice, User $approver)
    {
        $notice->approval_status = 'approved';
        $notice->approved_by = $approver->id;
        $notice->approved_at = now();
        $notice->save();
        
        // Send notification if it's an important notice
        if ($notice->is_important) {
            $this->sendImportantNoticeNotifications($notice);
        }
        
        return $notice;
    }

    /**
     * Reject a notice.
     *
     * @param \App\Models\Notice $notice
     * @param \App\Models\User $approver
     * @param string|null $reason
     * @return \App\Models\Notice
     */
    public function rejectNotice(Notice $notice, User $approver, $reason = null)
    {
        $notice->approval_status = 'rejected';
        $notice->approved_by = $approver->id;
        $notice->approved_at = now();
        $notice->rejection_reason = $reason;
        $notice->save();
        
        return $notice;
    }

    /**
     * Send notifications for important notices.
     *
     * @param \App\Models\Notice $notice
     * @return void
     */
    protected function sendImportantNoticeNotifications(Notice $notice)
    {
        // Get all users who should receive notifications
        $users = User::whereHas('roles', function ($query) {
            $query->whereIn('name', ['student', 'teacher', 'parent']);
        })->where('school_id', $notice->school_id)->get();
        
        foreach ($users as $user) {
            $user->notify(new ImportantNoticeNotification($notice));
        }
    }

    /**
     * Delete notice.
     *
     * @param \App\Models\Notice $notice
     *
     * @return void
     */
    public function deleteNotice(Notice $notice)
    {
        // Delete attachment if exists
        if ($notice->attachment) {
            Storage::disk('public')->delete($notice->attachment);
        }
        
        $notice->delete();
    }

    /**
     * Update notice.
     *
     * @param \App\Models\Notice $notice
     * @param array $data
     * @return \App\Models\Notice
     */
    public function updateNotice(Notice $notice, array $data)
    {
        if (isset($data['attachment'])) {
            // Delete old attachment if exists
            if ($notice->attachment) {
                Storage::disk('public')->delete($notice->attachment);
            }
            $data['attachment'] = $data['attachment']->store('notice/', 'public');
        }

        // If changing important status and notice is already approved, handle notifications
        $wasImportant = $notice->is_important;
        $willBeImportant = isset($data['is_important']) ? (bool)$data['is_important'] : $wasImportant;
        
        $notice->update([
            'title'        => $data['title'] ?? $notice->title,
            'content'      => $data['content'] ?? $notice->content,
            'start_date'   => $data['start_date'] ?? $notice->start_date,
            'stop_date'    => $data['stop_date'] ?? $notice->stop_date,
            'attachment'   => $data['attachment'] ?? $notice->attachment,
            'category'     => $data['category'] ?? $notice->category,
            'is_featured'  => isset($data['is_featured']) ? (bool)$data['is_featured'] : $notice->is_featured,
            'is_important' => $willBeImportant,
            'event_date'   => $data['event_date'] ?? $notice->event_date,
        ]);

        // If notice is approved, was not important before but is now, send notifications
        if ($notice->approval_status === 'approved' && !$wasImportant && $willBeImportant) {
            $this->sendImportantNoticeNotifications($notice);
        }

        return $notice;
    }

    /**
     * Get related notices in the same category.
     *
     * @param \App\Models\Notice $notice
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getRelatedNotices(Notice $notice, $limit = 4)
    {
        return Notice::where('school_id', $notice->school_id)
            ->where('id', '!=', $notice->id)
            ->where('category', $notice->category)
            ->approved()
            ->whereDate('start_date', '<=', date('Y-m-d'))
            ->whereDate('stop_date', '>=', date('Y-m-d'))
            ->where('active', 1)
            ->latest()
            ->take($limit)
            ->get();
    }
}
