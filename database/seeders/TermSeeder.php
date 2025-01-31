<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Term 1 and set it as the default
        $term1 = Term::firstOrCreate([
            'id' => 1,
        ], [
            'name' => 'Term 1',
            'academic_year_id' => 1,
            'school_id' => 1,
        ]);
        
        // Set Term 1 as the default term for the school
        $term1->school->term_id = $term1->id;
        $term1->school->save();
        
        // Create Term 2 and Term 3
        Term::firstOrCreate([
            'name' => 'Term 2',
            'academic_year_id' => 1,
            'school_id' => 1,
        ]);
        
        Term::firstOrCreate([
            'name' => 'Term 3',
            'academic_year_id' => 1,
            'school_id' => 1,
        ]);
    }
}
