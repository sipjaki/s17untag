<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\DaftarmenuController;
use App\Http\Controllers\DaftarmitrarumahmakannController;
use App\Http\Controllers\JadimitraController;
use App\Http\Controllers\LokasimakangratisController;
use App\Http\Controllers\Paymentgateway;
use App\Http\Controllers\PaymentgatewayController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgrammakangratisController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\KategorittController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LokasipengajuanController;
use App\Http\Controllers\DonaturController;
use App\Models\Daftarmenu;
use App\Models\Daftarmitrarumahmakann;
use App\Models\Programmakangratis;
use App\Models\Lokasimakangratis;
use App\Models\Lokasipengajuan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK COMING SOON |||||||||||||||||||||||||||||||||||
Route::get('/comingsoon', function () {
    return view('comingsoon', [
        'title' => 'Coming Soon',
        ]);
});
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK COMING SOON |||||||||||||||||||||||||||||||||||
Route::get('/paymentgateways', function () {
    return view('fe_dashboard.paymentgateway.lokasicileunyi.newindeks', [
        'title' => 'Donasi Makan Gratis',
        ]);
});
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK COMING SOON |||||||||||||||||||||||||||||||||||
Route::get('/404', function () {
    return view('404', [
        'title' => 'Under Construction !',
        ]);
});
Route::get('/404S', function () {
    return view('404S', [
        'title' => 'Under Construction !',
        ]);
});
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK USERS ADMINISTRASI |||||||||||||||||||||||||||||||||||
Route::get('/registers', function () {
    return view('fe_dashboard.pendaftaranusers.index', [
        'title' => 'Registrasi !',
        ]);
        });
Route::post('/newregisters', [RegisterController::class, 'newregisters']);
Route::get('/successregister', [RegisterController::class, 'success']);
// --------------------------------------------------------------------------------------------------------------------------------


// ----------------------------------------------------
// Route::resource('/logins', LoginController::class);
Route::get('/daftar', [RegisterController::class, 'index']);
Route::post('/send-otp', [RegisterController::class, 'sendotp'])->name('daftarsendotp');
Route::post('/input_otp', [RegisterController::class, 'inputotp'])->name('verifyotpform');

// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK AKSES LOGIN PENGGUNA |||||||||||||||||||||||||||||||||||
// Route::resource('/logins', LoginController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK USERS DASHBOARD PROGRAM MAKAN GRATIS |||||||||||||||||||||||||||||||||||
Route::resource('/', ProgrammakangratisController::class);
// Route::resource('/dashboard', ProgrammakangratisController::class);
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK AKSES TENTANG KAMI |||||||||||||||||||||||||||||||||||
Route::get('/admindashboard', [AdminDashboardController::class, 'index'])->middleware('auth');
// --------------------------------------------------------------------------------------------------------------------------------

