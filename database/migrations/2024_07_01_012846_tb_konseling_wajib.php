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
        Schema::create('tb_konseling_wajib', function (Blueprint $table) {
            $table->id(); // Ini akan membuat primary key auto increment

            $table->string('kw_name', 50);
            $table->date('kw_jadwal');
            $table->string('kw_ruangan', 50);
            $table->timestamps(); // Ini akan membuat created_at dan updated_at sebagai timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_konseling_wajib');
    }
};
