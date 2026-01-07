<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lokasimakangratis>
 */
class LokasimakangratisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'daftarmitrarumahmakann_id' => mt_rand(1, 8),
            'alamat' => $this->faker->address,
            'kota' => $this->faker->randomElement(['Cileunyi', 'Kopo', 'Lembang', 'Bandung Barat']),
            'kontak' => '08' . $this->faker->numerify('##########'),
            'jam_operasional' => $this->faker->time($format = 'H:i') . ' - ' . $this->faker->time($format = 'H:i'),
            'deskripsi' => $this->faker->paragraph,
            'kuota' => $this->faker->numberBetween(1, 10000),
        ];
    }
}
