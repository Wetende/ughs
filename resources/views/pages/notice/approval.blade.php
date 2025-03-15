@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('notices.index'), 'text'=> 'Notices'],
    ['href'=> route('notices.pending'), 'text'=> 'Pending Approvals'],
    ['href'=> route('notices.approval', $notice->id), 'text'=> "Review: $notice->title", 'active'],
]])

@section('title', __("Review Notice: $notice->title"))

@section('page_heading', __("Review Notice"))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Notice Details</h4>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="text-primary">{{ $notice->title }}</h5>
                        <div class="d-flex mb-2">
                            <span class="badge bg-{{ $notice->category == 'Academic' ? 'info' : ($notice->category == 'Sports' ? 'success' : ($notice->category == 'Cultural' ? 'warning' : 'secondary')) }} me-2">{{ $notice->category }}</span>
                            <span class="text-muted">Posted: {{ $notice->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="mb-3">
                            <p>{!! nl2br(e($notice->content)) !!}</p>
                        </div>
                        @if($notice->attachment)
                            <div class="mb-3">
                                <strong>Attachment:</strong>
                                <a href="{{ asset('storage/'.$notice->attachment) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download"></i> Download Attachment
                                </a>
                            </div>
                        @endif
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Start Date:</strong> {{ $notice->start_date }}
                            </div>
                            <div class="col-md-6">
                                <strong>End Date:</strong> {{ $notice->stop_date }}
                            </div>
                        </div>
                        @if($notice->event_date)
                            <div class="mb-3">
                                <strong>Event Date:</strong> {{ $notice->event_date->format('M d, Y h:i A') }}
                            </div>
                        @endif
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Featured:</strong> {{ $notice->is_featured ? 'Yes' : 'No' }}
                            </div>
                            <div class="col-md-6">
                                <strong>Important:</strong> {{ $notice->is_important ? 'Yes' : 'No' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actions</h4>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <form action="{{ route('notices.approve', $notice->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success w-100 mb-3">Approve Notice</button>
                        </form>
                        <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#rejectModal">
                            Reject Notice
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rejectModalLabel">Reject Notice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('notices.reject', $notice->id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="reason" class="form-label">Reason for Rejection</label>
                            <textarea class="form-control" id="reason" name="reason" rows="5" required></textarea>
                            <div class="form-text">Please provide a reason for rejecting this notice. This will be sent to the creator.</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Reject Notice</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection 