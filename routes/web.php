<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

// halaman admin
use App\Http\Controllers\DashboardEliteController;
use App\Http\Controllers\DashboardHoopsController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardGaleryController;
use App\Http\Controllers\DashboardJadwalController;
use App\Http\Controllers\DashboardPlayerController;
use App\Http\Controllers\DashboardRookieController;
use App\Http\Controllers\DashboardProgramController;
use App\Http\Controllers\DashboardStarterController;
use App\Http\Controllers\DashboardPrehoopsController;
use App\Http\Controllers\DashboardNewcomersController;
use App\Http\Controllers\DashboardVerifikasiController;
use App\Http\Controllers\DashboardDokumentasiController;

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

Route::get('/', function () {
    return view('welcome',[
        "title" => "Home"
    ]);
});

// Konfigurasi halaman berita
Route::get('/berita', [BeritaController::class, 'index'] );

Route::get('/viewberita/{berita:judul}',[BeritaController::class, 'show']);

Route::get('/berita/{category:nama}',[CategoryController::class,'show']);
// Route::get('/program', function () {
//     return view('program',[
//         "title" => "Program"
//     ]);
// });

Route::get('/coaching', function () {
    return view('coaching',[
        "title" => "Coaching"
    ]);
});

Route::get('/galery', [GaleryController::class, 'index'] );

Route::get('/viewgalery/{galery:nama}', [GaleryController::class , 'show']);


Route::get('/program',[ProgramController::class, 'index'] );

Route::get('/programdetail/{program:nama}',[ProgramController::class, 'show']);

// Route::get('/registrasi', function () {
//     return view('registrasi',[
//         "title" => "Registrasi"
//     ]);
// });

Route::view('/registration-success', 'registration-success')->name('registration.success');

Route::view('/registrasi', 'register',['title' => 'value'])->name('register')->middleware('guest');
Route::get('/daftar', function () {
    return view('daftar',[
        "title" => "daftar"
    ]);
});

Route::post('/login',[LoginController::class, 'authenticate'] );
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/dashboard/layouts/main',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/layouts/apip',[DashboardController::class, 'apip'])->middleware('auth');
Route::get('/dashboard/layouts/player',[DashboardController::class, 'player'])->middleware('auth');
// Route::get('/dashboard/main', function(){
    //     return view ('/dashboard/layouts/main');
    // });
    
    
    // // Route::view('/daftar','daftar')->name('daftar');
   
    // Route::get('/admin', function () {
    //     return view('admin/admin');
    // });
    // Route::get('/player', function () {
    //     return view('admin/player');
    // });
    // Route::get('/verifikasi', function () {
    //     return view('admin/verfikasi');
    // });
    // Route::get('/pelatih', function () {
    //     return view('admin/pelatih');
    // });
    // Route::get('/programadmin', function () {
    //     return view('admin/programadmin');
    // });
    // Route::get('/jadwaladmin', function () {
    //     return view('admin/jadwaladmin');
    // });
    // // Route::get('/player',[LoginController::class, 'player'] );
    // Route::get('/newcomers', function () {
    //     return view('admin/newcomers');
    // });
    // Route::get('/newcomers/view', function () {
    //     return view('admin/viewplayer');
    // });
// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });



// Menampilkan all Player
Route::resource('/dashboard/player',DashboardPlayerController::class);

// Menampilkan data non active
Route::resource('/dashboard/nonactive',DashboardPlayerController::class);


// menampilkan data player per program
Route::resource('/dashboard/newcomers',DashboardNewcomersController::class);
Route::resource('/dashboard/prehoops',DashboardPrehoopsController::class);
Route::resource('/dashboard/hoops',DashboardHoopsController::class);
Route::resource('/dashboard/rookie',DashboardRookieController::class);
Route::resource('/dashboard/starter',DashboardStarterController::class);
Route::resource('/dashboard/elite',DashboardEliteController::class);
Route::resource('/dashboard/verifikasi',DashboardVerifikasiController::class);



Route::resource('/dashboard',DashboardController::class);



Route::resource('programAdmin',DashboardProgramController::class);
Route::resource('jadwal',DashboardJadwalController::class);
Route::resource('beritaAdmin',DashboardBeritaController::class);
Route::resource('galeryAdmin',DashboardGaleryController::class);
Route::resource('dokumentasiAdmin',DashboardDokumentasiController::class);



