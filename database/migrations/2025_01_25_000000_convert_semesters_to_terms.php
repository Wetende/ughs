<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Get reference values from an existing semester if any
        $referenceSemester = DB::table('semesters')->first();
        
        if ($referenceSemester) {
            $academicYearId = $referenceSemester->academic_year_id;
            $schoolId = $referenceSemester->school_id;
            
            // Delete all existing semesters
            DB::table('semesters')->delete();
            
            // Create the three terms
            DB::table('semesters')->insert([
                [
                    'name' => 'Term 1',
                    'academic_year_id' => $academicYearId,
                    'school_id' => $schoolId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Term 2',
                    'academic_year_id' => $academicYearId,
                    'school_id' => $schoolId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Term 3',
                    'academic_year_id' => $academicYearId,
                    'school_id' => $schoolId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('semesters')) {
            // Get reference values
            $referenceTerm = DB::table('semesters')->first();
            
            if ($referenceTerm) {
                $academicYearId = $referenceTerm->academic_year_id;
                $schoolId = $referenceTerm->school_id;
                
                // Delete all terms
                DB::table('semesters')->delete();
                
                // Restore default semester
                DB::table('semesters')->insert([
                    'name' => 'Semester 1',
                    'academic_year_id' => $academicYearId,
                    'school_id' => $schoolId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
};
