<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $tbale="detail_transaksis";
    protected $fillable = ['user_id','konsumen_id','transaksi_id','price'];
}
