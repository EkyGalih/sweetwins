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
        Schema::create('komentar', function(Blueprint $table){
            $table->string('id', 40)->primary();
            $table->string('token_komentar', 255);
            $table->string('user_id', 40);
            $table->string('produk_id', 40);
            $table->text('komentar');
            $table->string('rating', 10)->nullable();
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
        Schema::drop('komentar');
    }
}
