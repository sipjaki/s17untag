<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftarmitrarumahmakann>
 */
class DaftarmitrarumahmakannFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nama_pemilik = [
            "Ibu Dewi Putri",
            "Bpk Ahmad Yudha",
            "Bpk Fahmi Pratama",
            "Ibu Lina Fitriani",
            "Bpk Rizky Adi",
            "Ibu Sinta Wardhani",
            "Bpk Dian Pratama Putra",
            "Ibu Anita Dewi",
            "Bpk Eko Wijaya",
            "Ibu Siti Rahayu"
        ];
        
        $namapemilik = $this->faker->randomElement($nama_pemilik);
        // -------------------------------------------------------
        
        $rumahmakan = [
            "Warteg Cileunyi Makmur",
            "Sari Warteg Kopo Asri",
            "Warteg Lembang Indah",
            "Warteg Stasiun Bandung Sejahtera",
            "Warteg Cileunyi Prima",
            "Warteg Kopo Sejahtera",
            "Warteg Lembang Sejahtera",
            "Warteg Stasiun Bandung Barat",
            "Warteg Cileunyi Sentosa",
            "Warteg Kopo Makmur"
        ];
        
        $rumah_makan = $this->faker->randomElement($rumahmakan);
        // -------------------------------------------------------
        
        $alamat_rumahmakan = [
            "Jl. Cileunyi No. 10, RT 01/RW 02, Cileunyi, Bandung",
            "Jl. Kopo No. 25, RT 03/RW 04, Kopo, Bandung",
            "Jl. Lembang Indah No. 8, RT 05/RW 06, Lembang, Bandung",
            "Jl. Stasiun Bandung No. 15, RT 07/RW 08, Stasiun Bandung, Bandung",
            "Jl. Cileunyi Raya No. 17A, RT 09/RW 10, Cileunyi, Bandung",
            "Jl. Kopo Sejahtera No. 32, RT 11/RW 12, Kopo, Bandung",
            "Jl. Lembang Sejahtera No. 5, RT 13/RW 14, Lembang, Bandung",
            "Jl. Stasiun Bandung Barat No. 20, RT 15/RW 16, Stasiun Bandung, Bandung",
            "Jl. Cileunyi Sentosa No. 12, RT 17/RW 18, Cileunyi, Bandung",
            "Jl. Kopo Makmur No. 9, RT 19/RW 20, Kopo, Bandung"
        ];

        $alamatrumahmakan = $this->faker->randomElement($alamat_rumahmakan);

        
        // $alamat_email = [];

        // foreach ($alamat_rumahmakan as $data) {
        //     // Konversi nama rumah makan menjadi lowercase dan hapus spasi
        //     $username = str_replace(' ', '', strtolower($data));
        //     // Generate email secara acak dengan menambahkan domain
        //     $email = $username . rand(100, 999) . "@gmail.com";
        //     // Tambahkan email ke dalam array
        //     $alamat_email[] = $email;
        // }

        // print_r($alamat_email);
        
        $cities = ['Cileunyi', 'Kopo', 'Lembang', 'Bandung Barat'];
        
        $city = $this->faker->randomElement($cities);

        // ---------------------------------------

        $nama_rumahmakan = [
            "Warteg Makmur",
            "Sari Warteg  Asri",
            "Warteg Indah",
            "Warteg Sejahtera",
            "Warteg Prima",
            "Warteg Sejahtera",
            "Warteg Sejahtera",
            "Warteg Stasiun",
            "Warteg Sentosa",
            "Warteg Makmur"
        ];
    
        $random_nama_rumahmakan = $nama_rumahmakan[array_rand($nama_rumahmakan)];
        // Menghilangkan spasi dan mengonversi menjadi huruf kecil
        $username = strtolower(str_replace(' ', '', $random_nama_rumahmakan));
        

        return [

            'nama_pemilik' => $namapemilik,
            'namarumahmakan' => $rumah_makan,
            'alamat_pemilik' => $this->faker->address,
            'alamat_rumahmakan' => $alamatrumahmakan,
            'kota' => $city,
            'status' => $this->faker->randomElement(['Approved', 'Rejected', 'In Progress']),
            // 'kota' => $this->faker->randomElement(['Cileunyi', 'Kopo', 'Lembang', 'Bandung Barat']),
            // 'alamat' => $this->faker->streetAddress . ', ' . $city . ', Indonesia',
            'telepon' => '08' . $this->faker->numerify('##########'),
            // 'email' => $this->faker->unique()->safeEmail,
            // 'email' => $this->faker->unique()->gmail(),
            'email' => $username . '@gmail.com',
            // 'email' => $alamat_email,
            'ktp' => $this->faker->numerify('################'), // 16 digit KTP number
            'gambar' => $this->faker->imageUrl(640, 480, 'business'),
            'kuotamakan' => $this->faker->numberBetween(1, 10000),
            'deskripsi' => $this->faker->paragraph,
            //
        ];
            //
    }
}
