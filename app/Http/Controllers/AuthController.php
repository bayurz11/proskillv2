<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User_Profile;
use Symfony\Component\HttpKernel\Profiler\Profile;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $user = Auth::user();
            $userCount = User::count();
            $maxCapacity = 100;
            return view('admin.index', compact('user', 'userCount', 'maxCapacity'));
        }
        return redirect('show_login');
    }
    public function home()
    {
        return view('admin.reset_password');
    }
    public function ShowLogin()
    {
        return view('admin.login');
    }
    public function ShowforgotPassword()
    {
        return view('admin.forgot_password');
    }

    public function ShowRegis()
    {
        return view('admin.register');
    }
    // public function postLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ], [
    //         'email.required' => 'Email wajib diisi',
    //         'password.required' => 'Password wajib diisi',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if (auth()->attempt($credentials)) {
    //         $user = auth()->user();
    //         if ($user->role === 'Admin' && $user->status == 'Active') {
    //             return redirect('/index_admin')->with('success', 'Anda telah berhasil masuk');
    //         } elseif ($user->role === 'User' && $user->status == 'Active') {
    //             return redirect('/dashboarduser')->with('success', 'Anda telah berhasil masuk');
    //         }
    //     }

    //     return redirect("/")->withErrors('Kredensial ini tidak cocok dengan catatan kami.');
    // }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $userByEmail = User::where('email', $credentials['email'])->first();

            if ($userByEmail) { // Periksa apakah pengguna berdasarkan email ditemukan
                $userProfile = User_Profile::where('user_id', $userByEmail->id)->first(); // Dapatkan profil pengguna

                if ($userProfile) { // Jika profil pengguna tersedia
                    if ($userByEmail->role === 'Admin' && $userByEmail->status == 'Active') {
                        return redirect('/index_admin')->with('success', 'Anda telah berhasil masuk');
                    } elseif ($userByEmail->role === 'User' && $userByEmail->status == 'Active') {
                        return redirect('/dashboarduser')->with('success', 'Anda telah berhasil masuk');
                    }
                }
            }
        }

        return redirect("/")->withErrors('Kredensial ini tidak cocok dengan catatan kami.');
    }



    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::Where(['email' => $googleUser->email])->first();
        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'avatar' => $googleUser->getAvatar(),
                'role' => 'User',
                'password' => Hash::make('123456'),
                'status' => 'Active',
            ]);
        } elseif (!$user->role) {
            $user->update(['role' => 'User']);
        }
        Auth::login($user);
        return redirect('index_admin')->with('success', 'Anda telah berhasil masuk');
    }
}