// ==========================================================
// |||||||||||||||||| ROUTE UNTUK AKSES TENTANG KAMI |||||||||||||||||||||||||||||||||||
Route::resource('/tentangkami', TentangkamiController::class);
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA DAFTAR MITRA |||||||||||||||||||||||||||||||||||
Route::resource('/daftarumkm', DaftarmitrarumahmakannController::class);
Route::get('/daftarumkm/{namarumahmakan}', [DaftarmitrarumahmakannController::class, 'show'])->name('daftarumkm');
Route::get('/daftarmitra', [DaftarmitrarumahmakannController::class, 'daftarmitra'])->name('daftarmitra');
Route::get('/daftarmitra/{namarumahmakan}', [DaftarmitrarumahmakannController::class, 'showdaftarmitra'])->name('daftarmitra');
Route::get('/alldatadaftarmitra', [DaftarmitrarumahmakannController::class, 'alldatadaftarmitra'])->name('alldatadaftarmitra');
Route::get('/approvedmitra', [DaftarmitrarumahmakannController::class, 'approvedmitra'])->name('approvedmitra');
Route::get('/rejectedmitra', [DaftarmitrarumahmakannController::class, 'rejectedmitra'])->name('rejectedmitra');
// Route::get('/daftarumkm/{namarumahmakan}', 'DaftarmitrarumahmakannController@showdaftarmitra')->name('daftarmitra');
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA LOKASI MAKAN GRATIS |||||||||||||||||||||||||||||||||||
Route::resource('/lokasimakangratis', LokasimakangratisController::class);
Route::get('/lokasimakangratis/{alamat}', [LokasimakangratisController::class, 'show'])->name('lokasimakangratis');
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA DAFTAR MENU |||||||||||||||||||||||||||||||||||
Route::resource('/daftarmenu', DaftarmenuController::class);
// Route::get('/lokasimakangratis/{alamat}', [LokasimakangratisController::class, 'show'])->name('lokasimakangratis');
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA JADI MITRA DAN DAFTAR MITRA |||||||||||||||||||||||||||||||||||
Route::resource('/daftarjadimitra', JadimitraController::class)->middleware('auth');
Route::post('/daftarjadimitra/save', [JadimitraController::class, 'store'])->name('daftarjadimitra.save')->middleware('auth');
Route::get('/daftarmitrasuccess', [JadimitraController::class, 'mitrasuccess'])->middleware('auth');
Route::get('/showmitrasuccess/{user}', [JadimitraController::class, 'showmitrasuccess'])->middleware('auth');
Route::get('/halamandatadaftarmitra', [JadimitraController::class, 'alldata'])->middleware('auth');


// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA PEMBAYARAN PAYMENT GATEWAY |||||||||||||||||||||||||||||||||||
Route::get('/paymentgateway/mitra/{kota}', [PaymentgatewayController::class, 'paymentmakan'])->name('paymentmakan');
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA PENGATURAN  |||||||||||||||||||||||||||||||||||
Route::get('/pengaturan', [PengaturanController::class, 'index'])->middleware('auth');
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA PENGATURAN  |||||||||||||||||||||||||||||||||||
Route::get('/halamandatausers', [UserController::class, 'index'])->middleware('auth');
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA PENGATURAN  |||||||||||||||||||||||||||||||||||
Route::get('/halamandatakategori', [KategorittController::class, 'index'])->middleware('auth');
Route::get('/createkategori', [KategorittController::class, 'createkategori'])->middleware('auth');
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA LOKASI PENGAJUAN MAKAN GRATIS  |||||||||||||||||||||||||||||||||||
Route::get('/lokasipengajuan', [LokasipengajuanController::class, 'index']);
Route::get('/lokasipengajuanall', [LokasipengajuanController::class, 'alldata']);
Route::get('/lokasipengajuannew', [LokasipengajuanController::class, 'newcreate'])->middleware('auth');
Route::post('/lokasipengajuansubmit', [Lokasipengajuan::class, 'save'])->middleware('auth');
Route::post('/destroylokasipengajuan', [Lokasipengajuan::class, 'destroy'])->middleware('auth');
// Route::get('/lokasipengajuan', [Lokasipengajuan::class, 'lokasipengajuanalldata'])->middleware('auth');
// Route::get('/daftarumkm/details/{namarumahmakan}', [DaftarmitrarumahmakannController::class, 'show']);
// --------------------------------------------------------------------------------------------------------------------------------


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK DATA LOKASI PAYMENT GATEWAY  |||||||||||||||||||||||||||||||||||
Route::get('/paymentgateway/mitra/{kota}', [PaymentgatewayController::class, 'paymentmakan'])->name('paymentmakan');

