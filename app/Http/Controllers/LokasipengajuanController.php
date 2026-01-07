<?php

namespace App\Http\Controllers;

use App\Models\Lokasipengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LokasipengajuanController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.lokasipengajuan.index',[
            'title' => 'Daftar Lokasi Pengajuan',

            // $totalCileunyi = Lokasipengajuan::where('lokasi' === 'Cileunyi')->count(),
            // 'data_cileunyi' => $totalCileunyi,
         
        ]); 
    }

    public function newcreate()
    {
        //
        return view('fe_dashboard.lokasipengajuan.create',[
            'title' => 'Ajukan Lokasi Makan Gratis !',
            
            $data_lokasipengajuans = Lokasipengajuan::where('id', Auth::id())->get(),

            'data_lokasipengajuan' => $data_lokasipengajuans,
        
            $data_userss = User::where('id', Auth::id())->get(),

            'data_users' => $data_userss, 
        ]); 
    }

    public function save(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'user_id'              => 'required',
            'lokasi'                => 'required',
            'keteranganlokasi'        => 'required',
            
        ]);

        // Mendapatkan ID user yang sedang login
        $userId = auth()->user()->id;

        // Menyimpan data baru ke dalam database
        $lokasipengajuan = new Lokasipengajuan();
        // $lokasipengajuan->user_id = $validatedData['user_id'];
        $lokasipengajuan->lokasi = $validatedData['lokasi'];
        $lokasipengajuan->lokasi = $validatedData['keteranganlokasi'];
       
        $lokasipengajuan->user_id= $userId;
        $lokasipengajuan->save();

        // Redirect ke halaman sukses
        return redirect('/lokasipengajuan')->with('success', 'Submit Berhasil !');
    } 

    public function alldata()
    {
        //
     
        return view('be_dashboard.lokasipengajuan.index', [
            'title'             => 'Lokasi Pengajuan ',
            'title_data'             => 'Data Lokasi Pengajuan ',
            // 'title_halamandata'     => 'Data Users',
            'data_lokasipengajuan'    => Lokasipengajuan::paginate(15),
            'data_halaman' => 'Data Lokasi Pengajuan'
            // 'user'        => User::all(),
            ]);
    }

    public function destroy($data)
    {
        $lokasipengajuan = Lokasipengajuan::where('id', $data)->firstOrFail(); // Mencari berita berdasarkan judul
    
        $lokasipengajuan->delete(); // Menghapus berita dari database
    
        return redirect('/lokasipengajuanall')->with('delete', 'Lokasi Pengajuan has been deleted successfully!');
    }


}
