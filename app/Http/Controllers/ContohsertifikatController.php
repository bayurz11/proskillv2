<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contohsertifikat;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreContohsertifikatRequest;
use App\Http\Requests\UpdateContohsertifikatRequest;

class ContohsertifikatController extends Controller
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

            $contoh = new Contohsertifikat();
            $contoh->banner = $gambarName;
            $contoh->tgl = $request->tgl;
            $contoh->user_id = $userId;
            $contoh->nama_sertifikat = $request->nama_sertifikat;
            $contoh->save();

            return redirect()->route('ContohSertifikatSetting')->with('success', 'Contoh Sertifikat  berhasil ditambahkan.');
        } else {
            // Jika tidak ada file yang dipilih, kembalikan respons dengan pesan kesalahan
            return redirect()->route('ContohSertifikatSetting')->with('error', 'Pilih gambar terlebih dahulu.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = Auth::user();
        $contohsertifikat = Contohsertifikat::all();
        $count = $contohsertifikat->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.hero.contohsetting', compact('user', 'contohsertifikat', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contohsertifikat $contohsertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContohsertifikatRequest $request, Contohsertifikat $contohsertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Log::info('Destroy method called with id: ' . $id);
        // Temukan Contohsertifikat berdasarkan ID
        $contoh = Contohsertifikat::find($id);

        // Periksa apakah Contohsertifikat ditemukan
        if (!$contoh) {
            return redirect()->route('ContohSertifikatSetting')->with('error', 'contoh tidak ditemukan');
        }

        // Hapus Contohsertifikat
        $contoh->delete();

        return redirect()->route('ContohSertifikatSetting')->with('success', 'contoh berhasil dihapus');
    }
}
