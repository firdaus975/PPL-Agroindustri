<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GajiPegawai extends Model
{
    protected $table='gaji_pegawais';
    protected $fillable=['user_id','bulan_id','gaji_pokok','gaji_lembur','biaya_transportasi','tunjangan_kesehatan','biaya_makan','tunjangan_kesejahteraan','tahun'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bulan()
    {
        return $this->belongsTo('App\Bulan');
    }
}
