@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('notices.index'), 'text'=> 'Notices'],
    ['href'=> route('notices.pending'), 'text'=> 'Pending Approvals', 'active'],
]])

@section('title', __('Pending Notice Approvals'))

@section('page_heading', __('Pending Notice Approvals'))

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Notices Pending Approval</h4>
        </div>
        <div class="card-body">
            @if($pendingNotices->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Featured</th>
                                <th>Important</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pendingNotices as $notice)
                                <tr>
                                    <td>{{ $notice->title }}</td>
                                    <td>{{ $notice->category }}</td>
                                    <td>{{ optional($notice->creator)->name ?? 'Unknown' }}</td>
                                    <td>{{ $notice->created_at->format('M d, Y') }}</td>
                                    <td>{{ $notice->is_featured ? 'Yes' : 'No' }}</td>
                                    <td>{{ $notice->is_important ? 'Yes' : 'No' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('notices.show', $notice->id) }}" class="btn btn-sm btn-info me-2">View</a>
                                        <a href="{{ route('notices.approval', $notice->id) }}" class="btn btn-sm btn-primary me-2">Review</a>
                                        <form action="{{ route('notices.approve', $notice->id) }}" method="POST" class="me-2">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                        </form>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $notice->id }}">Reject</button>
                                        
                                        <!-- Reject Modal -->
                                        <div class="modal fade" id="rejectModal{{ $notice->id }}" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
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
                                                                <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Reject Notice</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $pendingNotices->links() }}
            @else
                <div class="alert alert-info">
                    No notices pending approval.
                </div>
            @endif
        </div>
    </div>
@endsection 