<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produk', function(Blueprint $table){
            $table->increments('id');
            $table->string('token_produk', 255);
            $table->string('nama_produk', 100);
            $table->text('deskripsi');
            $table->string('warna', 50);
            $table->string('model');
            $table->string('stok', 100);
            $table->string('harga', 150);
            $table->boolean('status');
            $table->string('gambar');
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
        Schema::drop('tbl_produk');
    }
}
