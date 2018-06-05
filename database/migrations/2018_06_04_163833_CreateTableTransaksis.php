<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('konsumen_id')->fillable();
            $table->unsignedInteger('user_id');
            $table->string('jenis_barang');
            $table->string('berat_baju');
            $table->string('status');
            $table->date('tanggal');
            $table->float('total_harga');
            $table->timestamps();
            $table->foreign('konsumen_id')->references('id')->on('konsumens')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksis');
    }
}
