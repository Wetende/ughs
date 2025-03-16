<?php

namespace App\Livewire;

use App\Services\Term\TermService;
use Livewire\Component;

class CreateExamForm extends Component
{
    public $terms;

    public function mount(TermService $termService)
    {
        $this->terms = $termService->getAllTermsInAcademicYear(auth()->user()->school->academic_year_id);
    }

    public function render()
    {
        return view('livewire.create-exam-form');
    }
}
