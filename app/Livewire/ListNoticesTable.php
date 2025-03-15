<?php

namespace App\Livewire;

use App\Models\Notice;
use Livewire\Component;
use Livewire\WithPagination;

class ListNoticesTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';
    public $category = '';
    public $status = '';
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $noticeIdToDelete = null;
    
    protected $listeners = ['refreshNotices' => '$refresh'];
    
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        
        $this->sortField = $field;
    }
    
    public function confirmDelete($noticeId)
    {
        $this->noticeIdToDelete = $noticeId;
        $this->dispatchBrowserEvent('show-delete-modal');
    }
    
    public function deleteNotice()
    {
        $notice = Notice::findOrFail($this->noticeIdToDelete);
        
        if (auth()->user()->can('delete', $notice)) {
            $notice->delete();
            session()->flash('success', 'Notice deleted successfully.');
        } else {
            session()->flash('error', 'You do not have permission to delete this notice.');
        }
        
        $this->noticeIdToDelete = null;
        $this->dispatchBrowserEvent('hide-delete-modal');
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function updatingCategory()
    {
        $this->resetPage();
    }
    
    public function updatingStatus()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        $notices = Notice::where('school_id', auth()->user()->school_id)
            ->when($this->search, function ($query) {
                return $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('content', 'like', '%' . $this->search . '%');
            })
            ->when($this->category, function ($query) {
                return $query->where('category', $this->category);
            })
            ->when($this->status, function ($query) {
                return $query->where('approval_status', $this->status);
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
            
        return view('livewire.list-notices-table', [
            'notices' => $notices
        ]);
    }
}
