<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fundraising_phases>
 */
class FundraisingPhasesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fundraising_id' => mt_rand(1, 3),
            'name' => $this->faker->words(3, true),
            'photo' => $this->faker->boolean,
            'notes' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
