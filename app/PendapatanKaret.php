<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendapatanKaret extends Model
{
    protected $table ='penjualan_karets';

    protected $fillable = ['tanggal','nama_pembeli','berat_karet','total_harga'];
}