<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index()
    {
        return view('keuangan.keuangan');
    }
	
	    public function pendapatan()
    {
        $penjualan=\App\PendapatanKaret::get();
        return view('keuangan.pendapatan',['penjualan'=>$penjualan]);
    }
	
	
	    public function pengeluaran()
    {
        $pengeluaran=\App\Pengeluaran::get();
        return view('keuangan.pengeluaran',['pengeluaran'=>$pengeluaran]);
    }

    public function gaji($id,$role)
    {
		if($role==1)
		{
			 return view('keuangan.gaji');
		}else{
		$gaji=\App\GajiPegawai::where('user_id',$id)->get();
		return view('keuangan.rincian_gaji',['gaji'=>$gaji]);
		}


    }
    
}
