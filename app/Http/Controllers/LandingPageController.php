<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRoles;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class LandingpageController extends Controller
{
    public function index()
    {

        return view('index');
    }
}
