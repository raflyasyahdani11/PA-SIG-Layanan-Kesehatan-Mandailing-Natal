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
        Schema::create('layanan_kesehatans', function (Blueprint $table) {
            $table->string('id_layanan_kesehatan')->primary();
            $table->string('nama_layanan');
            $table->string('jenis_layanan');
            $table->string('alamat');
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->string('fasilitas');
            $table->foreignId('id_kelurahan')->references('id_kelurahan')->on('kelurahans');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('gambar_tempat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan_kesehatans');
    }
};
