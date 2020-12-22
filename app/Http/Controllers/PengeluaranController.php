<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
        public function index()
    {
        return view('keuangan.tambah_pengeluaran');
    }

    public function create(Request $request)
    {
        $pengeluaran=new \App\Pengeluaran;
        $pengeluaran->tanggal=$request->tanggal;
        $pengeluaran->kegiatan=$request->kegiatan;
        $pengeluaran->biaya=$request->biaya;
        $pengeluaran->save();
        Alert::success('Berhasil','Data Berhasil Disimpan');
        return redirect('/keuangan/pengeluaran-pabrik');

    }

    public function edit($id)
    {
        $pengeluaran=\App\Pengeluaran::find($id);
        return view('keuangan.edit_pengeluaran',['pengeluaran'=>$pengeluaran]);
    }

    public function update(Request $request,$id)
    {
        $pengeluaran=DB::table('pengeluarans')
                            ->where('id',$id)
                            ->update([
                                'tanggal'=>$request->tanggal,
                                'kegiatan'=>$request->kegiatan,
                                'biaya'=>$request->biaya
                            ]);
        Alert::success('Berhasil','Data Berhasil Diupdate');
        return redirect('/keuangan/pengeluaran-pabrik');


    }
}
