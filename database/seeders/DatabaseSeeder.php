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
use App\Models\sabha1;
use App\Models\sabha2;
use App\Models\sabha3;
use App\Models\sabha4;
use App\Models\sabha5;
use App\Models\sabha6;
use App\Models\sabha7;
use App\Models\sabha8;
use App\Models\statusadmin;
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


              User::create([
            'id'  => 1,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigit',
            'statusadmin_id' => '1',
            'avatar' => 'assets/abgblora/logo/iconabgblora.png',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

          User::create([
            'id'  => 2,
            'name'  => 'Pa Anex Fachrian',
            'username' => 'Sigit',
            'statusadmin_id' => '1',
            'avatar' => 'assets/abgblora/logo/iconabgblora.png',
            'email' => 'anexfachrians17@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

          User::create([
            'id'  => 3,
            'name'  => 'Admin Sabhagiriwana 17 ',
            'username' => 'Sigit',
            'statusadmin_id' => '1',
            'avatar' => 'assets/abgblora/logo/iconabgblora.png',
            'email' => 'sabhagiriwana17@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

          User::create([
            'id'  => 4,
            'name'  => 'Admin Sabhagiriwana 17 ',
            'username' => 'Sigit',
            'statusadmin_id' => '1',
            'avatar' => 'assets/abgblora/logo/iconabgblora.png',
            'email' => 'sabhagiriwana17new@gmail.com',
            'password' => bcrypt('adminadmin$$123')
        ]);

        // STATUS ADMIN UNTUK HAK AKSES

            statusadmin::create([
                'id'  => 1,
                'statusadmin'  => 'superadmin',
            ]);

            statusadmin::create([
                'id'  => 2,
                'statusadmin'  => 'admin',
            ]);

            statusadmin::create([
                'id'  => 3,
                'statusadmin'  => 'mahasiswa',
            ]);

            statusadmin::create([
                'id'  => 4,
                'statusadmin'  => 'pengurus',
            ]);

            statusadmin::create([
                'id'  => 5,
                'statusadmin'  => 'hakakseslain',
            ]);

            // ==========================================================

            sabha1::create([
                'id'  => 1,
                'sabha1'  => 'ini contoh',
            ]);


            sabha2::create([
                'id'  => 1,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 2,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 3,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 4,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 5,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 6,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 7,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 8,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 9,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 10,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 11,
                'sabha1'  => 'ini contoh sabha2',
            ]);
            sabha2::create([
                'id'  => 12,
                'sabha1'  => 'ini contoh sabha2',
            ]);




            sabha3::create([
                'id'  => 1,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 2,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 3,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 4,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 5,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 6,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 7,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 8,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 9,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 10,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 11,
                'sabha1'  => 'ini contoh sabha3',
            ]);

            sabha3::create([
                'id'  => 12,
                'sabha1'  => 'ini contoh sabha3',
            ]);



            sabha4::create([
                'id'  => 1,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 2,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 3,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 4,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 5,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 6,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 7,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 8,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 9,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 10,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 11,
                'sabha1'  => 'ini contoh sabha4',
            ]);

            sabha4::create([
                'id'  => 12,
                'sabha1'  => 'ini contoh sabha4',
            ]);


            sabha5::create([
                'id'  => 1,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 2,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 3,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 4,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 5,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 6,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 7,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 8,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 9,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 10,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 11,
                'sabha1'  => 'ini contoh sabha5',
            ]);
            sabha5::create([
                'id'  => 12,
                'sabha1'  => 'ini contoh sabha5',
            ]);

            sabha6::create([
                'id'  => 1,
                'sabha1'  => 'ini contoh sabha6',
            ]);

            sabha6::create([
                'id'  => 2,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 3,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 4,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 5,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 6,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 7,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 8,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 9,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 10,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 11,
                'sabha1'  => 'ini contoh sabha6',
            ]);
            sabha6::create([
                'id'  => 12,
                'sabha1'  => 'ini contoh sabha6',
            ]);


            sabha7::create([
                'id'  => 1,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 2,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 3,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 4,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 5,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 6,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 7,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 8,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 9,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 10,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 11,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);

            sabha7::create([
                'id'  => 12,
                'sabha1'  => 'ini contoh sabha7 prestasi',
            ]);


            }
}
