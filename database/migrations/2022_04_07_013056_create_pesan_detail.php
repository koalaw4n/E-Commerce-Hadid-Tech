<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_detail', function (Blueprint $table) {
            $table->bigIncrements('id_pesanan');
            $table->string('id_produk');
            $table->integer('id_pesan');
            $table->integer('jumlah');
            $table->integer('jumlah_harga');
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
        Schema::dropIfExists('pesan_detail');
    }
}
