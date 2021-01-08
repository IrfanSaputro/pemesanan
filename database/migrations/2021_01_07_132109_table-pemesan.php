<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePemesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pemesan', function (Blueprint $table) {
            $table->increments('id_pemesan');
            $table->string('nama_pemesan', 100);
            $table->string('alamat_pemesan', 500);
            $table->string('telepon_pemesan', 15);
            $table->string('produk_pemesan', 200);
            $table->string('deskripsi', 1000);
            $table->integer('harga');
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
        Schema::dropIfExists('table_pemesan');
    }
}
