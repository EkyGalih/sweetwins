<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function(Blueprint $table){
            $table->string('id', 40)->primary();
            $table->string('token_user', 255);
            $table->string('nama_lengkap', 100);
            $table->string('username', 50);
            $table->string('password');
            $table->string('email', 50);
            $table->string('gambar');
            $table->enum('level', ['admin','user']);
            $table->rememberToken();
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
        Schema::drop('user');
    }
}
