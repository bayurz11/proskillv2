<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Link;
use App\Models\Event;
use App\Models\Galery;
use App\Models\AboutUs;
use App\Models\Artikel;
use App\Models\HeroSection;
use App\Models\KelasOnline;
use Illuminate\Http\Request;
use App\Models\KelasTatapMuka;

class indexController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::all();
        $kelasOnline = KelasOnline::all();
        $event = Event::all();
        $artikel = Artikel::latest()->take(2)->get();
        return view('index', compact('heroSections', 'kelasOnline', 'artikel', 'event'));
    }

    public function showEvent()
    {
        $links = Link::all();
        $galery = Galery::all();
        $event = Event::all();
        return view('event', compact('event', 'galery', 'links'));
    }
    public function Eventdetail($id)
    {
        $event = Event::all();
        $events = Event::find($id);
        return view('eventDetail', compact('event', 'events'));
    }
    public function showArtikel()
    {
        $artikel = Artikel::all();
        return view('artikel', compact('artikel'));
    }
    public function artikeldetail($id)
    {
        $articel = Artikel::all();
        $artikel = Artikel::find($id);
        return view('artikelDetail', compact('artikel', 'articel'));
    }
    public function showKelasOffline()
    {
        $kelasOffline = KelasTatapMuka::all();
        return view('kelasTatapMuka', compact('kelasOffline'));
    }
    public function KelasOfflinedetail($id)
    {
        $kelasOffline = KelasTatapMuka::all();
        $klsoffline = KelasTatapMuka::find($id);
        return view('kelasOfflinedetail', compact('kelasOffline', 'klsoffline'));
    }
    public function showkelasOnline()
    {
        $kelasOnline = KelasOnline::all();
        return view('kelasOnline', compact('kelasOnline'));
    }
    public function showaboutUs()
    {

        $aboutUs = AboutUs::all();
        $izin = Izin::all();
        return view('tentang_kami', compact('aboutUs', 'izin'));
    }
    public function showcontactUs()
    {

        $aboutUs = AboutUs::all();
        $izin = Izin::all();
        return view('hubungi_kami', compact('aboutUs', 'izin'));
    }
}
