<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class GajiPegawaiController extends Controller
{
    public function gaji2($id){
        if ($id==2) {
            # code...
            $gajiAdm=\App\User::where('role_id',2)->get();
            return view('keuangan.gaji_adm',['gajiAdm'=>$gajiAdm]);
        } else {
            # code...
            $gajiPegawai=\App\User::where('role_id',3)->get();
            return view('keuangan.gaji_pegawai',['gajiPegawai'=>$gajiPegawai]);
        }
        
        
    }
	
	public function index2($id)
	{
		$a=$id;
		return view('keuangan.tambah_gaji',['a'=>$a]);
		
	}



    public function lihatGaji(){
        $gajiAdm=\App\GajiPegawai::where('user_id',2)->get();
		//dd($gajiAdm->gajipegawai);
        return view('keuangan.lihat_gaji',['gajiAdm'=>$gajiAdm]);
    }
	
	public function rincian($id)
	{
		$gaji=\App\GajiPegawai::where('user_id',$id)->get();
		return view('keuangan.rincian_gaji',['gaji'=>$gaji]);
	}




    public function create(request $request)
    {
        $gaji=new \App\GajiPegawai();
        $gaji->user_id=$request->id;
        $gaji->gaji_pokok = $request->gajiPokok;
        $gaji->gaji_lembur=$request->gajiLembur;
        $gaji->tunjangan_kesehatan=$request->tunjanganKesehatan;
        $gaji->tunjangan_kesejahteraan=$request->tunjanganKesejahteraan;
        $gaji->biaya_makan= $request->biayaMakan;
        $gaji->biaya_transportasi=$request->biayaTransportasi;
        $gaji->bulan_id=date('m');
        $gaji->tahun=date('Y');
        $gaji->save();
        Alert::success('Berhasil','Data Berhasil Disimpan');
        return redirect()->back();
    }

    public function edit($id)
    {
        $gaji=\App\GajiPegawai::find($id);
        return view('keuangan.edit_gaji',['gaji'=>$gaji]);
    }

    public function update(Request $request,$id,$us)
    {
        $gaji=DB::table('gaji_pegawais')
                    ->where('id',$id)
                    ->update([
                        'gaji_pokok'=>$request->gajiPokok,
                        'gaji_lembur'=>$request->gajiLembur,
                        'tunjangan_kesehatan'=>$request->tunjanganKesehatan,
                        'tunjangan_kesejahteraan'=>$request->tunjanganKesejahteraan,
                        'biaya_makan'=>$request->biayaMakan,
                        'biaya_transportasi'=>$request->biayaTransportasi,
                    ]);
        Alert::success('Sukses','Data Berhasil Diupdate');
        return redirect('/keuagan/rincian-gaji/'.($us));
    }
}
