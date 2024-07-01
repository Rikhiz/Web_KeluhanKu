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
        Schema::create('tb_konseling', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_fk');
            $table->foreign('siswa_fk')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('gurubk_fk');
            $table->foreign('gurubk_fk')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('konseling_wajib_fk');
            $table->foreign('konseling_wajib_fk')->references('id')->on('tb_konseling_wajib')->onDelete('cascade');

            // Add more columns if needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
