<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    protected $table ='bulans';
    protected $fillable = ['name_bulan'];

    public function TotalPendapatan()
    {
        return $this->hasMany('App\TotalPendapatan');
    }
}
