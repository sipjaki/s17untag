<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftarmitrarumahmakanns', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik');
            $table->string('namarumahmakan');
            $table->text('alamat_pemilik');
            $table->text('alamat_rumahmakan');
            $table->string('kota');
            $table->string('status');
            // $table->string('alamat');
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('ktp');
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->bigInteger('kuotamakan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftarmitrarumahmakanns');
    }
};
