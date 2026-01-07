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
        Schema::create('jadimitras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_rumahmakan')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('pilihan_kota')->nullable();
            $table->text('alamat')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('active')->nullable()->default('in progress');
            $table->date('tanggal_berdiri')->nullable();
            $table->bigInteger('kuota_porsi')->nullable();
            $table->string('ktp')->nullable();
            $table->string('foto_mitra')->nullable();
            $table->string('foto_umkm')->nullable();
            $table->text('keterangan_mitra')->nullable(); // Kolom untuk keterangan mitra
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadimitras');
    }
};
