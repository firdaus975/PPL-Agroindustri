<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluarans';
    
    protected $fillable = ['tanggal','kegiatan','biaya'];
}
