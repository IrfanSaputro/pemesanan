<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_produk', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->string('nama_produk', 200);
            $table->string('deskripsi_produk', 1000);
            $table->string('gambar_produk', 1000);
            $table->integer('harga_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_produk');
    }
}
