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
        Schema::create('wawancara', function (Blueprint $table) {
            $table->string('ID_Wawancara', 10)->primary();
            $table->foreign('ID_Calon_Santri')->references('id')->on('calonsantri')->onDelete('cascade');
            $table->date('Tingkatan_Wawancara');
            $table->time('Mulai_Wawancara');
            $table->string('Pewawancara',150);
            $table->int('Nilai_Wawancara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wawancara');
    }
};
