<?php

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
Route::resource('transaksi', 'TransaksiController');
Route::resource('Dashboard', 'DashboardController');
Route::resource('Kas', 'KasController');
Route::resource('Anggota', 'AnggotaController');
Route::resource('Pengelola', 'PengelolaController');
Route::resource('Poktan', 'PoktanController');
Route::resource('peminjaman', 'PeminjamanController');
Route::resource('pengembalian', 'PengembalianController');
Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');
Route::get('caripinjam', 'PeminjamanController@cari');
Route::get('caritransaksi', 'TransaksiController@cari');
Route::get('carikas', 'KasController@cari');
Route::get('carianggota', 'AnggotaController@cari');
Route::get('caripoktan', 'PoktanController@cari');
Route::get('caripengelola', 'PengelolaController@cari');
Route::get('caripengembalian', 'PengembalianController@cari');
