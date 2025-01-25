<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Term 1 and set it as the default
        $term1 = Semester::firstOrCreate([
            'id' => 1,
        ], [
            'name' => 'Term 1',
            'academic_year_id' => 1,
            'school_id' => 1,
        ]);
        
        // Set Term 1 as the default semester for the school
        $term1->school->semester_id = $term1->id;
        $term1->school->save();
        
        // Create Term 2 and Term 3
        Semester::firstOrCreate([
            'name' => 'Term 2',
            'academic_year_id' => 1,
            'school_id' => 1,
        ]);
        
        Semester::firstOrCreate([
            'name' => 'Term 3',
            'academic_year_id' => 1,
            'school_id' => 1,
        ]);
    }
}
