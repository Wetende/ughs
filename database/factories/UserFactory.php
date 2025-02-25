<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use App\Models\County;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $firstName = $this->faker->firstName();
        $lastName = $this->faker->lastName();
        
        return [
            'first_name'        => $firstName,
            'last_name'         => $lastName,
            'username'          => strtolower($firstName . '.' . $lastName),
            'email'             => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'remember_token'    => Str::random(10),
            'address'           => $this->faker->address(),
            'birthday'          => $this->faker->date(),
            'school_id'         => 1,
            'blood_group'       => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
            'denomination'      => $this->faker->randomElement(['Christianity', 'Muslim', 'Hindu', 'None']),
            'id_number'         => 'ID' . $this->faker->unique()->numberBetween(10000000, 99999999),
            'passport_number'   => 'P' . $this->faker->unique()->numberBetween(100000, 999999),
            'county_id'         => County::inRandomOrder()->first()->id,
            'city'              => $this->faker->city(),
            'gender'            => $this->faker->randomElement(['male', 'female']),
            'phone'             => '+254' . $this->faker->numberBetween(700000000, 799999999),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Configure the model factory for students.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function student()
    {
        return $this->state(function (array $attributes) {
            return [
                'id_number' => null,
                'passport_number' => null,
                'phone' => null,
            ];
        });
    }
}
