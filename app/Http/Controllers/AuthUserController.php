<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function show()
    {
        return view('login_email');
    }
}
