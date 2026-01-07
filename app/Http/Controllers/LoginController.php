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
        // $credentials = $request->validate([
        //     'email' => 'required|email',  // PENGGUNAAN DNS UNTUK MENERIMA EMAIL YANG SANGAT BENAR VALID ,
        //     'password' => 'required'
        // ]);

        $credentials = $request->validate([
            'email' => ['required', 'email:crf'],
            'password' => 'required'
        ]);

        // // Coba melakukan autentikasi pengguna
        // if (Auth::attempt($credentials)) {
        //     // Jika autentikasi berhasil, arahkan pengguna ke dashboard
        //     return redirect()->intended('/dashboard');
        // } else {
        //     // Jika autentikasi gagal, kembalikan pengguna ke halaman login dengan pesan kesalahan
        //     return back()->withErrors(['email' => 'Email atau kata sandi yang Anda masukkan salah.'])->withInput($request->only('email'));
        // }
        

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login Failed !');

        // dd('Berhasil Masuk Iqlima');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
