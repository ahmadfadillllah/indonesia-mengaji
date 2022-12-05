<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('home.login');
    }

    public function loginpost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->route('dashboard.index')->with('success', 'Berhasil login');
        }

        return back()->withErrors([
            'email' => 'Email/password salah',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('home.register');
    }

    public function registerpost(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'min:5'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:8', 'confirmed'],
            ]);

            User::insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'member',
                'avatar' => 'avatar-1.jpg'
            ]);

            return redirect()->route('login')->with('success', 'Berhasil registrasi');
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('info', 'Gagal registrasi');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah logout');
    }
}
