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
        Schema::create('biayapenerimaan', function (Blueprint $table) {
            $table->string('ID_Biaya_Penerimaan', 10)->primary();
            $table->foreign('ID_Calon_Santri')->references('id')->on('calonsantri')->onDelete('cascade');
            $table->string('Jenis_Pembayaran');
            $table->int('Biaya');
            $table->string('Deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biayapenerimaan');
    }
};
