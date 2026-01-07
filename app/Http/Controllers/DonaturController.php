<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Donatur;

class DonaturController extends Controller
{

    public function index()
    {
        //
     
        return view('be_dashboard.daftardonatur.index', [
            'title'             => 'Data Para Donatur ',
            'title_data'             => 'Data Seluruh Donatur ',
            // 'title_halamandata'     => 'Data Users',
            'data_donatur'    => Donatur::paginate(10),
            'data_halaman' => 'Data Donatur'
            // 'user'        => User::all(),
            ]);
    }
    
    //
}
