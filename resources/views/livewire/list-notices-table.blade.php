<div class="card">
    <div class="card-header">
        <h4 class="card-title">Notices</h4>
    </div>
    <div class="card-body">
        <div>
            <div class="mb-3 d-flex justify-content-between">
                <div>
                    <a href="{{route('notices.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create Notice</a>
                    @can('approve-notices')
                    <a href="{{route('notices.pending')}}" class="btn btn-warning"><i class="fas fa-clock"></i> Pending Approvals</a>
                    @endcan
                </div>
                <div class="d-flex">
                    <input wire:model="search" type="text" class="form-control me-2" placeholder="Search notices...">
                    <select wire:model="category" class="form-select me-2" style="width: auto;">
                        <option value="">All Categories</option>
                        <option value="Academic">Academic</option>
                        <option value="Sports">Sports</option>
                        <option value="Cultural">Cultural</option>
                        <option value="Administrative">Administrative</option>
                    </select>
                    <select wire:model="status" class="form-select" style="width: auto;">
                        <option value="">All Statuses</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th wire:click="sortBy('title')" style="cursor: pointer;">
                            Title @include('components.sort-icon', ['field' => 'title'])
                        </th>
                        <th>Category</th>
                        <th wire:click="sortBy('start_date')" style="cursor: pointer;">
                            Start Date @include('components.sort-icon', ['field' => 'start_date'])
                        </th>
                        <th wire:click="sortBy('stop_date')" style="cursor: pointer;">
                            End Date @include('components.sort-icon', ['field' => 'stop_date'])
                        </th>
                        <th>Status</th>
                        <th>Featured</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($notices as $notice)
                        <tr>
                            <td>{{ $notice->title }}</td>
                            <td>
                                <span class="badge bg-{{ $notice->category == 'Academic' ? 'info' : ($notice->category == 'Sports' ? 'success' : ($notice->category == 'Cultural' ? 'warning' : 'secondary')) }}">
                                    {{ $notice->category }}
                                </span>
                            </td>
                            <td>{{ $notice->start_date }}</td>
                            <td>{{ $notice->stop_date }}</td>
                            <td>
                                @if($notice->approval_status == 'approved')
                                    <span class="badge bg-success">Approved</span>
                                @elseif($notice->approval_status == 'pending')
                                    <span class="badge bg-warning">Pending</span>
                                @else
                                    <span class="badge bg-danger">Rejected</span>
                                @endif
                            </td>
                            <td>
                                @if($notice->is_featured)
                                    <span class="badge bg-primary">Featured</span>
                                @else
                                    <span class="badge bg-light text-dark">No</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('notices.show', $notice->id) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @if($notice->approval_status == 'pending' && auth()->user()->can('approve-notices'))
                                        <a href="{{ route('notices.approval', $notice->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-check-circle"></i>
                                        </a>
                                    @endif
                                    @can('delete', $notice)
                                        <button type="button" wire:click="confirmDelete({{ $notice->id }})" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No notices found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <div>
                Showing {{ $notices->firstItem() ?? 0 }} to {{ $notices->lastItem() ?? 0 }} of {{ $notices->total() }} notices
            </div>
            <div>
                {{ $notices->links() }}
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Notice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this notice?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" wire:click="deleteNotice" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('show-delete-modal', event => {
        $('#deleteModal').modal('show');
    });
    
    window.addEventListener('hide-delete-modal', event => {
        $('#deleteModal').modal('hide');
    });
</script>
@endpush
