<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->realText(),
            'state' => fake()->boolean,
            'location' => fake()->city(),
            'notes' => fake()->realTextBetween(10, 50),
            'deadline' => fake()->dateTimeThisYear()
        ];
    }
}
