<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function(Blueprint $table){
            $table->string('id', 40)->primary();
            $table->string('_token', 255);
            $table->string('user_id', 40);
            $table->string('produk_id', 40);
            $table->string('jumlah_barang');
            $table->string('harga');
            $table->string('total_bayar');
            $table->boolean('status_bayar', ['0','1'])->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pemesanan');
    }
}
