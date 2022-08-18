<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_event' => $this->faker->name(),
            'description' => $this->faker->unique()->safeEmail(),
            'date_activity' => $this->faker->dateTimeThisMonth()->format('Y-m-d')
        ];
    }
}
