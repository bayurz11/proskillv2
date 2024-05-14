<?php

namespace App\Http\Controllers;

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
    public function store(StoreKelasTatapMukaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KelasTatapMuka $kelasTatapMuka)
    {
        $user = Auth::user();
        $kelasOffline = KelasTatapMuka::all();

        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.kelasOffline', compact('user', 'kelasOffline'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelasTatapMuka $kelasTatapMuka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasTatapMukaRequest $request, KelasTatapMuka $kelasTatapMuka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelasTatapMuka $kelasTatapMuka)
    {
        //
    }
}
