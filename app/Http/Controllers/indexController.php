<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::all();
        return view('index', compact('heroSections'));
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
