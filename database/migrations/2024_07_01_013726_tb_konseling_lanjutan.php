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
        Schema::create('konseling_lanjutan', function (Blueprint $table) {
            $table->id(); // Ini akan membuat primary key auto increment

            $table->string('kl_name', 50);
            $table->date('kl_jadwal');
            $table->unsignedBigInteger('siswa_fk');
            $table->unsignedBigInteger('gurubk_fk');
            $table->string('kl_ruangan', 50)->nullable();
            $table->string('kl_kategori', 50);

            // Menambahkan foreign key constraint
            $table->foreign('siswa_fk')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('gurubk_fk')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps(); // Ini akan membuat created_at dan updated_at sebagai timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konseling_lanjutan');
    }
};
