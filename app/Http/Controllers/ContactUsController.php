<?php

namespace App\Http\Controllers;

use App\Models\Contact_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreContact_usRequest;
use App\Http\Requests\UpdateContact_usRequest;

class ContactUsController extends Controller
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
        //     'alamat' => 'required',
        //     'whatsapp' => 'required',
        //     'email' => 'required',
        // ]);
        $userId = Auth::id();
        $contactUs = new Contact_us();
        $contactUs->alamat = $request->alamat;
        $contactUs->tlp = $request->tlp;
        $contactUs->email = $request->email;
        $contactUs->user_id = $userId;
        $contactUs->save();

        return redirect()->route('contact_us')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact_us $contact_us)
    {
        if (Auth::check()) {

            $user = Auth::user();
            // $categories = Category::all();
            // $artikel = Artikel::all();
            $hubungi = Contact_us::all();
            return view('admin.contactUs_setting', compact('hubungi', 'user'));
        }
        return redirect('show_login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact_us $contact_us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContact_usRequest $request, Contact_us $contact_us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact_us $contact_us)
    {
        //
    }
}
