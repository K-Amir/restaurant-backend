<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Restaurant;
use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'restaurant_id' => Restaurant::inRandomOrder()->first()->id,
            'status' => random_int(0,2),
            'num_people' => random_int(1,6),
            'date_reservation' => fake()->dateTimeBetween(Carbon::createFromFormat('Y-m-d H:i', '2023-03-01 13:00'), Carbon::createFromFormat('Y-m-d H:i', '2023-06-21 22:30')),

        ];
    }
}
