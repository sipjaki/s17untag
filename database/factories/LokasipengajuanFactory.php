<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lokasipengajuan>
 */
class LokasipengajuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => mt_rand(1,3),
            // 'namalengkap' => $this->faker->name,
            'lokasi' => $this->faker->randomElement(['Cileunyi', 'Kopo', 'Lembang', 'Bandung Barat']),
            'keteranganlokasi' => $this->faker->paragraph,
            //
        ];
    }
}
