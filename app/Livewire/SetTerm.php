<?php

namespace App\Livewire;

use App\Services\Term\TermService;
use Livewire\Component;

class SetTerm extends Component
{
    public $terms;

    public function mount(TermService $termService)
    {
        $this->terms = $termService->getAllTermsInAcademicYear(auth()->user()->school->academicYear->id);
    }

    public function render()
    {
        return view('livewire.set-term');
    }
}
