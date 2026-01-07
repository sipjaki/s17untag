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
        Schema::create('lokasimakangratis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('daftarmitrarumahmakann_id');
            $table->text('alamat');
            $table->string('kota')->nullable();
            $table->string('kontak')->nullable();
            $table->string('jam_operasional')->nullable();
            $table->bigInteger('kuota')->nullable();
            $table->text('deskripsi')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasimakangratis');
    }
};
