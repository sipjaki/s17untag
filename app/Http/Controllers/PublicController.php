<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\sabha1;
use App\Models\sabha2;
use App\Models\sabha3;
use App\Models\sabha4;
use App\Models\sabha5;
use App\Models\sabha7;
use App\Models\sabha8;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function index()
    {
        $datadok = sabha8::all();
        $data1 = beranda::all();
        $data2 = sabha1::all();
        return view('NEW.01_halamanutama.newhalamanbaru', [
            'title' => 'Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data1' => $data1, // kirim data user login
            'data2' => $data2, // kirim data user login
            'datadok' => $datadok, // kirim data user login
        ]);

    }

    public function sekapursirih()
    {
        $data = sabha1::all();

    return view('NEW.01_menu1.01_sekapursirih.sekapursirih', [
            'title' => 'Sekapur Sirih | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            ]);
            }


    public function kepengurusan()
    {
        $data = sabha2::all();

        return view('NEW.01_menu1.02_kepengurusan.kepengurusan', [
            'title' => 'Kepengurusan | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            ]);
            }

        public function peraturan()
        {
            $data = sabha3::all();
            return view('NEW.01_menu1.03_peraturan.peraturan', [
                'title' => 'Peraturan | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
                'user' => Auth::user(), // kirim data user login
                'data' => $data, // kirim data user login
        ]);
    }

    public function atribut()
    {
        return view('NEW.01_menu1.04_atribut.atribut', [
            'title' => 'Atribut | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
        ]);
    }

    public function divisis17()
    {
        $data = sabha4::all();
        return view('NEW.01_menu1.05_divisi17.divisi', [
            'title' => 'Divisi | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login

            ]);
    }

    public function keanggotaan()
    {
        $data = sabha5::all();
        return view('NEW.01_menu1.06_keanggotaan.keanggotaan', [
            'title' => 'Keanggotaan | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login

            ]);
    }

    public function prestasi()
    {
        $data = sabha7::all();
        return view('NEW.01_menu1.07_prestasi.prestasi', [
            'title' => 'Prestasi| Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login

            ]);
    }


}
