<?php

namespace App\Livewire;

use App\Models\MyClass;
use App\Models\Section;
use App\Services\MyClass\MyClassService;
use App\Services\Section\SectionService;
use App\Traits\MarkTabulationTrait;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class TermResultTabulation extends Component
{
    use MarkTabulationTrait;

    public $section;
    public $sections;
    public $classes;
    public $class;
    public $term;
    public $tabulatedRecords;
    public $createdTabulation;
    public $title;

    protected $listeners = ['print'];

    public function mount(SectionService $sectionService, MyClassService $myClassService)
    {
        //get term and use it to fetch all exams in term
        $this->term = auth()->user()->school->term;
        $this->classes = $myClassService->getAllClasses();

        //sets subjects etc if class isn't empty
        if (!$this->classes->isEmpty()) {
            $this->class = $this->classes[0]->id;
            $this->sections = $this->classes[0]->sections;
            $this->updatedClass();
        }
    }

    public function updatedClass()
    {
        //get instance of class
        $class = MyClass::find($this->class);
        $this->sections = $class->sections;
    }

    public function render()
    {
        return view('livewire.term-result-tabulation');
    }

    //print tabulation
    public function print()
    {
        $pdf = Pdf::loadView('livewire.mark-tabulation', [
            'tabulatedRecords'                  => $this->tabulatedRecords,
            'totalMarksAttainableInEachSubject' => $this->totalMarksAttainableInEachSubject,
            'subjects'                          => $this->subjects,
            'title'                            => $this->title,
        ])->output();

        return response()->streamDownload(
            fn () => print($pdf),
            'Result Tabulation.pdf'
        );
    }
}
