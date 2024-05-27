<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreInventarisRequest;
use App\Http\Requests\UpdateInventarisRequest;
use App\Models\Barang;

class InventarisController extends Controller
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
    public function store(StoreInventarisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventaris $inventaris)
    {
        //
    }
    public function showbarang(Inventaris $inventaris)
    {
        $user = Auth::user();
        $barang = Barang::all();
        $count = $barang->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.hero.contohsetting', compact('user', 'barang', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventaris $inventaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventarisRequest $request, Inventaris $inventaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventaris $inventaris)
    {
        //
    }
}
