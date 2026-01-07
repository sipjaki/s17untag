<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Jadimitra;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class PengaturanController extends Controller
{
    //

    public function index()
    {
        return view('pengaturan.index', [
            'title'             => 'Akun Anda',
            $data_daftarjadimitra = Jadimitra::where('user_id', Auth::id())->get(),
            
            'data_jadimitra' => $data_daftarjadimitra,

            $data_userss = User::where('id', Auth::id())->get(),
            
            'data_users' => $data_userss,

            // 'data_users'    => User::all()
        ]);
    }
}
