<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Perkiraan_PendapatanController extends Controller
{
    public function index()
    {
        return view('perkiraan_pendapatan.perkiraan_pendapatan');
    }
}
