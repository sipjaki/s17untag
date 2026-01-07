<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fundraising>
 */
class FundraisingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'fundraiser_id' => mt_rand(1, 3),
            'kategorit_id' => mt_rand(1, 3),
            'is_active' => $this->faker->boolean,
            'has_finished' => $this->faker->boolean,
            'name' => $this->faker->words(3, true),
            'slug' => $this->faker->words(3, true), 
            'thumbnail' => $this->faker->imageUrl(),
            'about' => $this->faker->paragraph,
            'target_amount' => $this->faker->numberBetween(1000, 1000000),
            'created_at' => now(),
            'updated_at' => now(),
            //
            //
        ];
    }
}
