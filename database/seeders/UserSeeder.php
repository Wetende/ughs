<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\County;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        // Get Uasin Gishu county
        $county = County::where('name', 'Uasin Gishu')->first();

        $superAdmin = User::firstOrCreate([
            'id'                => 1,
            'email'             => 'super@admin.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'first_name'        => 'John',
            'last_name'         => 'Doe',
            'username'          => 'superadmin',
            'address'           => 'super admin street',
            'birthday'          => '2000-01-01',
            'id_number'         => 'AD123456',
            'county_id'         => $county->id,
            'city'              => 'Eldoret',
            'blood_group'       => 'B+',
            'denomination'      => 'Christianity',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'phone'             => '+254700000000',
        ]);

        $superAdmin->assignRole('super-admin');
        $superAdmin->save();

        $admin = User::firstOrCreate([
            'id'                => 2,
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'first_name'        => 'Jane',
            'last_name'         => 'Doe',
            'username'          => 'admin',
            'address'           => 'admin street',
            'birthday'          => '2000-01-01',
            'id_number'         => 'AD123457',
            'county_id'         => $county->id,
            'city'              => 'Eldoret',
            'blood_group'       => 'A+',
            'denomination'      => 'Christianity',
            'email_verified_at' => now(),
            'gender'            => 'female',
            'phone'             => '+254700000001',
        ]);

        $admin->assignRole('admin');
        $admin->save();

        $teacher = User::create([
            'id'                => 3,
            'email'             => 'teacher@teacher.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'first_name'        => 'John',
            'last_name'         => 'Doe',
            'username'          => 'teacher',
            'address'           => 'teacher street',
            'birthday'          => '2000-01-01',
            'id_number'         => 'AD123458',
            'county_id'         => $county->id,
            'city'              => 'Eldoret',
            'blood_group'       => 'B+',
            'denomination'      => 'Muslim',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'phone'             => '+254700000002',
        ]);

        $teacher->assignRole('teacher');
        $teacher->teacherRecord()->create([
            'user_id' => $teacher->id,
        ]);

        $student = User::create([
            'id'                => 4,
            'email'             => 'student@student.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'first_name'        => 'Jane',
            'last_name'         => 'Doe',
            'username'          => 'student',
            'address'           => 'student street',
            'birthday'          => '2000-01-01',
            'county_id'         => $county->id,
            'city'              => 'Eldoret',
            'blood_group'       => 'A+',
            'denomination'      => 'Hindu',
            'email_verified_at' => now(),
            'gender'            => 'female',
        ]);

        $student->assignRole('student');

        $parent = User::create([
            'id'                => 5,
            'email'             => 'parent@parent.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'first_name'        => 'John',
            'last_name'         => 'Doe',
            'username'          => 'parent',
            'address'           => 'parent street',
            'birthday'          => '2000-01-01',
            'id_number'         => 'AD123459',
            'county_id'         => $county->id,
            'city'              => 'Eldoret',
            'blood_group'       => 'B+',
            'denomination'      => 'Christianity',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'phone'             => '+254700000004',
        ]);

        $parent->assignRole('parent');
        $parent->parentRecord()->create();
    }
}
