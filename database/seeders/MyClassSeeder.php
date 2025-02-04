<?php

namespace Database\Seeders;

use App\Models\MyClass;
use Illuminate\Database\Seeder;

class MyClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyClass::firstOrcreate([
            'id'             => 1,
            'name'           => 'Form 1 Blue',
            'class_group_id' => 1,
        ]);

        MyClass::firstOrcreate([
            'id'             => 2,
            'name'           => 'Form 2 Blue',
            'class_group_id' => 1,
        ]);

        MyClass::firstOrcreate([
            'id'             => 3,
            'name'           => 'Form 3 Green',
            'class_group_id' => 2,
        ]);

        MyClass::firstOrcreate([
            'id'             => 4,
            'name'           => 'Form 4 Green',
            'class_group_id' => 2,
        ]);

        MyClass::factory()->count(5)->create();
    }
}
