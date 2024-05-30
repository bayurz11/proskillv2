<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasTatapMuka;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreKelasTatapMukaRequest;
use App\Http\Requests\UpdateKelasTatapMukaRequest;

class KelasTatapMukaController extends Controller
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

            $kelasOffline = new KelasTatapMuka();
            $kelasOffline->banner = $gambarName;
            $kelasOffline->kelas = $request->kelas;
            $kelasOffline->lvl = $request->lvl;
            $kelasOffline->durasi = $request->durasi;
            $kelasOffline->jumlah_siswa = $request->jumlah_siswa;
            $kelasOffline->sertifikat = $request->sertifikat;
            $kelasOffline->price = $request->price;
            $kelasOffline->deskripsi = $request->deskripsi;
            $kelasOffline->tgl = $request->tgl;
            $kelasOffline->instruktur = $request->instruktur;
            $kelasOffline->fasilitas = $request->fasilitas;
            $kelasOffline->user_id = $userId;
            $kelasOffline->save();

            return redirect()->route('KelasOfflineSetting')->with('success', 'kelasOffline  berhasil disimpan.');
        } else {
            // Jika tidak ada file yang dipilih, kembalikan respons dengan pesan kesalahan
            return redirect()->route('KelasOfflineSetting')->with('error', 'Pilih gambar terlebih dahulu.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(KelasTatapMuka $kelasTatapMuka)
    {
        $user = Auth::user();
        $kelasOffline = KelasTatapMuka::all();
        $count = $kelasOffline->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.kelasOffline', compact('user', 'kelasOffline', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelas = KelasTatapMuka::find($id);

        if (!$kelas) {
            return response()->json(['message' => 'Kelas not found'], 404);
        }

        return response()->json($kelas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelasOffline = KelasTatapMuka::findOrFail($id);
        $kelasOffline->kelas = $request->kelas;
        $kelasOffline->lvl = $request->lvl;
        $kelasOffline->durasi = $request->durasi;
        $kelasOffline->jumlah_siswa = $request->jumlah_siswa;
        $kelasOffline->sertifikat = $request->sertifikat;
        $kelasOffline->price = $request->price;
        $kelasOffline->deskripsi = $request->deskripsi;
        $kelasOffline->tgl = $request->tgl;
        $kelasOffline->instruktur = $request->instruktur;
        $kelasOffline->fasilitas = $request->fasilitas;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $kelasOffline->banner = $filename;
        }

        $kelasOffline->save();
        return redirect()->route('HeroSectionSetting')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan kelasOffline berdasarkan ID
        $kelasOffline = KelasTatapMuka::find($id);

        // Periksa apakah kelasOffline ditemukan
        if (!$kelasOffline) {
            return redirect()->route('KelasOfflineSetting')->with('error', 'Artikel tidak ditemukan');
        }

        // Hapus kelasOffline
        $kelasOffline->delete();

        return redirect()->route('KelasOfflineSetting')->with('success', 'Artikel berhasil dihapus');
    }
}
