<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\sabha1;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function index()
    {
        $data1 = beranda::all();
        $data2 = sabha1::all();
        return view('NEW.01_halamanutama.newhalamanbaru', [
            'title' => 'Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data1' => $data1, // kirim data user login
            'data2' => $data2, // kirim data user login
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

    public function peraturan()
    {
        return view('NEW.01_menu1.03_peraturan.peraturan', [
            'title' => 'Peraturan | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
        ]);
    }

    public function atribut()
    {
        return view('NEW.01_menu1.04_atribut.atribut', [
            'title' => 'Atribut | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
        ]);
    }


}
