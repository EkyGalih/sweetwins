<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Penjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_penjualan', function(Blueprint $table){
            $table->increments('id');
            $table->string('token_penjualan', 255);
            $table->string('nama_pembeli', 100);
            $table->string('nama_produk');
            $table->string('token_cust');
            $table->string('kontak');
            $table->integer('jumlah_barang');
            $table->integer('harga');
            $table->integer('total_bayar');
            $table->boolean('status_bayar');
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
        Schema::drop('tbl_penjualan');
    }
}
