<?php

namespace Database\Seeders;

use App\Models\ClassGroup;
use Illuminate\Database\Seeder;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassGroup::firstOrcreate([
            'id'        => 1,
            'name'      => 'Form One',
            'school_id' => 1,
        ]);
        ClassGroup::firstOrcreate([
            'id'        => 2,
            'name'      => 'Form Two',
            'school_id' => 1,
        ]);
        ClassGroup::firstOrcreate([
            'id'        => 3,
            'name'      => 'Form Three',
            'school_id' => 1,
        ]);
        ClassGroup::firstOrcreate([
            'id'        => 4,
            'name'      => 'Form Four',
            'school_id' => 1,
        ]);
        ClassGroup::factory()->times(4)->create();
    }
}
