<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaksanaanUjianTable extends Migration
{
    public function up()
    {
        Schema::create('pelaksanaan_ujians', function (Blueprint $table) {
            $table->char('ID_Pelaksanaan_Ujian', 10)->primary();
            $table->date('Tanggal_Ujian');
            $table->string('Jenis_Ujian', 100);
            $table->time('Waktu_Mulai');
            $table->time('Durasi_Ujian');
            $table->integer('Nilai_Minimum');
            $table->timestamps(); // This will create `created_at` and `updated_at` fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelaksanaan_ujians');
    }
}

