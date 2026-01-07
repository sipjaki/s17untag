<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Http\Request;
// use App\Models\User;
// use Illuminate\Support\Facades\Hash;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
// use Illuminate\Http\Request;
// use App\Models\User; // Sesuaikan dengan model User Anda
use Illuminate\Support\Facades\DB; // Import Facades DB untuk menggunakan query builder
use Illuminate\Support\Facades\Http; // Import Facades Http untuk membuat HTTP request


class RegisterController extends Controller


{
    //

    public function index()
    {
        //
        return view('fe_dashboard.register.index',[
            'title' => 'Register !',
            
            // 'title_halaman' => 'Halaman Fundraising',
            // 'data_daftarjadimitra'  => Jadimitra::all(),
        ]); 
    }
    
    public function sendOTP(Request $request)
    {
        // Validasi input dari formulir
        $validatedData = $request->validate([
            'phone_number' => 'required|numeric' // Sesuaikan aturan validasi sesuai kebutuhan Anda
        ]);

        // Kirimkan permintaan OTP ke layanan pihak ketiga
        $response = Http::post('URL_LAYANAN_OTP', [
            'phone_number' => $validatedData['phone_number']
        ]);

        // Ambil OTP dari respons layanan pihak ketiga
        $otp = $response->json('otp');

        // Simpan nomor telepon dan OTP dalam database
        DB::table('users')->updateOrInsert(
            ['phone_number' => $validatedData['phone_number']],
            ['otp' => $otp]
        );

        // Redirect ke halaman verifikasi OTP
        return redirect()->route('verifyotpform');
    }

    public function inputotp()
    {
        //
        return view('fe_dashboard.register.verify_otp_form',[
            'title' => 'Input OTP!',
            
            // 'title_halaman' => 'Halaman Fundraising',
            // 'data_daftarjadimitra'  => Jadimitra::all(),
        ]); 
    }
    public function verifyotp(Request $request)
    {
        // Validasi input dari form
        $validator = Validator::make($request->all(), [
        'otp_code' => 'required|numeric',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Ambil OTP yang disimpan di session
    $otpInSession = $request->session()->get('otp_code');

    // Ambil OTP yang dimasukkan oleh pengguna
    $otpEnteredByUser = $request->otp_code;

    // Bandingkan OTP yang dimasukkan pengguna dengan OTP yang disimpan di session
    if ($otpInSession == $otpEnteredByUser) {
        // OTP cocok, lakukan proses login atau registrasi sesuai kebutuhan
        // Contoh: return redirect()->route('dashboard');
        return redirect()->route('dashboard');
    } else {
        // OTP tidak cocok, kembalikan pengguna ke halaman verifikasi dengan pesan kesalahan
        return redirect()->back()->withErrors(['otp_code' => 'Invalid OTP code'])->withInput();
    }
}

// ========================== KONSEP BARU TANPA OTP ===================================================
public function newregisters(Request $request)
    {
        // MENAMPILKAN DATA ATAU MENANGKAP DATA YANG DIKIRIMKAN DARI FORM REGISTRATION

        // return $request->all();

        //$request->validate([
        $validateData = $request->validate([
            'name' => 'required|max:255',
            // 'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'username' => 'required'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']); CARA PERTAMA UNTUK PENGAMANAN PASSWORD 
        $validateData['password'] = Hash::make($validateData['password']); // JANGAN LUPA PANGGIL DULU KELAS HASH NYA 

        User::create($validateData);

        //    $request->session()->flash CARA PERTAMA 

        return redirect('/successregister')->with('success', 'Registrasi Berhasil');
    }

    public function success()
    {
        //
        return view('fe_dashboard.pendaftaranusers.success',[
            'title' => 'Registration successful!',
            
            // 'title_halaman' => 'Halaman Fundraising',
            // 'data_daftarjadimitra'  => Jadimitra::all(),
        ]); 
    }


}
