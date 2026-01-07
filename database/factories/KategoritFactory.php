<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kategorit>
 */
class KategoritFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->word,
            'slug' => $this->faker->unique()->slug,
            'icon' => $this->faker->optional()->imageUrl(64, 64, 'cats'),
        ];
    }
}
