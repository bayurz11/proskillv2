<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRoles;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function show()
    {
        return view('admin.index');
    }
    public function showloginadmin()
    {
        return view('admin.login');
    }
    public function showregisteradmin()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Tambahkan pengguna baru ke dalam tabel user_roles
        $userRole = new UserRoles();
        $userRole->user_id = $user->id;
        $userRole->role_id = 1; // Sesuaikan dengan ID role yang sesuai
        $userRole->save();

        // Tambahkan user_id ke dalam tabel user_profiles
        $userProfile = new UserProfile();
        $userProfile->user_id = $user->id; // Masukkan user_id baru
        $userProfile->save();

        return redirect()->route('login_admin')->with('success', 'Pendaftaran berhasil!');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->last_login = now()->setTimezone('Asia/Jakarta')->toDateTimeString();
            $user->save();

            // Ambil peran pengguna
            $userRole = $user->userRole;

            // Jika pengguna tidak memiliki peran
            if (!$userRole) {
                return redirect()->back()->with('error', 'Pengguna tidak memiliki peran yang ditetapkan!');
            }

            // Redirect berdasarkan peran pengguna
            $roleName = $userRole->role->role_name;

            switch ($roleName) {
                case 'Administrator':
                    return redirect()->route('dashboard')->with('success', 'Selamat datang! Anda berhasil masuk.');
                    break;
                case 'Student':
                    return redirect()->route('dashboard_siswa')->with('success', 'Selamat datang! Anda berhasil masuk.');
                    break;
                case 'Instructor':
                    return redirect()->route('dashboard_instruktur')->with('success', 'Selamat datang! Anda berhasil masuk.');
                    break;
                default:
                    return redirect()->route('login_admin')->with('error', 'Peran pengguna tidak dikenali.');
            }
        } else {
            return redirect()->back()->with('error', 'Email atau password salah.');
        }
    }

    public function logout(Request $request)
    {
        // Logout pengguna
        Auth::logout();

        // Redirect pengguna ke halaman login dengan pesan berhasil logout
        return redirect()->route('login_admin')->with('success', 'Anda berhasil keluar.');
    }
}
