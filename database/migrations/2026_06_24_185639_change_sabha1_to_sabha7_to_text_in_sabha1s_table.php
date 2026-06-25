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
        Schema::table('sabha1s', function (Blueprint $table) {
            // Ubah tipe data dari string menjadi text
            $table->text('sabha1')->nullable()->change();
            $table->text('sabha2')->nullable()->change();
            $table->text('sabha3')->nullable()->change();
            $table->text('sabha4')->nullable()->change();
            $table->text('sabha5')->nullable()->change();
            $table->text('sabha6')->nullable()->change();
            $table->text('sabha7')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sabha1s', function (Blueprint $table) {
            // Kembalikan ke string (opsional, kalau mau rollback)
            $table->string('sabha1')->nullable()->change();
            $table->string('sabha2')->nullable()->change();
            $table->string('sabha3')->nullable()->change();
            $table->string('sabha4')->nullable()->change();
            $table->string('sabha5')->nullable()->change();
            $table->string('sabha6')->nullable()->change();
            $table->string('sabha7')->nullable()->change();
        });
    }
};
