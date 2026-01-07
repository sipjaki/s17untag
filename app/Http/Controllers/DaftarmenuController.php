<?php

namespace App\Http\Controllers;

use App\Models\Daftarmenu;
use Illuminate\Http\Request;

class DaftarmenuController extends Controller
{
    //
    
    public function index()
    {
        //
        return view('fe_dashboard.daftarmenumakanan.index',[
            'title' => 'Daftar Menu Makanan',
            // 'title_halaman' => 'Halaman Fundraising',
            // $data = Daftarmitrarumahmakann::where('status', 'approved')->get(),
            'data_daftarmenumakanan'  => Daftarmenu::all()

        ]); 
    }
}
