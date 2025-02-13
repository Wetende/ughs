<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::firstOrCreate([
            'id'          => 1,
            'name'        => 'First Term Exam',
            'description' => 'First Term Examination',
            'term_id'     => '1',
            'start_date'  => '2022-03-22',
            'stop_date'   => '2022-03-24',
            'active'      => true,
            'publish_result' => true,
        ]);

        Exam::factory()->count(10)->create();
    }
}
