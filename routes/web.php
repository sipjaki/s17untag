<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\DaftarmenuController;
use App\Http\Controllers\DaftarmitrarumahmakannController;
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
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BerandaController as ControllersBerandaController;
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
Route::post('/masuk', [LoginController::class, 'authenticate']);
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

Route::get('/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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

// HALAMAN BACKEN ADMIN DASHBOARD UNTUK ADMIN SABHAFIRINWA 17
// MENU 0 ===========================
Route::get('/00beranda', [BerandaController::class, 'adminberanda'])->middleware('auth')->name('00beranda.index');
Route::delete('/00beranda/{id}', [BerandaController::class, 'berandadelete'])->middleware('auth')->name('00beranda.destroy');
Route::post('/berandacreate', [BerandaController::class, 'berandacreate'])->middleware('auth')->name('beranda.create');
Route::put('/berandacreate/{id}', [BerandaController::class, 'berandaupdate'])->middleware('auth')->name('beranda.update');

// MENU 1 ===========================
Route::get('/01sekapursirih', [BerandaController::class, 'adminsekapursirih'])->middleware('auth')->name('01sekapursirih.index');
Route::delete('/01sekapursirih/{id}', [BerandaController::class, 'sekapursirihdelete'])->middleware('auth')->name('01sekapursirih.destroy');
Route::post('/sekapursirihcreate', [BerandaController::class, 'sekapursirihcreate'])->middleware('auth')->name('sekapursirih.create');
Route::put('/sekapursirihupdate/{id}', [BerandaController::class, 'sekapursirihupdate'])->middleware('auth')->name('sekapursirih.update');

// MENU 2 ===========================
Route::get('/02kepengurusan', [BerandaController::class, 'adminkepengurusan'])->middleware('auth')->name('02kepengurusan.index');
Route::delete('/02kepengurusan/{id}', [BerandaController::class, 'kepengurusandelete'])->middleware('auth')->name('02kepengurusan.destroy');
Route::post('/kepengurusancreate', [BerandaController::class, 'kepengurusancreate'])->middleware('auth')->name('kepengurusan.create');
Route::put('/kepengurusanupdate/{id}', [BerandaController::class, 'kepengurusupdate'])->middleware('auth')->name('kepengurusan.update');

// MENU 3 ===========================
Route::get('/03peraturan', [BerandaController::class, 'adminperaturan'])->middleware('auth')->name('03peraturan.index');
Route::delete('/03peraturan/{id}', [BerandaController::class, 'peraturandelete'])->middleware('auth')->name('03peraturan.destroy');
Route::post('/peraturancreate', [BerandaController::class, 'peraturancreate'])->middleware('auth')->name('peraturan.create');
Route::put('/peraturanupdate/{id}', [BerandaController::class, 'peraturanupdate'])->middleware('auth')->name('peraturan.update');

// MENU 4 ===========================
Route::get('/04divisi', [BerandaController::class, 'admindivisi'])->middleware('auth')->name('04divisi.index');
Route::delete('/04divisi/{id}', [BerandaController::class, 'divisidelete'])->middleware('auth')->name('04divisi.destroy');
Route::post('/divisicreate', [BerandaController::class, 'divisicreate'])->middleware('auth')->name('divisi.create');
Route::put('/divisiupdate/{id}', [BerandaController::class, 'divisiupdate'])->middleware('auth')->name('divisi.update');

// MENU 5 ===========================
Route::get('/05keanggotaan', [BerandaController::class, 'adminkeanggotaan'])->middleware('auth')->name('05keanggotaan.index');
Route::delete('/05keanggotaan/{id}', [BerandaController::class, 'keanggotaandelete'])->middleware('auth')->name('05keanggotaan.destroy');
Route::post('/keanggotaancreate', [BerandaController::class, 'keanggotaancreate'])->middleware('auth')->name('keanggotaan.create');
Route::put('/keanggotaanupdate/{id}', [BerandaController::class, 'keanggotaanupdate'])->middleware('auth')->name('keanggotaan.update');

// MENU 6 ===========================
Route::get('/06kesekertariatan', [BerandaController::class, 'adminkesekertariatan'])->middleware('auth')->name('06kesekertariatan.index');
Route::delete('/06kesekertariatan/{id}', [BerandaController::class, 'kesekertariatandelete'])->middleware('auth')->name('06kesekertariatan.destroy');
Route::post('/kesekertariatancreate', [BerandaController::class, 'kesekertariatancreate'])->middleware('auth')->name('kesekertariatan.create');
Route::put('/kesekertariatanupdate/{id}', [BerandaController::class, 'kesekertariatanupdate'])->middleware('auth')->name('kesekertariatan.update');

// MENU 7 ===========================
Route::get('/07prestasi', [BerandaController::class, 'adminprestasi'])->middleware('auth')->name('07prestasi.index');
Route::delete('/07prestasi/{id}', [BerandaController::class, 'prestasidelete'])->middleware('auth')->name('07prestasi.destroy');
Route::post('/prestasicreate', [BerandaController::class, 'prestasicreate'])->middleware('auth')->name('prestasi.create');
Route::put('/prestasiupdate/{id}', [BerandaController::class, 'prestasiupdate'])->middleware('auth')->name('prestasi.update');

// MENU 8 ===========================
Route::get('/08dokkegiatan', [BerandaController::class, 'admindokkegiatan'])->middleware('auth')->name('08dokkegiatan.index');
Route::delete('/08dokkegiatan/{id}', [BerandaController::class, 'dokkegiatandelete'])->middleware('auth')->name('08dokkegiatan.destroy');
Route::post('/dokkegiatancreate', [BerandaController::class, 'dokkegiatancreate'])->middleware('auth')->name('dokkegiatan.create');
Route::put('/dokkegiatanupdate/{id}', [BerandaController::class, 'dokkegiatanupdate'])->middleware('auth')->name('dokkegiatan.update');

// MENU 9 SNOC ===========================
Route::get('/09snoc', [BerandaController::class, 'admionsnoc'])->middleware('auth')->name('09snoc.index');
Route::delete('/09snoc/{id}', [BerandaController::class, 'snocdelete'])->middleware('auth')->name('09snoc.destroy');
Route::post('/snoccreate', [BerandaController::class, 'snoccreate'])->middleware('auth')->name('snoc.create');
Route::put('/snocupdate/{id}', [BerandaController::class, 'snocupdate'])->middleware('auth')->name('snoc.update');


// MENU 10 SNOC ===========================
Route::get('/10nwct', [BerandaController::class, 'adminnwct'])->middleware('auth')->name('10nwct.index');
Route::delete('/10nwct/{id}', [BerandaController::class, 'nwctdelete'])->middleware('auth')->name('10nwct.destroy');
Route::post('/nwctcreate', [BerandaController::class, 'nwctcreate'])->middleware('auth')->name('nwct.create');
Route::put('/nwctupdate/{id}', [BerandaController::class, 'nwctupdate'])->middleware('auth')->name('nwct.update');

// MENU 11 SNOC ===========================
Route::get('/11llbs', [BerandaController::class, 'adminllbs'])->middleware('auth')->name('11llbs.index');
Route::delete('/11llbs/{id}', [BerandaController::class, 'llbsdelete'])->middleware('auth')->name('11llbs.destroy');
Route::post('/llbscreate', [BerandaController::class, 'llbscreate'])->middleware('auth')->name('llbs.create');
Route::put('/llbsupdate/{id}', [BerandaController::class, 'llbsupdate'])->middleware('auth')->name('llbs.update');

// MENU 12 DIKLAT  ===========================
Route::get('/12diklat', [BerandaController::class, 'admindiklat'])->middleware('auth')->name('12diklat.index');
Route::delete('/12diklat/{id}', [BerandaController::class, 'diklatdelete'])->middleware('auth')->name('12diklat.destroy');
Route::post('/diklatcreate', [BerandaController::class, 'diklatcreate'])->middleware('auth')->name('diklat.create');
Route::put('/diklatupdate/{id}', [BerandaController::class, 'diklatupdate'])->middleware('auth')->name('diklat.update');

// MENU 13 FAMGAHTERING  ===========================
Route::get('/13fam', [BerandaController::class, 'adminfam'])->middleware('auth')->name('13fam.index');
Route::delete('/13fam/{id}', [BerandaController::class, 'famdelete'])->middleware('auth')->name('13fam.destroy');
Route::post('/famcreate', [BerandaController::class, 'famcreate'])->middleware('auth')->name('fam.create');
Route::put('/famupdate/{id}', [BerandaController::class, 'famupdate'])->middleware('auth')->name('fam.update');

// MENU 14 MUBERS  ===========================
Route::get('/14mubes', [BerandaController::class, 'adminmubes'])->middleware('auth')->name('14mubes.index');
Route::delete('/14mubes/{id}', [BerandaController::class, 'mubesdelete'])->middleware('auth')->name('14mubes.destroy');
Route::post('/mubescreate', [BerandaController::class, 'mubescreate'])->middleware('auth')->name('mubes.create');
Route::put('/mubesupdate/{id}', [BerandaController::class, 'mubesupdate'])->middleware('auth')->name('mubes.update');

// MENU 15 RUA  ===========================
Route::get('/15rua', [BerandaController::class, 'adminrua'])->middleware('auth')->name('15rua.index');
Route::delete('/15rua/{id}', [BerandaController::class, 'ruadelete'])->middleware('auth')->name('15rua.destroy');
Route::post('/ruacreate', [BerandaController::class, 'ruacreate'])->middleware('auth')->name('rua.create');
Route::put('/ruaupdate/{id}', [BerandaController::class, 'ruaupdate'])->middleware('auth')->name('rua.update');

// MENU 16 ULTAH  ===========================
Route::get('/16ultah', [BerandaController::class, 'adminultah'])->middleware('auth')->name('16ultah.index');
Route::delete('/16ultah/{id}', [BerandaController::class, 'ultahdelete'])->middleware('auth')->name('16ultah.destroy');
Route::post('/ultahcreate', [BerandaController::class, 'ultahcreate'])->middleware('auth')->name('ultah.create');
Route::put('/ultahupdate/{id}', [BerandaController::class, 'ultahupdate'])->middleware('auth')->name('ultah.update');

// MENU 17 PEDULI  ===========================
Route::get('/17peduli', [BerandaController::class, 'adminpeduli'])->middleware('auth')->name('17peduli.index');
Route::delete('/17peduli/{id}', [BerandaController::class, 'pedulidelete'])->middleware('auth')->name('17peduli.destroy');
Route::post('/pedulicreate', [BerandaController::class, 'pedulicreate'])->middleware('auth')->name('peduli.create');
Route::put('/peduliupdate/{id}', [BerandaController::class, 'peduliupdate'])->middleware('auth')->name('peduli.update');



// MENU 18 BERITA   ===========================
Route::get('/18berita', [BerandaController::class, 'adminberita'])->middleware('auth')->name('18berita.index');
Route::delete('/18berita/{id}', [BerandaController::class, 'beritadelete'])->middleware('auth')->name('18berita.destroy');
Route::post('/beritacreate', [BerandaController::class, 'beritacreate'])->middleware('auth')->name('berita.create');
Route::put('/beritaupdate/{id}', [BerandaController::class, 'beritaupdate'])->middleware('auth')->name('berita.update');

// MENU 19 ARTIKEL    ===========================
Route::get('/19artikel', [BerandaController::class, 'adminartikel'])->middleware('auth')->name('19artikel.index');
Route::delete('/19artikel/{id}', [BerandaController::class, 'artikeldelete'])->middleware('auth')->name('19artikel.destroy');
Route::post('/artikelcreate', [BerandaController::class, 'artikelcreate'])->middleware('auth')->name('artikel.create');
Route::put('/artikelupdate/{id}', [BerandaController::class, 'artikelupdate'])->middleware('auth')->name('artikel.update');

// MENU 20 PENGUMUMAN    ===========================
Route::get('/20pengumuman', [BerandaController::class, 'adminpengumuman'])->middleware('auth')->name('20pengumuman.index');
Route::delete('/20pengumuman/{id}', [BerandaController::class, 'pengumumandelete'])->middleware('auth')->name('20pengumuman.destroy');
Route::post('/pengumumancreate', [BerandaController::class, 'pengumumancreate'])->middleware('auth')->name('pengumuman.create');
Route::put('/pengumumanupdate/{id}', [BerandaController::class, 'pengumumanupdate'])->middleware('auth')->name('pengumuman.update');

// MENU 21 ANGKATAN KEPENGURUSAN    ===========================
Route::get('/21angkatankepengurusan', [BerandaController::class, 'adminangkatankepengurusan'])->middleware('auth')->name('21angkatan.index');
Route::delete('/21angkatankepengurusan/{id}', [BerandaController::class, 'angkatandelete'])->middleware('auth')->name('21angkatan.destroy');
Route::post('/angkatancreate', [BerandaController::class, 'angkatancreate'])->middleware('auth')->name('angkatan.create');
Route::put('/angkatanupdate/{id}', [BerandaController::class, 'angkatanupdate'])->middleware('auth')->name('angkatan.update');





// PEMBAHARUAN BARU APLIKASI SNOC UNTAG SEMARANG
Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/beranda', [PublicController::class, 'index'])->name('index');

Route::get('/sekapursirih', [PublicController::class, 'sekapursirih'])->name('sekapursirih');

Route::get('/kepengurusan', [PublicController::class, 'kepengurusan'])->name('kepengurusan');

Route::get('/peraturan', [PublicController::class, 'peraturan'])->name('peraturan');

Route::get('/atribut', [PublicController::class, 'atribut'])->name('atribut');

Route::get('/divisis17', [PublicController::class, 'divisis17'])->name('divisis17');

Route::get('/keanggotaan', [PublicController::class, 'keanggotaan'])->name('keanggotaan');

Route::get('/prestasi', [PublicController::class, 'prestasi'])->name('prestasi');

// MENU INDUK 2
Route::get('/snoc', [PublicController::class, 'publicsnoc'])->name('snoc');

Route::get('/nwct', [PublicController::class, 'publicnwct'])->name('nwct');

Route::get('/llbs', [PublicController::class, 'publicllbs'])->name('llbs');

Route::get('/diklat', [PublicController::class, 'publicdiklat'])->name('diklat');

Route::get('/fam', [PublicController::class, 'publicfam'])->name('fam');

Route::get('/mubes', [PublicController::class, 'publicmubes'])->name('mubes');

Route::get('/rua', [PublicController::class, 'publicrua'])->name('rua');

Route::get('/ultah', [PublicController::class, 'publicultah'])->name('ultah');

Route::get('/sabhapeduli', [PublicController::class, 'publicpeduli'])->name('sabhapeduli');


// MENU INDUK 3
Route::get('/berita', [PublicController::class, 'publicberita'])->name('berita');

Route::get('/artikel', [PublicController::class, 'publicartikel'])->name('artikel');

        require __DIR__.'/auth.php';
