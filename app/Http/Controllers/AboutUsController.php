<?php

namespace App\Http\Controllers;

use App\Models\About_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAbout_usRequest;
use App\Http\Requests\UpdateAbout_usRequest;

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
        // $StoreAbout_usRequest = $request->validate([
        //     'title' => 'required',
        //     'visi' => 'required',
        //     'ket' => 'required',
        //     'nama_pimpinan' => 'required',
        // ]);

        $userId = Auth::id();
        $aboutUs = new About_us();
        $aboutUs->title = $request->title;
        $aboutUs->visi = $request->visi;
        $aboutUs->ket = $request->ket;
        $aboutUs->nama_pimpinan = $request->nama_pimpinan;
        $aboutUs->user_id = $userId;
        $aboutUs->save();

        return redirect()->route('about_us')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About_us $about_us)
    {
        if (Auth::check()) {

            $user = Auth::user();
            // $categories = Category::all();
            // $artikel = Artikel::all();
            $tentang = About_us::all();
            return view('admin.about_us_setting', compact('tentang', 'user'));
        }
        return redirect('/show_login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About_us $about_us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbout_usRequest $request, About_us $about_us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About_us $about_us)
    {
        //
    }
}
