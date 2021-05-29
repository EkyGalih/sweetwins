<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar', function (Blueprint $table) {
            $table->foreign('produk_id')
            ->references('id')
            ->on('produk')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('user_id')
            ->references('id')
            ->on('user')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar', function (Blueprint $table) {
            $table->dropColumn('produk_id');
            $table->dropColumn('user_id');
        });
    }
}
