<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function show()
    {
        // if (Auth::check()) {

        //     $user = Auth::user();
        //     return view('dashboard_siswa', compact('user'));
        // }
        // return redirect('/login_email');
        $user = Auth::user();
        return view('dashboard_siswa', compact('user'));
    }
    public function login(Request $request)
    {
        // Validasi data login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan autentikasi
        if (Auth::attempt($credentials)) {
            // Jika berhasil, redirect ke halaman dashboard atau ke halaman yang diinginkan
            return redirect()->intended('/dashboard_siswa');
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
