<?php

namespace App\Http\Controllers;

use App\Models\Lokasimakangratis;
use App\Models\Daftarmitrarumahmakann;
use Illuminate\Http\Request;

class PaymentgatewayController extends Controller
{
    //

    public function cileunyi()
    {
        //
        return view('fe_dashboard.paymentgateway.lokasicileunyi.index',[
            'title' => 'Donasi Cileunyi',
            // 'title_halaman' => 'Halaman Fundraising',

            // 'data_lokasimakangratis'  => Lokasimakangratis::all(),
            // 'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),
            
            
        ]); 
    }

    public function paymentmakan($data)
    {
        
        $datas = Lokasimakangratis::where('kota', $data)->first();
        return view('fe_dashboard.paymentgateway.lokasicileunyi.index', [
            'title'             => 'Donasi Makan Cileunyi',
            'title_halaman'     => 'View Data',
            'data'    => $datas,
            // 'categories'        => Category::all(),
            'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),
        ]);
    }
}
