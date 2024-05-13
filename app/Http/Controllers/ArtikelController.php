<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreArtikelRequest;
use App\Http\Requests\UpdateArtikelRequest;

class ArtikelController extends Controller
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

            $artikel = new Artikel();
            $artikel->banner = $gambarName;
            $artikel->title = $request->title;
            $artikel->content = $request->content;
            $artikel->tgl = $request->tgl;
            $artikel->category = $request->category;
            $artikel->user_id = $userId;
            $artikel->save();

            return redirect()->route('artikel_setting')->with('success', 'artikel  berhasil dibuat.');
        } else {
            // Jika tidak ada file yang dipilih, kembalikan respons dengan pesan kesalahan
            return redirect()->route('artikel_setting')->with('error', 'Pilih gambar terlebih dahulu.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {

        $user = Auth::user();
        $artikel = Artikel::all();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.artikel.artikel', compact('user', 'artikel'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtikelRequest $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan artikel berdasarkan ID
        $artikel = Artikel::find($id);

        // Periksa apakah artikel ditemukan
        if (!$artikel) {
            return redirect()->route('artikel_setting')->with('error', 'Artikel tidak ditemukan');
        }

        // Hapus artikel
        $artikel->delete();

        return redirect()->route('artikel_setting')->with('success', 'Artikel berhasil dihapus');
    }
}
