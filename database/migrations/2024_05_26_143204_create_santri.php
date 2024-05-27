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
        Schema::create('santri', function (Blueprint $table) {
            $table->string('ID_Santri', 10)->primary();
            $table->foreign('ID_Calon_Santri')->references('id')->on('ujian')->onDelete('cascade');
            $table->foreign('Nama')->references('nama')->on('calonsantri')->onDelete('cascade');
            $table->date('Tanggal_Diterima');
            $table->foreign('ID_Kelas')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santri');
    }
};
