<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreHeroSectionRequest;
use App\Http\Requests\UpdateHeroSectionRequest;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Memastikan file gambar telah dipilih sebelum mencoba mengambil ekstensi
        if ($request->hasFile('gambar')) {
            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $gambarName);

            $userId = Auth::id();

            $hero = new HeroSection();
            $hero->banner = $gambarName;
            $hero->tagline = $request->tagline;
            $hero->promosi = $request->promosi;
            $hero->link = $request->link;
            $hero->tgl = $request->tgl;
            $hero->user_id = $userId;
            $hero->save();

            return redirect()->route('HeroSectionSetting')->with('success', 'Hero Section berhasil disimpan.');
        } else {
            // Jika tidak ada file yang dipilih, kembalikan respons dengan pesan kesalahan
            return redirect()->route('HeroSectionSetting')->with('error', 'Pilih gambar terlebih dahulu.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = Auth::user();
        $heroSections = HeroSection::all();
        $count = $heroSections->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.hero.herosection', compact('user', 'heroSections', 'count'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = HeroSection::findOrFail($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = HeroSection::findOrFail($id);
        $data->tagline = $request->tagline;
        $data->promosi = $request->promosi;
        $data->link = $request->link;
        $data->tgl = $request->tgl;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $data->banner = $filename;
        }

        $data->save();
        return redirect()->route('HeroSectionSetting')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan kelasOffline berdasarkan ID
        $hero = HeroSection::find($id);

        // Periksa apakah kelasOffline ditemukan
        if (!$hero) {
            return redirect()->route('HeroSectionSetting')->with('error', 'data tidak ditemukan');
        }

        // Hapus kelasOffline
        $hero->delete();

        return redirect()->route('HeroSectionSetting')->with('success', 'Data berhasil dihapus');
    }
}
