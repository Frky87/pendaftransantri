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
        Schema::create('pendidikan_terakhir', function (Blueprint $table) {
            $table->string('ID_Pendidikan', 10)->primary();
            $table->String('Tingkatan_Pendidikan',50);
            $table->string('Nama_Sekolah', 200);
            $table->string('Tahun_Lulus_Sekolah',10);
            $table->string('Pendidikan_Non_Formal', 100);
            $table->string('Tahun_Lulus',10);
            $table->foreign('ID_Calon_Santri')->references('id')->on('calonsantri')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan_terakhir');
    }
};
