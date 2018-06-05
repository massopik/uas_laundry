<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetailTransaksis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            // $table->increments('id');
            // $table->integer('user_id');
            // $table->integer('konsumen_id');
            // $table->integer('transaksi_id');
            // $table->string('price');
            // $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            // $table->foreign('konsumen_id')->references('id')->on('konsumens')->onDelete('CASCADE');
            // $table->foreign('transaksi_id')->references('id')->on('transaksis')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detail_transaksis');
    }
}
