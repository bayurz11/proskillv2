<?php

namespace App\Http\Controllers;

use App\Models\ArtikelYt;
use App\Models\Artikel_yt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreArtikelYtRequest;
use App\Http\Requests\UpdateArtikelYtRequest;

class ArtikelYtController extends Controller
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
        // $validatedData = $request->validate([
        //     'isiyt' => 'required|url',
        //     'titleYt' => 'required|string|max:255',
        //     'category' => 'required',
        //     'tglup' => 'required|date',
        // ]);

        $userId = Auth::id();

        $videoId = $this->extractYouTubeVideoId($request->isiyt);

        $linkStore = new ArtikelYt();
        $linkStore->user_id = $userId;
        $linkStore->isiyt = $videoId;
        $linkStore->titleYt = $request->titleYt;
        $linkStore->category = $request->category;
        $linkStore->tglup = $request->tglup;
        $linkStore->save();

        return redirect()->route('artikel')->with('success', 'Artikel berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ArtikelYt $artikelYt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArtikelYt $artikel_yt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArtikelYt $artikel_yt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArtikelYt $artikel_yt)
    {
        //
    }
    private function extractYouTubeVideoId($url)
    {

        $parsedUrl = parse_url($url);

        if (isset($parsedUrl['query'])) {

            parse_str($parsedUrl['query'], $query);

            if (isset($query['v'])) {
                // Kembalikan ID video
                return $query['v'];
            }
        }

        return null;
    }
}
