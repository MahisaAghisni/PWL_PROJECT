<?php

use App\Http\Controllers\ArenaController;
use App\Http\Controllers\JenisController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('layouts.main');
});
Auth::routes();

Route::resource('/arena', ArenaController::class);

Route::controller(JenisController::class)->middleware('auth')->group(function () {
    Route::get('/admin/jenis', 'index')->name('admin.jenis.index');
    Route::get('/admin/jenis/create', 'create')->name('admin.jenis.create');
    Route::post('/admin/jenis/store', 'store')->name('admin.jenis.store');
});
