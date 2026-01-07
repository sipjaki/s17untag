<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jadimitra>
 */
class JadimitraFactory extends Factory
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
            'nama_rumahmakan' => $this->faker->company,
            'nama_pemilik' => $this->faker->name,
            'pilihan_kota' => $this->faker->city,
            'alamat' => $this->faker->address,
            'nomor_telepon' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'active' => 'in progress',
            'tanggal_berdiri' => $this->faker->date(),
            'kuota_porsi' => $this->faker->numberBetween(10, 100),
            'ktp' => $this->faker->imageUrl(), // Gambar KTP, ini hanya contoh
            'foto_mitra' => $this->faker->imageUrl(), // Gambar mitra, ini hanya contoh
            'foto_umkm' => $this->faker->imageUrl(), // Gambar UMKM, ini hanya contoh
            'keterangan_mitra' => $this->faker->paragraph // Keterangan m
            //
        ];
    }
}
