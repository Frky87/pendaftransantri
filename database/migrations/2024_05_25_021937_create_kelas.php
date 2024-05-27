<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->char('ID_Kelas',10)->primary();
            $table->char('Level_Kelas',10);
            $table->char('Kapasitas_Kelas',10);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}