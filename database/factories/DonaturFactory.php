<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donatur>
 */
class DonaturFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->name, // Generates a random name
            'fundraising_id' => mt_rand(1, 3), // Assumes you have a Fundraising factory
            'total_amount' => $this->faker->numberBetween(1000, 100000), 
            'phone_number' => '+628' . $this->faker->numerify('#########'), // Generates a random amount between 1000 and 100000
            'notes' => $this->faker->sentence, // Generates a random sentence
            'is_paid' => $this->faker->boolean, // Generates a random boolean value
            'proof' => $this->faker->imageUrl(), // Generates a random image URL as proof
            'email' => fake()->unique()->safeEmail(),
            //
            //
        ];
    }
}
