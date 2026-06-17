<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        //
        return view('auth.login',[
            'title' => 'Silahkan Login !',

            // 'title_halaman' => 'Halaman Fundraising',
            // 'data_daftarjadimitra'  => Jadimitra::all(),
        ]);
    }

      public function authenticate(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email:crf'],
            'password' => 'required'
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        // Login gagal
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah. Silahkan coba lagi!'
        ])->withInput($request->only('email'));
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
