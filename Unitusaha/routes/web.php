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

Route::get('/usaha', function () {
    return view('usaha');
});

Route::get('/tambah', function () {
    return view('tambah');
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


Route::get('/Barang', function () {
    return view('Barang');
});

Route::get('/tambah_barang', function () {
    return view('tambah_barang');
});


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