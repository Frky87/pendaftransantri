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
        Schema::create('biaya_pondok', function (Blueprint $table) {
            $table->string('ID_Biaya_Pondok', 10)->primary();
            $table->foreign('ID_Santri')->references('id')->on('santri')->onDelete('cascade');
            $table->string('Nama_Biaya');
            $table->string('Jenis_Biaya');
            $table->string('Deskripsi');
            $table->int('Total_Biaya');
            $table->date('Tanggal_Berlaku');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_pondok');
    }
};
