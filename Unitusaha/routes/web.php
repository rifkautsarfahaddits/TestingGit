<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

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
//     return view('base');
// }); //RECHECK

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

Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('/tambah_anggota', function () {
    return view('tambah_anggota');
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
Route::get('/penjualan/hapus/{id_penjualan}', [App\Http\Controllers\PenjualanController::class, 'hapus']);

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

Route::get('/anggota', [App\Http\Controllers\anggotaController::class, 'index']);
Route::get('/anggota/tambah',[App\Http\Controllers\anggotaController::class, 'tambah']);
Route::post('/anggota/store',[App\Http\Controllers\anggotaController::class, 'store']);
Route::get('/anggota/edit/{id_anggota}',[App\Http\Controllers\anggotaController::class, 'edit']);
Route::post('/anggota/update',[App\Http\Controllers\anggotaController::class, 'update']);
Route::get('/anggota/hapus/{id_anggota}',[App\Http\Controllers\anggotaController::class, 'hapus']);


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



