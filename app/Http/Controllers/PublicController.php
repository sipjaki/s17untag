<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function index()
    {
        return view('NEW.01_halamanutama.newhalamanbaru', [
            'title' => 'Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
        ]);
    }

    public function sekapursirih()
    {
        return view('NEW.01_menu1.01_sekapursirih.sekapursirih', [
            'title' => 'Sekapur Sirih | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
        ]);
    }

    public function kepengurusan()
    {
        return view('NEW.01_menu1.02_kepengurusan.kepengurusan', [
            'title' => 'Kepengurusan | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
        ]);
    }


}
