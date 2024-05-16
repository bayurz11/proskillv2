<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;

class AboutUsController extends Controller
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

            $aboutUs = new AboutUs();
            $aboutUs->banner = $gambarName;
            $aboutUs->tgl = $request->tgl;
            $aboutUs->user_id = $userId;
            $aboutUs->visi = $request->visi;
            $aboutUs->misi = $request->misi;
            $aboutUs->pimpinan = $request->pimpinan;
            $aboutUs->save();

            return redirect()->route('about_us_setting')->with('success', 'aboutUs  berhasil dibuat.');
        } else {
            // Jika tidak ada file yang dipilih, kembalikan respons dengan pesan kesalahan
            return redirect()->route('about_us_setting')->with('error', 'Pilih gambar terlebih dahulu.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        $user = Auth::user();
        $aboutUs = AboutUs::all();
        $count = $aboutUs->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.aboutUs', compact('user', 'aboutUs', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutUsRequest $request, AboutUs $aboutUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan artikel berdasarkan ID
        $aboutUs = AboutUs::find($id);

        // Periksa apakah artikel ditemukan
        if (!$aboutUs) {
            return redirect()->route('about_us_setting')->with('error', 'Artikel tidak ditemukan');
        }

        // Hapus artikel
        $aboutUs->delete();

        return redirect()->route('about_us_setting')->with('success', 'Artikel berhasil dihapus');
    }

    public function showizin()
    {
        $user = Auth::user();
        $izin = Izin::all();
        $count = $izin->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.izin', compact('user', 'izin', 'count'));
    }
}
