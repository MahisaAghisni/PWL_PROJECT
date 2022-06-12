<?php

use App\Http\Controllers\Admin\ArenaController;
use App\Http\Controllers\Admin\JenisController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\DaftarLapController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('/admin/layouts.main');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(DaftarLapController::class)->group(function () {
    Route::get('/daftar-lapangan', 'index')->name('daftar-lap');
    Route::get('/daftar-lapangan/detail-lapangan/{id}', 'detail')->name('detail-lapangan');
    Route::get('/daftar-lapangan/detail-lapangan/cek-jadwal/{id}', 'cekJadwal')->name('cek-jadwal');
    Route::group(['middleware' => ['auth', 'CheckRole::customer']], function () {
        Route::get('/daftar-lapangan/detail-lapangan/booking/{id}', 'booking')->name('booking');
    });
});

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
    Route::resource('/admin/jenis', JenisController::class);
    Route::resource('/admin/arena', ArenaController::class);
    Route::resource('/admin/jadwal', JadwalController::class);
    Route::resource('/admin/dashboard', DashboardController::class);

    // Route::controller(DashboardController::class)->group(function () {
    //     Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
    // });

    // Route::controller(JadwalController::class)->group(function () {
    //     Route::get('/admin/jadwal', 'index')->name('admin.jadwal');
    //     Route::post('/admin/store', 'store')->name('admin.jadwal.store');
    // });

    // Route::controller(ArenaController::class)->group(function () {
    //     Route::get('/admin/arenas', 'index')->name('admin.arenas');
    //     Route::post('/admin/arenas/store', 'store')->name('admin.arenas.store');
    //     Route::get('/admin/arenas/destroy', 'destroy')->name('admin.arenas.destroy');
    // });

    // Route::controller(JenisController::class)->group(function () {
    //     Route::get('/admin/jenis', 'index')->name('admin.jenis');
    //     Route::get('/admin/jenis/create', 'create')->name('admin.jenis.create');
    //     Route::post('/admin/jenis/store', 'store')->name('admin.jenis.store');
    //     Route::post('/admin/jenis/update/{id}', 'update')->name('admin.jenis.update');
    // });
});

Auth::routes();
