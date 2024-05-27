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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->string('ID_Pembayaran', 10)->primary();
            $table->foreign('ID_Biaya_Penerimaan')->references('id')->on('biayapenerimaan')->onDelete('cascade');
            $table->foreign('ID_Biaya_Pondok')->references('id')->on('biayapondok')->onDelete('cascade');
            $table->enum('Metode_Pembayaran', ['Tunai', 'Non-Tunia']);
            $table->enum('Metode_Pembayaran', ['Lunas', 'Diproses']);
            $table->date('Tanggal_Pembayaran');
            $table->text('Petugas_Pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
