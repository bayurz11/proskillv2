<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranSiswa;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePendaftaranSiswaRequest;
use App\Http\Requests\UpdatePendaftaranSiswaRequest;

class PendaftaranSiswaController extends Controller
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
    public function store(StorePendaftaranSiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PendaftaranSiswa $pendaftaranSiswa)
    {
        $user = Auth::user();
        $pendaftaran = PendaftaranSiswa::all();
        $count = $pendaftaran->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.pendaftaranSiswa', compact('user', 'pendaftaran', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PendaftaranSiswa $pendaftaranSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePendaftaranSiswaRequest $request, PendaftaranSiswa $pendaftaranSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendaftaranSiswa $pendaftaranSiswa)
    {
        //
    }
}
