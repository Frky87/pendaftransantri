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
        Schema::create('calon_santri', function (Blueprint $table) {
            $table->string('ID_Calon_Santri', 10)->primary();
            $table->String('Nama',100);
            $table->string('Tempat_Tanggal_Lahir', 100);
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('Alamat_Rumah', 100);
            $table->string('No_Telepon', 10);
            $table->foreign('ID_Pendaftaran')->references('id')->on('pendaftaran')->onDelete('cascade');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_santri');
    }
};
