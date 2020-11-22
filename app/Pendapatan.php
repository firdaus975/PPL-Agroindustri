<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    Protected $table = 'pendapatans';
    Protected $fillable =['user_id','berat_bersih','berat_kotor'];
    Protected $dates = ['create_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getCreateAt()
    {
        return Carbon\Carbon::setToStringFormat('Ym-d');
    }


}
