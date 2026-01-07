<?php

namespace App\Http\Controllers;


use App\Models\Daftarmitrarumahmakann;
use Illuminate\Http\Request;

use App\Http\Requests\StoreBe_daftarmitrarumahmakanRequest;
use App\Http\Requests\UpdateBe_daftarmitrarumahmakanRequest;

class DaftarmitrarumahmakannController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.daftarumkm.index',[
            'title' => 'Daftar UMKM',
            // 'title_halaman' => 'Halaman Fundraising',
            $data = Daftarmitrarumahmakann::where('status', 'approved')->get(),
            'data_daftarmitrarumahmakan'  => $data,

        ]); 
    }

    public function alldatadaftarmitra()
    {
        //
        return view('be_dashboard.daftarmitraumkm.alldata',[
            'title' => 'Show All Data',
            'title_data'             => 'Data Daftar Mitra Rumah Makan ',
            // 'title_halamandata'     => 'Data Users',
            'data_daftarmitrarumahmakan'    => Daftarmitrarumahmakann::paginate(10),
            'data_halamandaftarmitra' => 'Data Daftar Mitra Rumah Makan'

        ]); 
    }

    public function approvedmitra()
    {
        //
        return view('be_dashboard.daftarmitraumkm.approvedmitra',[
            'title' => 'Approved Mitra',
            'title_data'             => 'Data Approved Mitra ',
            // 'title_halamandata'     => 'Data Users',
            // 'data_daftarmitrarumahmakan'    => Daftarmitrarumahmakann::where('Status' === 'Approved')->get()->paginate(7),
            'data_daftarmitrarumahmakan' => Daftarmitrarumahmakann::where('Status', 'Approved')->paginate(7),

            'data_halamandaftarmitra' => 'Data Approved Mitra'

        ]); 
    }
    
    public function rejectedmitra()
    {
        //
        return view('be_dashboard.daftarmitraumkm.rejectermitra',[
            'title' => 'Rejected Mitra',
            'title_data'             => 'Data Rejected Mitra ',
            // 'title_halamandata'     => 'Data Users',
            // 'data_daftarmitrarumahmakan'    => Daftarmitrarumahmakann::where('Status' === 'Approved')->get()->paginate(7),
            'data_daftarmitrarumahmakan' => Daftarmitrarumahmakann::where('Status', 'Rejected')->paginate(7),

            'data_halamandaftarmitra' => 'Data Rejected Mitra'

        ]); 
    }

    public function daftarmitra()
    {
        //
        return view('fe_dashboard.daftarmitra.index',[
            'title' => 'List Antrian Mitra',
            
            'data_daftarmitra'  => Daftarmitrarumahmakann::paginate(5)

        ]); 
    }

    // public function show(Daftarmitrarumahmakann $data)
    // {
    //     //
    //     return view('fe_dashboard.daftarumkm.show',[
    //         'title' => 'Details UMKM',
    //         'data_showdaftarmitrarumahmakan' => $data,
    //     ]); 
    // }

    public function show($data)
    {
        //
        $datas = Daftarmitrarumahmakann::where('namarumahmakan', $data)->first();
        return view('fe_dashboard.daftarumkm.show', [
            'title'             => 'Details UMKM',
            'title_halaman'     => 'View Data',
            'data'    => $datas,
            // 'categories'        => Category::all(),
        ]);
    }

    public function showdaftarmitra($data)
    {
        //
        $datas = Daftarmitrarumahmakann::where('namarumahmakan', $data)->first();
        return view('fe_dashboard.daftarmitra.show', [
            'title'             => 'Details Mitra',
            // 'title_halaman'     => 'View Data',
            'data'    => $datas,
            // 'categories'        => Category::all(),
        ]);
    }
}
