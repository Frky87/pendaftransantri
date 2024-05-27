<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pelaksanaan_ujian', function (Blueprint $table) {
        $table->char('ID_Pelaksanaan_Ujian', 10)->primary();
        $table->date('Tanggal_Ujian');
        $table->string('Jenis_Ujian', 100);
        $table->time('Durasi_Ujian');
        $table->integer('Nilai_Minimum');
        $table->string('updated_ad', 20)->nullable();
        $table->string('created_ad', 20)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_santri');
    }
};
