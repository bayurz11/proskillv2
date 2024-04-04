<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreHomeSettingRequest;
use App\Http\Requests\UpdateHomeSettingRequest;

class HomeSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (Auth::check()) {

        //     $user = Auth::user();
        //     // $biaya = Biaya::all();
        //     $jam_alamat = HomeSetting::all();
        //     return view('admin.home_setting', compact('user', 'jam_alamat'));
        // }
        // return redirect('/show_login');
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
        $validatedData = $request->validate([
            'jam_opr' => 'required',
            'alamat' => 'required',
        ]);
        $userId = Auth::id();

        $operationalStore = new HomeSetting();
        $operationalStore->jam_opr = $request->jam_opr;
        $operationalStore->alamat = $request->alamat;
        $operationalStore->user_id = $userId;
        $operationalStore->save();

        return redirect()->route('show_home_setting')->with('success', 'Data jam operasional dan alamat berhasil disimpan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(HomeSetting $homeSetting)
    {
        if (Auth::check()) {

            $user = Auth::user();
            // $biaya = Biaya::all();
            $jam_alamat = HomeSetting::all();
            return view('admin.home_setting', compact('user', 'jam_alamat'));
        }
        return redirect('show_login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeSetting $homeSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeSettingRequest $request, HomeSetting $homeSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeSetting $homeSetting)
    {
        //
    }
}
