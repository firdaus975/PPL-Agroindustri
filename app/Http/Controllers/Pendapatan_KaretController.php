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
}
