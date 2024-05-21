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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Event::find($id);
        if ($event) {
            return response()->json($event);
        }
        return response()->json(['error' => 'Event not found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name_event' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'mulai' => 'required|date',
            'durasi' => 'required|string|max:255',
            'tlp' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'syarat' => 'nullable|string',
        ]);

        // Find the event
        $event = Event::find($id);
        if (!$event) {
            return redirect()->route('event_setting')->with('error', 'Event not found.');
        }

        // Handle file upload
        if ($request->hasFile('gambar')) {
            $gambarName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $gambarName);
            $event->banner = $gambarName; // Update the banner field with new image name
        }

        // Get the current user's ID
        $userId = Auth::id();

        // Update event data
        $event->name_event = $request->name_event;
        $event->tgl = $request->tgl;
        $event->user_id = $userId;
        $event->lokasi = $request->lokasi;
        $event->mulai = $request->mulai;
        $event->durasi = $request->durasi;
        $event->tlp = $request->tlp;
        $event->email = $request->email;
        $event->deskripsi = $request->deskripsi;
        $event->syarat = $request->syarat;
        $event->save();

        return redirect()->route('event_setting')->with('success', 'Event successfully updated.');
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
}
