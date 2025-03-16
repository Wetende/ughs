<?php

namespace App\Livewire;

use App\Models\School;
use App\Models\User;
use App\Models\Notice;
use App\Services\Section\SectionService;
use Livewire\Component;

class DashboardDataCards extends Component
{
    public $classes;

    public $sections;

    public $students;

    public $classGroups;

    public $teachers;

    public $parents;
    
    public $notices;

    public function mount(SectionService $sectionService)
    {
        $school = School::first();
        $this->classGroups = $school->classGroups()->count();
        $this->classes = $school->myClasses()->count();
        $this->sections = $sectionService->getAllSections()->count();
        $this->students = User::inSchool()->students()->activeStudents()->count();
        $this->teachers = User::inSchool()->role('teacher')->count();
        $this->parents = User::inSchool()->role('parent')->count();
        $this->notices = Notice::where('approval_status', 'approved')->count();
    }

    public function render()
    {
        return view('livewire.dashboard-data-cards');
    }
}
