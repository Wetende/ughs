<?php

namespace App\Services\AcademicYear;

use App\Models\AcademicYear;
use App\Models\Term;
use App\Services\School\SchoolService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

class AcademicYearService
{
    /**
     * @var SchoolService
     */
    public $schoolService;

    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;
    }

    /**
     * Get all academic years.
     */
    public function getAllAcademicYears(): Collection|static
    {
        return AcademicYear::where('school_id', auth()->user()->school_id)->get();
    }

    /**
     * Get academic year by Id.
     *
     * @param int $id
     */
    public function getAcademicYearById($id): AcademicYear
    {
        return AcademicYear::find($id);
    }

    /**
     * Create academic year.
     *
     * @param array|Collection $records
     */
    public function createAcademicYear($records): AcademicYear
    {
        $records['school_id'] = auth()->user()->school_id;
        $academicYear = AcademicYear::create($records);

        return $academicYear;
    }

    /**
     * Update Academic Year.
     *
     * @param array|Collection $records
     */
    public function updateAcademicYear(AcademicYear $academicYear, $records): AcademicYear
    {
        $academicYear->start_year = $records['start_year'];
        $academicYear->stop_year = $records['stop_year'];
        $academicYear->save();

        return $academicYear;
    }

    /**
     * Delete an academic year.
     */
    public function deleteAcademicYear(AcademicYear $academicYear): bool|null
    {
        return $academicYear->delete();
    }

    /**
     * Set academic year as current one in school.
     *
     * @param int $academicYearId
     * @param int|null $schoolId
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function setAcademicYear($academicYearId, $schoolId = null): bool
    {
        // Validate academicYearId is not null
        if (empty($academicYearId)) {
            Log::error('Academic year ID cannot be null or empty');
            throw new \InvalidArgumentException('Academic year ID cannot be null or empty');
        }

        $academicYear = AcademicYear::find($academicYearId);
        
        // Validate academic year exists
        if (!$academicYear) {
            Log::error('Academic year not found', ['academic_year_id' => $academicYearId]);
            throw new \InvalidArgumentException("Academic year with ID {$academicYearId} not found");
        }
        
        if (!isset($schoolId)) {
            $schoolId = auth()->user()->school_id;
        }
        
        // Validate school ID is not null
        if (empty($schoolId)) {
            Log::error('School ID cannot be null or empty');
            throw new \InvalidArgumentException('School ID cannot be null or empty');
        }
        
        $school = $this->schoolService->getSchoolById($schoolId);
        
        // Validate school exists
        if (!$school) {
            Log::error('School not found', ['school_id' => $schoolId]);
            throw new \InvalidArgumentException("School with ID {$schoolId} not found");
        }
        
        $school->academic_year_id = $academicYearId;
        
        // Set term id to first term or create a new one
        // Check if the academic year has any terms
        Log::info('Checking for existing terms', [
            'academic_year_id' => $academicYearId
        ]);
        
        $term = Term::where('academic_year_id', $academicYearId)->first();
        
        if ($term) {
            Log::info('Found existing term', [
                'term_id' => $term->id,
                'term_name' => $term->name
            ]);
            $school->term_id = $term->id;
        } else {
            // Create a new term for this academic year
            Log::info('Creating new term', [
                'school_id' => $schoolId,
                'academic_year_id' => $academicYearId
            ]);
            
            try {
                // Double-check academicYearId is still valid before creating term
                if (empty($academicYearId)) {
                    throw new \InvalidArgumentException('Academic year ID cannot be null when creating a term');
                }
                
                $term = Term::create([
                    'name' => 'First',
                    'school_id' => $schoolId,
                    'academic_year_id' => $academicYearId,
                ]);
                
                Log::info('Term created successfully', [
                    'term_id' => $term->id,
                    'term_name' => $term->name
                ]);
                $school->term_id = $term->id;
            } catch (\Exception $e) {
                Log::error('Error creating term', [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                    'academic_year_id' => $academicYearId,
                    'school_id' => $schoolId
                ]);
                throw $e;
            }
        }

        return $school->save();
    }
}
