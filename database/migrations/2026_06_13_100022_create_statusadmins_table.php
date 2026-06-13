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
        Schema::create('statusadmins', function (Blueprint $table) {
            $table->id();
            $table->string('statusadmin')->nullable();

            $table->string('cadangan1')->nullable();
            $table->string('cadangan2')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statusadmins');
    }
};
