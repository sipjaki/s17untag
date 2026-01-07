<?php

namespace App\Http\Controllers;

use App\Models\Tentangkami;
use Illuminate\Http\Request;

class TentangkamiController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.tentang_kami.index',[
            'title' => 'Tentang Kami',
            // 'title_halaman' => 'Halaman Fundraising',

            'data_tentangkami'  => Tentangkami::all(),

        ]); 
    }
}
