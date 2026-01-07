<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Daftarmitrarumahmakann;
use App\Models\Lokasimakangratis;

class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        return view('be_dashboard.dashboard.index',[
            'title' => 'Halaman Dashboard',
            'title_halamandata' => 'Sistem Informasi HaiuCare Bangun Indonesia',

            'data_lokasimakangratis' => Lokasimakangratis::all() 

        ]);
    }

}
