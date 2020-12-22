<?php

namespace App\Http\Controllers;

use App\PendapatanKaret;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
        public function index()
    {

        return view('keuangan.tambah_pendapatan');
    }

    public function create(request $request)
    {
        $penjualan = new \App\PendapatanKaret;
        $penjualan->tanggal=$request->tanggal;
        $penjualan->nama_pembeli=$request->pembeli;
        $penjualan->berat_karet=$request->beratKaret;
        $penjualan->total_harga=$request->totalHarga;
        $penjualan->save();
        Alert::success('Berhasil','Data Berhasil Disimpan');
        return redirect('/keuangan/penjualan-pabrik');
    }

  
    public function edit($id)
    {
        $penjualan=\App\PendapatanKaret::find($id);
        return view('keuangan.edit_penjualan',['penjualan'=>$penjualan]);
    }

    public function update(Request $request,$id)
    {
        $penjualan=DB::table('penjualan_karets')
                            ->where('id',$id)
                            ->update([
                                'tanggal'=>$request->tanggal,
                                'nama_pembeli'=>$request->pembeli,
                                'berat_karet'=>$request->beratKaret,
                                'total_harga'=>$request->totalHarga,
                            ]);
        Alert::success('Sukses','Data Berhasil Diupdate');
        return redirect('/keuangan/penjualan-pabrik');
    }
}
