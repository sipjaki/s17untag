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
        Schema::create('sabha12s', function (Blueprint $table) {
           $table->id();

            $table->foreignId('sabhaakses_id')->nullable();
            $table->string('sabha1')->nullable();
            $table->string('sabha2')->nullable();
            $table->string('sabha3')->nullable();
            $table->string('sabha4')->nullable();
            $table->string('sabha5')->nullable();
            $table->string('sabha6')->nullable();
            $table->string('sabha7')->nullable();

            $table->text('sabha8')->nullable();
            $table->text('sabha9')->nullable();
            $table->text('sabha10')->nullable();

            $table->string('sabhaberkas1')->nullable();
            $table->string('sabhaberkas2')->nullable();
            $table->string('sabhaberkas3')->nullable();
            $table->string('sabhaberkas4')->nullable();
            $table->string('sabhaberkas5')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sabha12s');
    }
};
