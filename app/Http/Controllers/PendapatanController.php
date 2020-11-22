<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class PendapatanController extends Controller
{
    public function index()
    {
        $data_pendapatan = \App\Pendapatan :: get();

        return view('pendapatan',['data_pendapatan'=>$data_pendapatan]);
    }
}
