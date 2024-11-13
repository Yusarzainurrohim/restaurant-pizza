<?php

namespace App\Http\Controllers\Auth;

use App\Models\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Temukan pengguna berdasarkan username
        $user = Login::where('username', $request->username)->first();

        // Cek apakah pengguna ditemukan
        if ($user) {
            // Bandingkan password langsung tanpa hash
            if ($request->password === $user->password) {
                Auth::login($user); // Login pengguna secara manual
                
                // Ambil nama pengguna berdasarkan role ENUM
                switch ($user->role) {
                    case 'admin':
                        session(['name' => $user->nama]); // Simpan nama ke session
                        return redirect()->route('dashboard.admin'); // Redirect ke dashboard admin

                    case 'cashier':
                        session(['name' => $user->nama]); // Simpan nama ke session
                        return redirect()->route('dashboard.cashier'); // Redirect ke dashboard cashier

                    case 'owner':
                        session(['name' => $user->nama]); // Simpan nama ke session
                        return redirect()->route('dashboard.owner'); // Redirect ke dashboard owner

                    default:
                        return back()->withErrors(['role' => 'Peran tidak valid']);
                }
            } else {
                // Password salah
                return back()->withErrors(['password' => 'Password salah!']);
            }
        } else {
            // Username tidak ditemukan
            return back()->withErrors(['username' => 'Username tidak terdaftar!']);
        }
    }

    public function logout()
    {
        // Logout pengguna
        Auth::logout();
        // Hapus session
        session()->forget('name');
        // Redirect ke halaman login
        return redirect('/login');
    }
}
