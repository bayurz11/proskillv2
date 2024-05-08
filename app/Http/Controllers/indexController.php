<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {

        return view('index');
    }
    public function showArtikel()
    {

        return view('artikel');
    }
    public function showKelasOffline()
    {

        return view('kelasTatapMuka');
    }
    public function showkelasOnline()
    {

        return view('kelasOnline');
    }
}
