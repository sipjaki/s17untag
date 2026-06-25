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
        Schema::table('berandas', function (Blueprint $table) {
            // Tambahkan kolom keterangan
            $table->text('sabha6')->nullable()->after('sabha5');
            $table->text('sabha7')->nullable()->after('sabha6');
            $table->text('sabha8')->nullable()->after('sabha7');
            $table->text('sabha9')->nullable()->after('sabha8');
            $table->text('sabha10')->nullable()->after('sabha9');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('berandas', function (Blueprint $table) {
            $table->dropColumn(['sabha6', 'sabha7', 'sabha8', 'sabha9', 'sabha10']);
        });
    }
};
