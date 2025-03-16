<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CreateCurrentAcademicYearRecord
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()?->user()?->studentRecord != null) {
            // Check if school and academic year are set
            if (!auth()->user()->school || !auth()->user()->school->academic_year_id) {
                Log::warning('School or academic year not set for user', [
                    'user_id' => auth()->id(),
                    'school_id' => auth()->user()->school_id ?? null,
                    'academic_year_id' => auth()->user()->school->academic_year_id ?? null
                ]);
                return $next($request);
            }
            
            // Ensure academic_year_id is valid
            $academicYearId = auth()->user()->school->academic_year_id;
            
            // Check if the student record is already associated with this academic year
            if (!auth()->user()->studentRecord->academicYears()->find($academicYearId)) {
                try {
                    auth()->user()->studentRecord->academicYears()->syncWithoutDetaching([
                        $academicYearId => [
                            'my_class_id' => auth()->user()->studentRecord->my_class_id,
                            'section_id'  => auth()->user()->studentRecord->section_id,
                        ],
                    ]);
                    
                    Log::info('Student record associated with academic year', [
                        'user_id' => auth()->id(),
                        'academic_year_id' => $academicYearId
                    ]);
                } catch (\Exception $e) {
                    Log::error('Failed to associate student record with academic year', [
                        'error' => $e->getMessage(),
                        'user_id' => auth()->id(),
                        'academic_year_id' => $academicYearId
                    ]);
                }
            }
        }

        return $next($request);
    }
}
