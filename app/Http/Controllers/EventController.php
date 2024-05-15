<?php

namespace App\Http\Controllers;

use App\Models\Event;
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
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
}
