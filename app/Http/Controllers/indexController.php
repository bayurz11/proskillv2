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
use App\Models\Contohsertifikat;

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


        if (!$events) {
            abort(404, 'Kelas tatap muka tidak ditemukan.');
        }

        // Decode JSON syarat
        $syarat = json_decode($events->syarat, true);

        if (!is_array($syarat)) {
            $syarat = [];
        }
        return view('eventDetail', compact('event', 'events', 'syarat'));
    }
    public function showArtikel()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->take(3)->get();
        $artikels = Artikel::orderBy('created_at', 'desc')->paginate(2);
        // $artikels = Artikel::paginate(2);
        return view('artikel', compact('artikel', 'artikels'));
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

        // Periksa apakah $klsoffline ditemukan
        if (!$klsoffline) {
            abort(404, 'Kelas tatap muka tidak ditemukan.');
        }

        // Decode JSON fasilitas
        $fasilitas = json_decode($klsoffline->fasilitas, true);

        // Jika fasilitas bukan array atau kosong, berikan nilai default
        if (!is_array($fasilitas)) {
            $fasilitas = [];
        }

        return view('kelasOfflinedetail', compact('kelasOffline', 'klsoffline', 'fasilitas'));
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
    public function contohsertifikat()
    {

        $contohsertifikat = Contohsertifikat::all();
        return view('contoh', compact('contohsertifikat'));
    }
}
