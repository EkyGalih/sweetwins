<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Komentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_komentar', function(Blueprint $table){
            $table->increments('id');
            $table->string('token_komentar', 255);
            $table->string('nama', 100);
            $table->string('kontak', 100);
            $table->text('komentar');
            $table->string('rating', 10);
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
        Schema::drop('tbl_komentar');
    }
}
