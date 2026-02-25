<?php

namespace Database\Seeders;

use App\Models\Daftarmenu;
use App\Models\Daftarmitrarumahmakann;
use App\Models\Jadimitra;
use App\Models\Kategorit;
use App\Models\Tentangkami;
use App\Models\Lokasimakangratis;
use App\Models\Lokasipengajuan;
use App\Models\User;
use App\Models\Donatur;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);


            Kategorit::create([
                'nama'  => 'Makanan',
                'slug' => '-makanan',
            ]);
            Kategorit::create([
                'nama'  => 'Kesehatan',
                'slug' => '-kesehatan',
            ]);
            Kategorit::create([
                'nama'  => 'Pendidikan',
                'slug' => '-pendidikan',
            ]);
            Kategorit::create([
                'nama'  => 'Infrastruktur',
                'slug' => '-infrastrukturs',
            ]);



    }
}
