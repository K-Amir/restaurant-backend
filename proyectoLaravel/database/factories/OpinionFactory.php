<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opinione>
 */
class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'restaurant_id' => Restaurant::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'comment' => fake()->text(),
            'score' => random_int(0,5),
            'creation_date' => fake()->dateTimeBetween(Carbon::createFromFormat('Y-m-d H:i', '2023-03-01 13:00'), Carbon::createFromFormat('Y-m-d H:i', '2023-06-21 22:30')),

        ];
    }
}
