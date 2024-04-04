<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use App\Models\ArtikelYt;
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
        // $request->validate([
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'title' => 'required|string|max:255',
        //     'isi' => 'required|string',
        //     'tgl' => 'required|string',
        //     'category_id' => 'required',
        // ]);

        $gambarName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('uploads'), $gambarName);

        $userId = Auth::id();

        $artikel = new Artikel();
        $artikel->banner = $gambarName;
        $artikel->title = $request->title;
        $artikel->isi = $request->isi;
        $artikel->tgl = $request->tgl;
        $artikel->category_id = $request->category_id;
        $artikel->user_id = $userId;
        $artikel->save();
        return redirect()->route('artikel')->with('success', 'Artikel berhasil disimpan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        if (Auth::check()) {

            $user = Auth::user();
            $categories = Category::all();
            $artikel = Artikel::all();
            $artikelYt = ArtikelYt::all();
            return view('admin.artikel_setting', compact('user', 'artikel', 'artikelYt', 'categories'));
        }
        return redirect('/show_login');
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
            return redirect()->route('artikel')->with('error', 'Artikel tidak ditemukan');
        }

        // Hapus artikel
        $artikel->delete();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil dihapus');
    }
}
