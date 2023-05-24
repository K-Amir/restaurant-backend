<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $lat = 38.09421550261058;
        $long = -3.6312108875712377;
        return [
            'name' => fake()->word(),
            'phone' => fake()->unique()->phoneNumber(),
            'address' => "C/ Mas falsa que pirri",
            'city' => "Linares",
            'terrace' => fake()->boolean(),
            'score' => random_int(0,5),
            'avg_price' => fake()->numberBetween(5,40),
            'type_food' => "Mediterranea",
            'description' => fake()->paragraph(),
            'latitude' => fake()->latitude($min = ($lat - (rand(0,20) / 1000)), $max = ($lat + (rand(0,20) / 1000))),
            'longitude' => fake()->longitude($min = ($long - (rand(0,20) / 1000)), $max = ($long + (rand(0,20) / 1000))),
            'status' => 0
        ];
    }
}
