<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    protected $tbale="konsumens";
    protected $fillable = ['user_id','nama_komsumen','alamat_konsumen','kontak_konsumen'];
}
