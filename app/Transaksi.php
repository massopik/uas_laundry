<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $tbale="transaksis";
    protected $fillable = ['berat_baju','tanggal','total_harga','jenis_barang','konsumen_id','user_id'];
}
