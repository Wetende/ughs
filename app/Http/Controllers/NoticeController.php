<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;
use App\Models\Notice;
use App\Services\Notice\NoticeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class NoticeController extends Controller
{
    public $notice;

    public function __construct(NoticeService $notice)
    {
        $this->authorizeResource(Notice::class, 'notice', [
            'except' => ['publicShow', 'publicIndex']
        ]);
        $this->notice = $notice;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Check if user is a student or parent, if so, they can only view notices
        $userRole = auth()->user()->roles->pluck('name')->first();
        $canManageNotices = !in_array($userRole, ['student', 'parent']);
        
        return view('pages.notice.index', compact('canManageNotices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // Additional check to prevent students and parents from creating notices
        $userRole = auth()->user()->roles->pluck('name')->first();
        if (in_array($userRole, ['student', 'parent'])) {
            abort(403, 'You are not authorized to create notices.');
        }
        
        return view('pages.notice.create');
    }

    /**
     * Display the public notice board.
     */
    public function publicIndex(Request $request, $category = 'all'): View
    {
        $featuredNotices = $this->notice->getFeaturedNotices();
        $notices = $this->notice->getApprovedNoticesByCategory($category);
        $upcomingEvents = $this->notice->getUpcomingEvents();
        
        return view('notice-board', compact('featuredNotices', 'notices', 'upcomingEvents', 'category'));
    }

    /**
     * Display a single notice to the public.
     */
    public function publicShow(Notice $notice): View
    {
        // Log the notice and conditions
        \Log::info('Notice ID: ' . $notice->id);
        \Log::info('Approval Status: ' . $notice->approval_status);
        \Log::info('Active: ' . $notice->active);
        \Log::info('Start Date: ' . $notice->start_date);
        \Log::info('Stop Date: ' . $notice->stop_date);
        \Log::info('Current Date: ' . now()->format('Y-m-d'));
        \Log::info('now()->lt(start_date): ' . (now()->lt($notice->start_date) ? 'true' : 'false'));
        \Log::info('now()->gt(stop_date): ' . (now()->gt($notice->stop_date) ? 'true' : 'false'));
        
        // Temporarily bypass the conditions
        /*
        // Check if notice is approved and active
        if ($notice->approval_status !== 'approved' || 
            $notice->active !== 1 || 
            now()->lt($notice->start_date) || 
            now()->gt($notice->stop_date)) {
            \Log::info('Aborting with 404');
            abort(404);
        }
        */
        
        // Get related notices in the same category
        $relatedNotices = $this->notice->getRelatedNotices($notice);
        
        return view('notice-detail', compact('notice', 'relatedNotices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoticeRequest $request): RedirectResponse
    {
        $data = $request->except('_token');
        
        $this->notice->storeNotice($data);

        $message = 'Notice created successfully';
        if (!Gate::allows('approve-notices') && (!isset($data['approval_status']) || $data['approval_status'] !== 'approved')) {
            $message .= ' and sent for approval';
        }

        return back()->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice): View
    {
        return view('pages.notice.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice): Response
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoticeRequest $request, Notice $notice): Response
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice): RedirectResponse
    {
        $this->notice->deleteNotice($notice);

        return back()->with('success', 'Notice deleted successfully');
    }

    /**
     * Debug method to check notice existence and conditions.
     */
    public function debug($id)
    {
        $notice = \App\Models\Notice::find($id);
        
        if (!$notice) {
            return response()->json(['error' => 'Notice not found'], 404);
        }
        
        $conditions = [
            'exists' => true,
            'approval_status_is_approved' => $notice->approval_status === 'approved',
            'active_is_1' => $notice->active == 1,
            'start_date_is_past_or_present' => !now()->lt($notice->start_date),
            'stop_date_is_future_or_present' => !now()->gt($notice->stop_date),
            'notice' => $notice->toArray()
        ];
        
        return response()->json($conditions);
    }
}
