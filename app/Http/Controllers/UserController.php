<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index()
    {
        //
     
        return view('be_dashboard.halamanusers.index', [
            'title'             => 'Data Users & Admin ',
            'title_data'             => 'Data Users & Admin ',
            // 'title_halamandata'     => 'Data Users',
            'data_users'    => User::paginate(10),
            'data_halamanusers' => 'Data Users & Admin'
            // 'user'        => User::all(),
            ]);
    }
    // public function index($data)
    // {
    //     //
    //     $datas = User::where('name', $data)->first();
    //     return view('pengaturan.users.index', [
    //         'title'             => 'Akun Anda ',
    //         // 'title_halaman'     => 'View Data',
    //         'data'    => $datas,
    //         // 'user'        => User::all(),
    //         ]);
    // }


}
