<?php

namespace App\Livewire;

use App\Services\AcademicYear\AcademicYearService;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class SetAcademicYear extends Component
{
    public $academicYears;
    public $selectedAcademicYear;

    public function mount(AcademicYearService $academicYearService)
    {
        try {
            $this->academicYears = $academicYearService->getAllAcademicYears();
            
            // Set default selected academic year to current one
            if (auth()->user()->school && auth()->user()->school->academic_year_id) {
                $this->selectedAcademicYear = auth()->user()->school->academic_year_id;
            } elseif ($this->academicYears->isNotEmpty()) {
                // If no current academic year, default to the first one
                $this->selectedAcademicYear = $this->academicYears->first()->id;
            }
            
            // Log for debugging
            Log::info('Academic years loaded', [
                'count' => $this->academicYears->count(),
                'selected' => $this->selectedAcademicYear ?? 'none'
            ]);
        } catch (\Exception $e) {
            Log::error('Error loading academic years', [
                'error' => $e->getMessage()
            ]);
            $this->academicYears = collect();
        }
    }

    public function render()
    {
        return view('livewire.set-academic-year');
    }
}
