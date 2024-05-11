<?php

namespace App\Http\Controllers;

use App\Models\KelasOnline;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreKelasOnlineRequest;
use App\Http\Requests\UpdateKelasOnlineRequest;

class KelasOnlineController extends Controller
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
    public function store(StoreKelasOnlineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KelasOnline $kelasOnline)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.kelasonline.kelasOnline', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelasOnline $kelasOnline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasOnlineRequest $request, KelasOnline $kelasOnline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelasOnline $kelasOnline)
    {
        //
    }
}
