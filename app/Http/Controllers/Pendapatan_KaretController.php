<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pendapatan_KaretController extends Controller
{
    public function index()
    {
        return view('pendapatan_karet.pendapatan_karet');
    }
}
