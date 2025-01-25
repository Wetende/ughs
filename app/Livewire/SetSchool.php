<?php

namespace App\Livewire;

use App\Services\School\SchoolService;
use Livewire\Component;

class SetSchool extends Component
{
    public $school;

    public function mount(SchoolService $schoolService)
    {
        $this->school = $schoolService->getSchool();
    }

    public function render()
    {
        return view('livewire.set-school');
    }
}
