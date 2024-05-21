<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Event;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
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

            $even = new Event();
            $even->banner = $gambarName;
            $even->name_event = $request->name_event;
            $even->tgl = $request->tgl;
            $even->user_id = $userId;
            $even->lokasi = $request->lokasi;
            $even->mulai = $request->mulai;
            $even->durasi = $request->durasi;
            $even->tlp = $request->tlp;
            $even->email = $request->email;
            $even->deskripsi = $request->deskripsi;
            $even->syarat = $request->syarat;
            $even->save();

            return redirect()->route('event_setting')->with('success', 'even  berhasil dibuat.');
        } else {
            // Jika tidak ada file yang dipilih, kembalikan respons dengan pesan kesalahan
            return redirect()->route('event_setting')->with('error', 'Pilih gambar terlebih dahulu.');
        }
    }
    public function storegalery(Request $request)
    {
        // Memastikan file gambar telah dipilih sebelum mencoba mengambil ekstensi
        if ($request->hasFile('gambar')) {
            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $gambarName);

            $userId = Auth::id();

            $Galery = new Galery();
            $Galery->banner = $gambarName;
            $Galery->name_event = $request->name_event;
            $Galery->tgl = $request->tgl;
            $Galery->user_id = $userId;
            $Galery->lokasi = $request->lokasi;
            $Galery->save();

            return redirect()->route('galery_setting')->with('success', 'Foto  berhasil ditambahkan.');
        } else {
            // Jika tidak ada file yang dipilih, kembalikan respons dengan pesan kesalahan
            return redirect()->route('galery_setting')->with('error', 'Pilih gambar terlebih dahulu.');
        }
    }

    public function storelink(Request $request)
    {
        // Memastikan file gambar telah dipilih sebelum mencoba mengambil ekstensi


        $userId = Auth::id();

        $link = new Link();
        $link->link = $request->link;
        $link->user_id = $userId;
        $link->save();


        return redirect()->route('link_setting')->with('success', 'link video berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $user = Auth::user();
        $event = Event::all();
        $count = $event->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.event', compact('user', 'event', 'count'));
    }
    public function showgalery(Event $event)
    {

        $user = Auth::user();
        $galery = Galery::all();
        $count = $galery->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.galery', compact('user', 'galery', 'count'));
    }
    public function showlink(Event $event)
    {
        $user = Auth::user();
        $link = Link::all();
        $count = $link->count();
        if (!$user) {
            return redirect()->route('login_admin');
        }

        return view('admin.link', compact('user', 'link', 'count'));
    }

    public function linkedit($id)
    {
        $data = Link::findOrFail($id);
        return response()->json($data);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }
    public function galeryedit($id)
    {
        $data = Galery::findOrFail($id);
        return response()->json($data);
    }



    /**
     * Update the specified resource in storage.
     */
    public function galeryupdate(Request $request, $id)
    {
        $data = Galery::findOrFail($id);
        $data->lokasi = $request->lokasi;
        $data->name_event = $request->name_event;
        $data->tgl = $request->tgl;

        if ($request->hasFile('gambar')) {
            // Handle file upload
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('path/to/images'), $filename);
            $data->gambar = $filename;
        }

        $data->save();
        return redirect()->route('galery_setting')->with('success', 'Gambar Berhasil Diupdate.');
    }
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    public function linkupdate(Request $request, $id)
    {
        $data = Link::findOrFail($id);
        $data->link = $request->input('link');
        $data->save();

        return redirect()->back()->with('success', 'Data updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, $id)
    {
        // Temukan artikel berdasarkan ID
        $event = Event::find($id);

        // Periksa apakah artikel ditemukan
        if (!$event) {
            return redirect()->route('event_setting')->with('error', 'Artikel tidak ditemukan');
        }

        // Hapus artikel
        $event->delete();

        return redirect()->route('event_setting')->with('success', 'Artikel berhasil dihapus');
    }
    public function destroygalery(Event $event, $id)
    {
        // Temukan artikel berdasarkan ID
        $galery = Galery::find($id);

        // Periksa apakah artikel ditemukan
        if (!$galery) {
            return redirect()->route('galery_setting')->with('error', 'Foto tidak ditemukan');
        }

        // Hapus artikel
        $galery->delete();

        return redirect()->route('galery_setting')->with('success', 'Gambar berhasil dihapus');
    }
    public function destroylink(Event $event, $id)
    {
        // Temukan artikel berdasarkan ID
        $link = Link::find($id);

        // Periksa apakah artikel ditemukan
        if (!$link) {
            return redirect()->route('link_setting')->with('error', 'Link tidak ditemukan');
        }

        // Hapus artikel
        $link->delete();

        return redirect()->route('link_setting')->with('success', 'Link berhasil dihapus');
    }
}
