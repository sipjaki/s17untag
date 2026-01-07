<?php

namespace App\Http\Controllers;

use App\Models\Lokasimakangratis;
use App\Models\Daftarmitrarumahmakann;
use Illuminate\Http\Request;

class LokasimakangratisController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.lokasimakangratis.index',[
            'title' => 'Lokasi Makan Gratis',
            // 'title_halaman' => 'Halaman Fundraising',

            'data_lokasimakangratis'  => Lokasimakangratis::all(),
            'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),
            
            
        ]); 
    }

    public function show($data)
    {
        //
        $datas = Lokasimakangratis::where('alamat', $data)->first();
        return view('fe_dashboard.lokasimakangratis.show', [
            'title'             => 'Lokasi Makan Gratis',
            // 'title_halaman'     => 'View Data',
            'data'    => $datas,
            // 'categories'        => Category::all(),
            'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),
        ]);
    }
}