Route::get('/dashboard', function () {
    return view('fe_dashboard.dashboard.index', [
        'title' => 'Selamat Datang !',
        'data_lokasimakangratis'  => Lokasimakangratis::all(),
        'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


// ===============================================================================================
// ===============================================================================================
// ===============================================================================================


// ==========================================================
// |||||||||||||||||| ROUTE UNTUK USERS ADMINISTRASI |||||||||||||||||||||||||||||||||||
Route::get('/haiucaresprogramkami', function () {
    return view('fe_dashboard.a_programkami.index', [
        'title' => 'Program Kami',
        ]);
        });

// ==========================================================
// |||||||||||||||||| ROUTE UNTUK USERS ADMINISTRASI |||||||||||||||||||||||||||||||||||
Route::get('/programkesehatan', function () {
    return view('fe_dashboard.a_programkami.programkesehatan.index', [
        'title' => 'Program Kesehatan',
        ]);
        });

// ==========================================================
// |||||||||||||||||| ROUTE UNTUK USERS ADMINISTRASI |||||||||||||||||||||||||||||||||||
Route::get('/programpendidikan', function () {
    return view('fe_dashboard.a_programkami.programpendidikan.index', [
        'title' => 'Program Pendidikan',
        ]);
        });

// ==========================================================
// |||||||||||||||||| ROUTE UNTUK USERS ADMINISTRASI |||||||||||||||||||||||||||||||||||
Route::get('/programinfra', function () {
    return view('fe_dashboard.a_programkami.programinfra.index', [
        'title' => 'Program Infrastruktur',
        ]);
        });

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
// Route::get('/profile/{name}', [UserController::class, 'index'])->middleware('auth');


// Route::get('/', function () {
    //     return view('welcome');
    // });
// Route::middleware('auth')->group(function () {
    //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB


// Route::get('/masuk', function () {
    //         return view('masuk');
//     });


// Route::get('/dashboard', function () {
    //     return view('admin_dashboard.be_dashboard.dashboard.index',[
        //         'title' => 'Admin Dashboard',
//         'title_halaman' => 'Halaman Dashboard',

//         'data_users' => User::all()

//     ]);

// })->middleware(['auth', 'verified'])->name('dashboard');


// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
// Route::resource('/user', UserController::class)->middleware('auth');


// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/category', CategoryController::class)->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
Route::get('/daftardonatur', [DonaturController::class, 'index'])->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/fundraiser', FundraiserController::class)->middleware('auth');

// Route::post('/daftarjadimitra/store', JadimitraController::class)->middleware('auth');
// Route::get('/lokasimakangratis/{alamat}', [LokasimakangratisController::class, 'show'])->name('lokasimakangratis');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/fundraising', FundraisingController::class)->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/fundraising_phases', FundraisingPhasController::class)->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/withdrawals', FundraisingWithdrawalsController::class)->middleware('auth');

// ===================================================================================
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/makangratis', FeMakangratisController::class);


// ===================================================================================
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/tentangkami', TentangkamiController::class);

// ===================================================================================
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/lokasimakangratis', LokasimakangratisController::class);

// ===================================================================================
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI
// Route::resource('/daftarmitrarumahmakan', DaftarmitrarumahmakanController::class);


// MENAMBAHKAN FITUR MIDLEWARE -> PENGGUNAAN GUEST UNTUK HALAMAN YANG BELUM TERAUTENTIKASI ATAU TERDAFTAR
// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // PENAMBAHAN FITUR GUEST
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
// Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.reset');

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/daftarsendotp', [RegisterController::class, 'daftarsendotp'])->name('verify.otp');
// Route::get('/daftarverifyotp', [RegisterController::class, 'verifyOTPForm'])->name('verifyOTPForm');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);
// ----------------------------------------------------


// ==========================================================
// Route::get('/dashboard', function () {
//     return view('fe_dashboard.programmakangratis.index', [
    //         'title' => 'Selamat Datang',
//     ]);
// });

// Route::get('/daftarmitrasuccess', function () {
    //     return view('fe_dashboard.daftarjadimitra.success',[
    //         'title' => 'Registration Successful!',
    //     ]);
// })->middleware('auth');




        require __DIR__.'/auth.php';
