<?php

namespace Database\Factories;

use App\Models\Section;
use App\Models\StudentRecord;
use App\Models\User;
use App\Models\County;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentRecordFactory extends Factory
{
    protected $model = StudentRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Create a student user with appropriate fields
        $student = User::factory()->state([
            // Required fields
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'username' => $this->faker->unique()->userName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            
            // Nullable fields for students
            'phone' => null,
            'id_number' => null,
            'passport_number' => null,
            'birthday' => $this->faker->optional()->date(),
            'address' => $this->faker->optional()->address(),
            'blood_group' => $this->faker->optional()->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
            'denomination' => $this->faker->optional()->randomElement(['Christianity', 'Muslim', 'Hindu', 'None']),
            'county_id' => $this->faker->optional()->randomElement(County::pluck('id')->toArray()),
            'city' => $this->faker->optional()->city(),
            'school_id' => 1,
            'email_verified_at' => now(),
        ])->create();

        $section = Section::query()->offset(rand(1, 4))->whereRelation('myClass.classGroup', 'school_id', 1)->first();
        $class = $section->myClass;
        $student->assignRole('student');

        return [
            // Required fields
            'user_id' => $student->id,
            'admission_number' => $this->faker->unique()->numerify('ADM####'),
            
            // Nullable fields
            'my_class_id' => $class->id,
            'section_id' => $class->sections->first()->id ?? null,
            'admission_date' => $this->faker->optional()->date(),
            'is_graduated' => false,
        ];
    }
}
