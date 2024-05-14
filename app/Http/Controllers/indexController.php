<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\HeroSection;
use App\Models\KelasOnline;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::all();
        $kelasOnline = KelasOnline::all();
        $artikel = Artikel::all();
        return view('index', compact('heroSections', 'kelasOnline', 'artikel'));
    }
    public function showArtikel()
    {
        $artikel = Artikel::all();
        return view('artikel', compact('artikel'));
    }
    public function artikeldetail($id)
    {
        $artikel = Artikel::all();
        $artikel = Artikel::find($id);
        return view('artikelDetail', compact('artikel', 'artikel'));
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
