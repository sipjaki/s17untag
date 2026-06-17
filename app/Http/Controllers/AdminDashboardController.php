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
            return view('backend.00_dashboard.01_halamandashboard',[
                'title' => 'Halaman Dashboard Sabhagiriwana17',
                'user' => auth()->user(),
            ]);
        }

}
