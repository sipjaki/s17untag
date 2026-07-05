<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sabha4s', function (Blueprint $table) {
            $table->text('sabha1')->nullable()->change();
            $table->text('sabha2')->nullable()->change();
            $table->text('sabha3')->nullable()->change();
            $table->text('sabha4')->nullable()->change();
            $table->text('sabha5')->nullable()->change();
            $table->text('sabha6')->nullable()->change();
            $table->text('sabha7')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('sabha4s', function (Blueprint $table) {
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

