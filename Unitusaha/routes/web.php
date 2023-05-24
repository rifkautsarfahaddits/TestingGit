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
    return view('base');
});

Route::get('/usaha', function () {
    return view('usaha');
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/penjualan', function () {
    return view('penjualan');
});

Route::get('/tambah_penjualan', function () {
    return view('tambah_penjualan');
});

Route::get('/UnitUsaha', function () {
    return view('UnitUsaha');
});

Route::get('/koperasi', function () {
    return view('koperasi');
});

Route::get('/tambah_koperasi', function () {
    return view('tambah_koperasi');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/tambaht', function () {
    return view('tambaht');
});

Route::get('/Barang', function () {
    return view('Barang');
});

Route::get('/tambah_barang', function () {
    return view('tambah_barang');
});

Route::get('/pembelian', function () {
    return view('pembelian');
});

Route::get('/tambah_pembelian', function () {
    return view('tambah_pembelian');
});

//Route::get('/penjualan', 'App\Http\Controllers\PenjualanController@index');

Route::get('/penjualan', [App\Http\Controllers\PenjualanController::class, 'index']);
Route::get('/penjualan/tambah', [App\Http\Controllers\PenjualanController::class, 'tambah']);
Route::post('/penjualan/store', [App\Http\Controllers\PenjualanController::class, 'store']);
Route::get('/penjualan/edit', [App\Http\Controllers\PenjualanController::class, 'edit']);
Route::post('/penjualan/update', [App\Http\Controllers\PenjualanController::class, 'update']);
Route::get('/penjualan/hapus', [App\Http\Controllers\PenjualanController::class, 'hapus']);

Route::get('/UnitUsaha', 'App\Http\Controllers\usahaController@index');
Route::get('/UnitUsaha/tambah','App\Http\Controllers\usahaController@tambah');
Route::post('/UnitUsaha/store','App\Http\Controllers\usahaController@store');
Route::get('/UnitUsaha/edit/{id_usaha}','App\Http\Controllers\usahaController@edit');
Route::post('/UnitUsaha/update','App\Http\Controllers\usahaController@update');
Route::get('/UnitUsaha/hapus/{id_usaha}','App\Http\Controllers\usahaController@hapus');

Route::get('/UnitUsaha', [App\Http\Controllers\UnitUsahaController::class, 'index']);
Route::get('/UnitUsaha/tambah',[App\Http\Controllers\UnitUsahaController::class, 'tambah']);
Route::post('/UnitUsaha/store',[App\Http\Controllers\UnitUsahaController::class, 'store']);
Route::get('/UnitUsaha/edit/{id_usaha}',[App\Http\Controllers\UnitUsahaController::class, 'edit']);
Route::post('/UnitUsaha/update',[App\Http\Controllers\UnitUsahaController::class, 'update']);
Route::get('/UnitUsaha/hapus/{id_usaha}',[App\Http\Controllers\UnitUsahaController::class, 'hapus']);

Route::get('/koperasi', [App\Http\Controllers\koperasiController::class, 'index']);
Route::get('/koperasi/tambah',[App\Http\Controllers\koperasiController::class, 'tambah']);
Route::post('/koperasi/store',[App\Http\Controllers\koperasiController::class, 'store']);
Route::get('/koperasi/edit/{id_koperasi}',[App\Http\Controllers\koperasiController::class, 'edit']);
Route::post('/koperasi/update',[App\Http\Controllers\koperasiController::class, 'update']);
Route::get('/koperasi/hapus/{id_koperasi}',[App\Http\Controllers\koperasiController::class, 'hapus']);


Route::get('/Barang', [App\Http\Controllers\BarangController::class, 'index']);
Route::get('/Barang/tambah',[App\Http\Controllers\BarangController::class, 'tambah']);
Route::post('/Barang/store',[App\Http\Controllers\BarangController::class, 'store']);
Route::get('/Barang/edit/{id_koperasi}',[App\Http\Controllers\BarangController::class, 'edit']);
Route::post('/Barang/update',[App\Http\Controllers\BarangController::class, 'update']);
Route::get('/Barang/hapus/{id_koperasi}',[App\Http\Controllers\BarangController::class, 'hapus']);
Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/tambaht',[App\Http\Controllers\TransaksiController::class, 'tambaht']);
Route::post('/transaksi/store',[App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/editt/{id_transaksi}',[App\Http\Controllers\TransaksiController::class, 'editt']);
Route::post('/transaksi/update',[App\Http\Controllers\TransaksiController::class, 'update']);
Route::get('/transaksi/hapus/{id_transaksi}',[App\Http\Controllers\TransaksiController::class, 'hapus']);

Route::get('/pembelian', [App\Http\Controllers\pembelianController::class, 'index']);
Route::get('/pembelian/tambah',[App\Http\Controllers\pembelianController::class, 'tambah']);
Route::post('/pembelian/store',[App\Http\Controllers\pembelianController::class, 'store']);
Route::get('/pembelian/edit/{id_pembelian}',[App\Http\Controllers\pembelianController::class, 'edit']);
Route::post('/pembelian/update',[App\Http\Controllers\pembelianController::class, 'update']);
Route::get('/pembelian/hapus/{id_pembelian}',[App\Http\Controllers\pembelianController::class, 'hapus']);

