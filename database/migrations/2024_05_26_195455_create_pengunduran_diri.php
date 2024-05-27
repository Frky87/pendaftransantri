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
        Schema::create('pengunduran_diri', function (Blueprint $table) {
            $table->string('ID_Pengunduran_Diri', 10)->primary();
            $table->string('ID_Santri', 10);
            $table->date('Tanggal_Pengunduran');
            $table->string('Alasan_Pengunduran');
            $table->string('Keterangan');
            $table->enum('Status_Pengunduran', ['Diterima', 'Diproses', 'Ditolak']);

            // Tambahkan foreign key jika diperlukan
            $table->foreign('ID_Santri')->references('ID_Santri')->on('santri')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengunduran_diri');
    }
};
