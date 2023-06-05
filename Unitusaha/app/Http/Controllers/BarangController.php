<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'barang'
    	 $barang = DB::table('barang')->get();
 
    	// mengirim data 'barang ke view index
    	return view('Barang',[ 'barang' =>  $barang]);

    }
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table barang
    public function store(Request $request)
    {
        // insert data ke table barang
        DB::table('barang')->insert([
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'stok_barang' => $request->stok_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/Barang');
    
    }
    // method untuk edit data barang
    public function edit($Id_barang)
    {
        // mengambil data barang berdasarkan id yang dipilih
        $barang = DB::table('barang')->where('Id_barang',$Id_barang)->get();
        // passing data barang yang didapat ke view edit.blade.php
        return view('edit_Barang',['barang' => $barang]);
    
    }

    // update data barang
    public function update(Request $request)
    {
        // update data barang
        DB::table('barang')->where('id_barang',$request->id_barang)->update([
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'stok_barang' => $request->stok_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/Barang');
    }

    // method untuk hapus data barang
    public function hapus($id_barang)
    {
        // menghapus data barang berdasarkan id yang dipilih
        DB::table('barang')->where('id_barang',$id_barang)->delete();
            
        // alihkan halaman ke halaman barang
        return redirect('/Barang');
    }
    
}
