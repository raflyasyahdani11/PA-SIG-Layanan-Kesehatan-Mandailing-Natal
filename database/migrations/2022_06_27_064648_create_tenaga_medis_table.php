<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_medis', function (Blueprint $table) {
            $table->string('id_tenaga_medis')->primary();
            $table->string('nama_tenaga_medis');
            $table->string('profesi_tenaga_medis');
            $table->string('id_layanan_kesehatan');
            $table->foreign('id_layanan_kesehatan')->references('id_layanan_kesehatan')->on('layanan_kesehatans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenaga_medis');
    }
};
