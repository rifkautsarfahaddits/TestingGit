<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'barang'
    	 $kategori_zami = DB::table('kategori_zami')->get();
 
    	// mengirim data 'barang ke view index
    	return view('kategori_zami',[ 'kategori_zami' =>  $kategori_zami]);

    }
    public function tambahkategori_zami()
    {
    
        // memanggil view tambah
        return view('tambahbkategori_zami');
    
    }

    // method untuk insert data ke table barang
    public function store(Request $request)
    {
        // insert data ke table barang
        DB::table('kategori_zami')->insert([
            'IDKategori' => $request->IDKategori,
            'NamaKategori' => $request->NamaKategori,
            'IDBuku' => $request->IDBuku,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/kategori_zami');
    
    }
    // method untuk edit data barang
    public function edit($IDKategori)
    {
        // mengambil data barang berdasarkan id yang dipilih
        $barang = DB::table('kategori_zami')->where('IDKategori',$IDKategori)->get();
        // passing data barang yang didapat ke view edit.blade.php
        return view('edit_kategori_zami',['kategori_zami' => $kategori_zami]);
    
    }

    // update data barang
    public function update(Request $request)
    {
        // update data barang
        DB::table('kategori_zami')->where('IDKategori',$request->IDKategori)->update([
            'NamaKategori' => $request->NamaKategori,
            'IDBuku' => $request->IDBuku,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/kategori_zami');
    }

    // method untuk hapus data barang
    public function hapus($IDKategori)
    {
        // menghapus data barang berdasarkan id yang dipilih
        DB::table('kategori_zami')->where('IDKategori',$IDKategori)->delete();
            
        // alihkan halaman ke halaman barang
        return redirect('/kategori_zami');
    }
    
}
