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
        Schema::create('wali_santri', function (Blueprint $table) {
            $table->char('ID_Wali', 10)->primary();
            $table->String('Nama_Wali',100);
            $table->enum('Hubungan_Wali', ['Kandung', 'Angkat']);
            $table->string('Alamat_Wali', 100);
            $table->string('No_Telepon_Wali', 15);
            $table->string('Email_Wali', 100);
            $table->foreign('ID_Calon_Santri')->references('id')->on('calon_santri')->onDelete('cascade');
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
