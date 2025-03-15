<div class="card">
    <div class="card-header">
        <h4 class="card-title">{{ $notice->title }}</h4>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <div class="d-flex mb-2">
                <span class="badge bg-{{ $notice->category == 'Academic' ? 'info' : ($notice->category == 'Sports' ? 'success' : ($notice->category == 'Cultural' ? 'warning' : 'secondary')) }} me-2">{{ $notice->category }}</span>
                <span class="text-muted">Posted: {{ $notice->created_at->format('M d, Y') }}</span>
                
                @if($notice->is_featured)
                    <span class="badge bg-primary ms-2">Featured</span>
                @endif
                
                @if($notice->is_important)
                    <span class="badge bg-danger ms-2">Important</span>
                @endif
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
            
            <div class="mb-3">
                <strong>Status:</strong>
                @if($notice->approval_status == 'approved')
                    <span class="badge bg-success">Approved</span>
                    @if($notice->approved_at)
                        <small class="text-muted ms-2">on {{ $notice->approved_at->format('M d, Y') }}</small>
                    @endif
                @elseif($notice->approval_status == 'pending')
                    <span class="badge bg-warning">Pending Approval</span>
                @else
                    <span class="badge bg-danger">Rejected</span>
                    @if($notice->rejection_reason)
                        <div class="mt-2 p-2 bg-light rounded">
                            <strong>Reason:</strong> {{ $notice->rejection_reason }}
                        </div>
                    @endif
                @endif
            </div>
        </div>
        
        <div class="d-flex justify-content-between">
            <a href="{{ route('notices.index') }}" class="btn btn-secondary">Back to Notices</a>
            
            @if($notice->approval_status == 'pending' && auth()->user()->can('approve-notices'))
                <div>
                    <a href="{{ route('notices.approval', $notice->id) }}" class="btn btn-primary">Review</a>
                </div>
            @endif
        </div>
    </div>
</div>
