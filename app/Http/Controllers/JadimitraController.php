<?php

namespace App\Http\Controllers;

use App\Models\Jadimitra;
use App\Models\User;
use App\Http\Requests\JadimitraRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\StoreJadimitraRequest;
use App\Http\Requests\UpdateJadimitraRequest;

class JadimitraController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.daftarjadimitra.index',[
            'title' => 'Form Jadi Mitra',
            // 'title_halaman' => 'Halaman Fundraising',
            'data_daftarjadimitra'  => Jadimitra::all(),
        ]); 
    }
    
    
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_rumahmakan'     => 'required',
            'nama_pemilik'        => 'required',
            'pilihan_kota'        => 'required',
            'alamat'              => 'required',
            'nomor_telepon'       => 'required',
            'email'               => 'required',
            'tanggal_berdiri'     => 'required',
            'active'              => 'required',
            'kuota_porsi'         => 'required',
            'ktp'                 => 'required|image', // Menambahkan validasi bahwa ktp harus berupa gambar
            'foto_mitra'          => 'required|image', // Menambahkan validasi bahwa foto_mitra harus berupa gambar
            'foto_umkm'           => 'required|image', // Menambahkan validasi bahwa foto_umkm harus berupa gambar
            'keterangan_mitra'    => 'required',
        ]);

        // Mendapatkan ID user yang sedang login
        $userId = auth()->user()->id;

        // Menyimpan data baru ke dalam database
        $jadimitra = new Jadimitra();
        $jadimitra->nama_rumahmakan = $validatedData['nama_rumahmakan'];
        $jadimitra->nama_pemilik = $validatedData['nama_pemilik'];
        $jadimitra->pilihan_kota = $validatedData['pilihan_kota'];
        $jadimitra->alamat = $validatedData['alamat'];
        $jadimitra->nomor_telepon = $validatedData['nomor_telepon'];
        $jadimitra->email = $validatedData['email'];
        $jadimitra->tanggal_berdiri = $validatedData['tanggal_berdiri'];
        $jadimitra->kuota_porsi = $validatedData['kuota_porsi'];
        $jadimitra->ktp = $request->file('ktp')->store('public/ktp');
        $jadimitra->foto_mitra = $request->file('foto_mitra')->store('public/foto_mitra');
        $jadimitra->foto_umkm = $request->file('foto_umkm')->store('public/foto_umkm');
        $jadimitra->keterangan_mitra = $validatedData['keterangan_mitra'];
        $jadimitra->user_id = $userId;
        $jadimitra->save();

        // Redirect ke halaman sukses
        return redirect('/daftarmitrasuccess')->with('success', 'Berkas Saudara Berhasil di Upload!');
    }   

    public function mitrasuccess()
    {
        //
        return view('fe_dashboard.daftarjadimitra.success',[
            'title' => 'Registrations Successful !',
            // 'title_halaman' => 'Halaman Fundraising',
            // 'data_daftarjadimitra'  => Jadimitra::all(),
            $data_daftarjadimitra = Jadimitra::where('user_id', Auth::id())->get(),
            
            'data_jadimitra' => $data_daftarjadimitra,
        ]); 
    }

    public function showmitrasuccess($data)
    {
        //
        $datas = Jadimitra::where('nama_rumahmakan', $data)->first();
        return view('fe_dashboard.daftarjadimitra.show', [
            'title'             => 'Berkas Anda ',
            // 'title_halaman'     => 'View Data',
            'data'    => $datas,
            'user'        => User::all(),
        ]);
    }

    public function alldata()
    {
        //
        return view('be_dashboard.daftarberkasmitra.index',[
            'title' => 'Data Daftar Jadi Mitra',
            'data_halamanjadimitra' => 'Data Berkas Daftar Pengajuan Mitra',
            // 'title_halaman' => 'Halaman Fundraising',
            'data_daftarjadimitra'  => Jadimitra::paginate(10),
        ]); 
    }
}


// Route::get('/daftarmitrasuccess', function () {
//     return view('fe_dashboard.daftarjadimitra.success',[
//         'title' => 'Registration Successful!',
//     ]);
// })->middleware('auth');