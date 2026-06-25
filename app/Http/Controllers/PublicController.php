<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Models\sabha1;
use App\Models\sabha10;
use App\Models\sabha11;
use App\Models\sabha12;
use App\Models\sabha13;
use App\Models\sabha14;
use App\Models\sabha15;
use App\Models\sabha16;
use App\Models\sabha17;
use App\Models\sabha18;
use App\Models\sabha19;
use App\Models\sabha2;
use App\Models\sabha20;
use App\Models\sabha3;
use App\Models\sabha4;
use App\Models\sabha5;
use App\Models\sabha7;
use App\Models\sabha8;
use App\Models\sabha9;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function index()
    {
        $datadok = sabha8::all();
        $databerita = sabha18::all();
        $dataartikel = sabha19::all();
        $datapengumuman = sabha20::all();
        $data1 = beranda::all();
        $data2 = sabha1::all();

        return view('NEW.01_halamanutama.newhalamanbaru', [
            'title' => 'Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data1' => $data1, // kirim data user login
            'data2' => $data2, // kirim data user login
            'datadok' => $datadok, // kirim data user login
            'dataartikel' => $dataartikel, // kirim data user login
            'databerita' => $databerita, // kirim data user login
            'datapengumuman' => $datapengumuman, // kirim data user login
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
            'title' => 'Prestasi | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login

            ]);
    }


    // MENU INDUK 2 PUBLIC VIEW
    public function publicsnoc()
    {
        $data = sabha9::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'Snoc | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'SNOC',

            ]);
    }

    public function publicnwct()
    {
        $data = sabha10::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'NWCT | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'NWCT',

            ]);
    }

    public function publicllbs()
    {
        $data = sabha11::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'LLBS | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'LLBS',

            ]);
    }

    public function publicdiklat()
    {
        $data = sabha12::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'DIKLAT | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'Diklat',

            ]);
    }

    public function publicfam()
    {
        $data = sabha13::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'Family Gathering | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'Family Gathering',

            ]);
    }

    public function publicmubes()
    {
        $data = sabha14::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'Mubes | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'Mubes',

            ]);
    }

    public function publicrua()
    {
        $data = sabha15::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'RUA | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'RUA',

            ]);
    }

    public function publicultah()
    {
        $data = sabha16::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'Ultah | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'Ultah',

            ]);
    }

    public function publicpeduli()
    {
        $data = sabha17::all();
        return view('NEW.02_menu2.01_snoc.01_publicsnoc', [
            'title' => 'Sabha Peduli | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'Sabha Peduli',

            ]);
    }

    // MENU INDUK 3 PUBLIC VIEW
    public function publicberita()
    {
        $data = sabha18::all();
        return view('NEW.03_berita.01_berita.01_publicsberita', [
            'title' => 'Berita | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'SNOC',

            ]);
    }

    public function publicartikel()
    {
        $data = sabha19::all();
        return view('NEW.03_berita.02_artikel.01_publicartikel', [
            'title' => 'Artikel | Sabhagiriwana17 | Universitas 17 Agustus 1945 Semarang | UNTAG',
            'user' => Auth::user(), // kirim data user login
            'data' => $data, // kirim data user login
            'judul' => 'SNOC',

            ]);
    }

}
