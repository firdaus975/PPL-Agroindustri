<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Pendapatan_KaretController extends Controller
{
    public function index()
    {
        $data_pendapatan = \App\Pendapatan :: get();

        return view('pendapatan_Karet.pendapatan',['data_pendapatan'=>$data_pendapatan]);
    }

    public function show()
    {
        return view('pendapatan_Karet.tambahPendapatan');
    }

    public function create(request $request)
    {
        $pendapatan=new \App\Pendapatan;
        $pendapatan->confirm_id = 1;
        $pendapatan->berat_bersih=$request->beratBersih;
        $pendapatan->berat_kotor=$request->beratKotor;
        $request->request->add(['user_id'=>Auth::user()->id]);
        $pendapatan->save();

        dd($pendapatan);
    //     $user=new \App\User;
    //     $user->role_id = 3;
    //     $user->status_id=$request->status;
    //     $user->name=$request->username;
    //     $user->email=$request->email; 
    //     $user->password=bcrypt($request->password);
    //     $user->remember_token = str_random(60);
    //     $user->save();
    //     //insert data tabel biodatas
    //    // $request->request->(['username_id'=>$user->id]);
    //     $request->request->add(['user_id'=>$user->id]);
    //     $biodata=\App\biodata::create($request->all());
    //     //dd($biodata);
    //     return redirect('/pegawai')->with('sukses');


    }
    
}
