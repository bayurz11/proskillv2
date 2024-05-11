<?php

namespace App\Http\Controllers;

use App\Models\KelasOnline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreKelasOnlineRequest;
use App\Http\Requests\UpdateKelasOnlineRequest;

class KelasOnlineController extends Controller
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

            $hero = new KelasOnline();
            $hero->banner = $gambarName;
            $hero->kelas = $request->kelas;
            $hero->level = $request->level;
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
    public function show(KelasOnline $kelasOnline)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.kelasOnline', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelasOnline $kelasOnline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasOnlineRequest $request, KelasOnline $kelasOnline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelasOnline $kelasOnline)
    {
        //
    }
}
