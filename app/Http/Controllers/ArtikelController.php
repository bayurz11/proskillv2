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
        // Validasi data yang diterima dari form
        $request->validate([
            'title' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan kebutuhan Anda
            'content' => 'required|string',
            'category_id' => 'required|array', // Jika menggunakan Tagify, pastikan ini sesuai
            'tgl' => 'required|date_format:d F Y', // Sesuaikan dengan format tanggal yang diharapkan
        ]);

        // Simpan gambar yang diunggah
        $gambarPath = $request->file('gambar')->store('public/artikel');

        // Buat artikel baru
        $artikel = new Artikel();
        $artikel->title = $request->title;
        $artikel->gambar = $gambarPath;
        $artikel->content = $request->content;
        $artikel->tgl = $request->tgl;
        // Anda mungkin perlu logika tambahan untuk menyimpan kategori atau tag

        // Simpan artikel
        $artikel->save();

        // Redirect atau response sesuai kebutuhan Anda
        return redirect()->back()->with('success', 'Artikel berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.artikel.artikel', compact('user'));
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
    public function destroy(Artikel $artikel)
    {
        //
    }
}
