<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'nationality'       => 'Kenya',
            'state'             => 'Uasin Gishu',
            'city'              => 'Eldoret',
            'blood_group'       => 'B+',
            'denomination'      => 'Christian',
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
            'nationality'       => 'Kenya',
            'state'             => 'Uasin Gishu',
            'city'              => 'Eldoret',
            'blood_group'       => 'A+',
            'denomination'      => 'Christian',
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
            'nationality'       => 'Kenya',
            'state'             => 'Uasin Gishu',
            'city'              => 'Eldoret',
            'blood_group'       => 'B+',
            'denomination'      => 'Christian',
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
            'nationality'       => 'Kenya',
            'state'             => 'Uasin Gishu',
            'city'              => 'Eldoret',
            'blood_group'       => 'A+',
            'denomination'      => 'Christian',
            'email_verified_at' => now(),
            'gender'            => 'female',
            'phone'             => '+254700000003',
        ]);
        $student->studentRecord()->create([
            'my_class_id'      => 1,
            'section_id'       => 1,
            'admission_date'   => '2000-01-01',
            'is_graduated'     => false,
            'admission_number' => Str::random(10),
        ]);

        $student->assignRole('student');

        $parent = User::create([
            'email'             => 'parent@parent.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'first_name'        => 'John',
            'last_name'         => 'Doe',
            'username'          => 'parent',
            'address'           => 'parent street',
            'birthday'          => '2000-01-01',
            'nationality'       => 'Kenya',
            'state'             => 'Uasin Gishu',
            'city'              => 'Eldoret',
            'blood_group'       => 'B+',
            'denomination'      => 'Christian',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'phone'             => '+254700000004',
        ]);

        $parent->assignRole('parent');

        $parent->parentRecord()->create();

        $accountant = User::create([
            'email'             => 'accountant@accountant.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'first_name'        => 'Jane',
            'last_name'         => 'Doe',
            'username'          => 'accountant',
            'address'           => 'accountant street',
            'birthday'          => '2000-01-01',
            'nationality'       => 'Kenya',
            'state'             => 'Uasin Gishu',
            'city'              => 'Eldoret',
            'blood_group'       => 'A+',
            'denomination'      => 'Christian',
            'email_verified_at' => now(),
            'gender'            => 'female',
            'phone'             => '+254700000005',
        ]);

        $accountant->assignRole('accountant');

        $librarian = User::create([
            'email'             => 'libratian@librarian.com',
            'password'          => Hash::make('password'),
            'school_id'         => 1,
            'first_name'        => 'John',
            'last_name'         => 'Doe',
            'username'          => 'librarian',
            'address'           => 'librarian street',
            'birthday'          => '2000-01-01',
            'nationality'       => 'Kenya',
            'state'             => 'Uasin Gishu',
            'city'              => 'Eldoret',
            'blood_group'       => 'B+',
            'denomination'      => 'Christian',
            'email_verified_at' => now(),
            'gender'            => 'male',
            'phone'             => '+254700000006',
        ]);

        $librarian->assignRole('librarian');
    }
}
