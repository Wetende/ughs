<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Services\Notice\NoticeService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\User;

class NoticeApprovalController extends Controller
{
    protected $noticeService;
    
    /**
     * Create a new controller instance.
     *
     * @param \App\Services\Notice\NoticeService $noticeService
     * @return void
     */
    public function __construct(NoticeService $noticeService)
    {
        $this->middleware('can:approve-notices');
        $this->noticeService = $noticeService;
    }
    
    /**
     * Display a listing of notices pending approval.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $pendingNotices = $this->noticeService->getPendingNotices();
        return view('pages.notice.pending', compact('pendingNotices'));
    }
    
    /**
     * Display a specific notice for approval.
     *
     * @param \App\Models\Notice $notice
     * @return \Illuminate\View\View
     */
    public function show(Notice $notice): View
    {
        $this->authorize('approve', $notice);
        return view('pages.notice.approval', compact('notice'));
    }
    
    /**
     * Approve a notice.
     *
     * @param \App\Models\Notice $notice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approve(Notice $notice): RedirectResponse
    {
        $this->authorize('approve', $notice);
        $this->noticeService->approveNotice($notice, auth()->user() instanceof User ? auth()->user() : User::find(auth()->id()));
        return back()->with('success', 'Notice approved successfully');
    }
    
    /**
     * Reject a notice.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Notice $notice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reject(Request $request, Notice $notice): RedirectResponse
    {
        $this->authorize('approve', $notice);
        
        $validated = $request->validate([
            'reason' => 'required|string|max:500',
        ]);
        
        $this->noticeService->rejectNotice($notice, auth()->user() instanceof User ? auth()->user() : User::find(auth()->id()), $validated['reason']);
        return back()->with('success', 'Notice rejected successfully');
    }
}
