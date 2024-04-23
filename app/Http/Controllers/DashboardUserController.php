<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
    public function show()
    {
        if (Auth::check()) {

            $user = Auth::user();
            return view('dashboard_siswa', compact('user'));
        }
        return redirect('/login_email');
    }
}
