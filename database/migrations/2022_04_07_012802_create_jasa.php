<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa', function (Blueprint $table) {
            $table->bigIncrements('id_jasa');
            $table->string('materi_jasa');
            $table->string('gambar_jasa');
            $table->string('keterangan_jasa');
            $table->string('kategori_jasa');
            $table->integer('harga_jasa');
            $table->string('instruktur_jasa');
            $table->datetime('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jasa');
    }
}
