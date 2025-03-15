<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notice>
 */
class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startDate = $this->faker->dateTimeThisYear('+2 months');
        $days = mt_rand(1, 30);
        $stopDate = Carbon::instance($startDate)->addDays($days);
        $categories = ['Academic', 'Sports', 'Cultural', 'Administrative'];

        return [
            'title'           => $this->faker->sentence,
            'content'         => $this->faker->paragraph,
            'attachment'      => $this->faker->imageUrl(),
            'start_date'      => $startDate->format('Y-m-d'),
            'stop_date'       => $stopDate->format('Y-m-d'),
            'active'          => $this->faker->boolean(80), // 80% chance of being active
            'school_id'       => 1,
            'category'        => $this->faker->randomElement($categories),
            'is_featured'     => $this->faker->boolean(20), // 20% chance of being featured
            'approval_status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'approved_by'     => null,
            'approved_at'     => null,
            'is_important'    => $this->faker->boolean(10), // 10% chance of being important
            'event_date'      => $this->faker->boolean(30) ? $this->faker->dateTimeBetween('+1 day', '+2 months') : null, // 30% chance of having an event date
            'rejection_reason'=> null,
        ];
    }

    /**
     * Indicate that the notice is approved.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function approved()
    {
        return $this->state(function (array $attributes) {
            return [
                'approval_status' => 'approved',
                'approved_by'     => 1, // Assuming admin ID is 1
                'approved_at'     => now(),
            ];
        });
    }

    /**
     * Indicate that the notice is pending approval.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function pending()
    {
        return $this->state(function (array $attributes) {
            return [
                'approval_status' => 'pending',
                'approved_by'     => null,
                'approved_at'     => null,
            ];
        });
    }

    /**
     * Indicate that the notice is rejected.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function rejected()
    {
        return $this->state(function (array $attributes) {
            return [
                'approval_status'  => 'rejected',
                'approved_by'      => 1, // Assuming admin ID is 1
                'approved_at'      => now(),
                'rejection_reason' => $this->faker->sentence,
            ];
        });
    }

    /**
     * Indicate that the notice is featured.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function featured()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_featured' => true,
            ];
        });
    }

    /**
     * Indicate that the notice is important.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function important()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_important' => true,
            ];
        });
    }
}
