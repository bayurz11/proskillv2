<?php

namespace App\Http\Controllers;

use App\Models\User_Profile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUser_ProfileRequest;
use App\Http\Requests\UpdateUser_ProfileRequest;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {

            $user = Auth::user();
            return view('admin.profile_setting', compact('user'));
        }
        return redirect('/show_login');
    }
    public function UserSetting()
    {
        if (Auth::check()) {

            $user = Auth::user();
            return view('admin.user_setting', compact('user'));
        }
        return redirect('/show_login');
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
    public function store(StoreUser_ProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User_Profile $user_Profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_Profile $user_Profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUser_ProfileRequest $request, User_Profile $user_Profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User_Profile $user_Profile)
    {
        //
    }
}
