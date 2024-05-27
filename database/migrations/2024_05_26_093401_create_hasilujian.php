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
        Schema::create('hasilujian', function (Blueprint $table) {
            $table->string('ID_Hasil_Ujian', 10)->primary();
            $table->foreign('ID_Pelaksanaan_Ujian')->references('id')->on('ujian')->onDelete('cascade');
            $table->foreign('ID_Calon_Santri')->references('id')->on('calonsantri')->onDelete('cascade');
            $table->string('Jumlah_Soal,10');
            $table->time('Waktu_Selesai');
            $table->int('Nilai_Akhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasilujian');
    }
};
