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
use App\Http\Controllers\PublicController;
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
// Route::resource('/', ProgrammakangratisController::class);
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

Route::get('/dashboard', function () {
    return view('fe_dashboard.dashboard.index', [
        'title' => 'Selamat Datang !',
        'data_lokasimakangratis'  => Lokasimakangratis::all(),
        'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


        require __DIR__.'/auth.php';
