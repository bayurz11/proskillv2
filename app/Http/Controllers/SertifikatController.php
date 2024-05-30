<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreSertifikatRequest;
use App\Http\Requests\UpdateSertifikatRequest;

class SertifikatController extends Controller
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

    public function store(Request $request)
    {

        // Memastikan file gambar telah dipilih sebelum mencoba mengambil ekstensi
        if ($request->hasFile('gambar')) {
            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $gambarName);

            $userId = Auth::id();

            $hero = new Sertifikat();
            $hero->img = $gambarName;
            $hero->sertifikat_name = $request->sertifikat_name;
            $hero->tgl = $request->tgl;
            $hero->user_id = $userId;
            $hero->save();

            return redirect()->route('sertifikat')->with('success', 'Sertifikat Berhasil ditambahkan.');
        } else {
            // Jika tidak ada file yang dipilih, kembalikan respons dengan pesan kesalahan
            return redirect()->route('sertifikat')->with('error', 'Pilih gambar terlebih dahulu.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertifikat $sertifikat)
    {
        if (Auth::check()) {

            $user = Auth::user();
            // $categories = Category::all();
            // $artikel = Artikel::all();
            $sertifikat = Sertifikat::all();
            return view('admin.sertifikat', compact('user', 'sertifikat'));
        }
        return redirect('/show_login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Sertifikat::findOrFail($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sertifikat_name' => 'required|string|max:255',
        ]);

        $sertifikat = Sertifikat::find($id);

        if (!$sertifikat) {
            return redirect()->route('sertifikat.index')->with('error', 'Sertifikat tidak ditemukan.');
        }
        if ($sertifikat->user_id != Auth::id()) {
            return redirect()->route('sertifikat.index')->with('error', 'Anda tidak memiliki izin untuk mengedit sertifikat ini.');
        }
        if ($request->hasFile('gambar')) {

            Storage::delete($sertifikat->img);

            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $gambarName);
            $sertifikat->img = $gambarName;
        }

        $sertifikat->sertifikat_name = $request->input('sertifikat_name');
        $sertifikat->save();

        return redirect()->route('sertifikat')->with('success', 'Sertifikat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sertifikat = Sertifikat::find($id);

        if (!$sertifikat) {
            return redirect()->route('sertifikat')->with('error', 'sertifikat tidak ditemukan');
        }

        $sertifikat->delete();

        return redirect()->route('sertifikat')->with('success', 'sertifikat berhasil dihapus');
    }
    public function cetakSertifikat($id)
    {
        // Temukan sertifikat berdasarkan ID
        $sertifikate = Sertifikat::findOrFail($id);

        // Setelah menemukan sertifikat, arahkan pengguna ke view sertifikat
        return view('admin.sertifikat_view', compact('sertifikate'));
    }
}
