<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class kategori_irfanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'barang'
    	 $kategori_irfan = DB::table('kategori_irfan')->get();
 
    	// mengirim data 'barang ke view index
    	return view('kategori_irfan',[ 'kategori_irfan' =>  $kategori_irfan]);
 
    }
    
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah_kategori_irfan');
    
    }

    // method untuk insert data ke table barang
    public function store(Request $request)
    {
        // insert data ke table barang
        DB::table('kategori_irfan')->insert([
            'IDKategori' => $request->IDKategori,
            'NamaKategori' => $request->NamaKategori,
            'IDBuku' => $request->IDBuku,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/kategori_irfan');
    
    }
    // method untuk edit data barang
    public function edit($IDKategori)
    {
        // mengambil data barang berdasarkan id yang dipilih
        $kategori_irfan = DB::table('kategori_irfan')->where('IDKategori',$IDKategori)->get();
        // passing data barang yang didapat ke view edit.blade.php
        return view('edit_kategori_irfan',['kategori_irfan' => $kategori_irfan]);
    
    }

    // update data barang
    public function update(Request $request)
    {
        // update data barang
        DB::table('IDKategori')->where('IDKategori',$request->IDKategori)->update([
            'IDKategori' => $request->IDKategori,
            'NamaKategori' => $request->NamaKategori,
            'IDBuku' => $request->IDBuku,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/kategori_irfan');
    }

    // method untuk hapus data barang
    public function hapus($IDKategori)
    {
        // menghapus data barang berdasarkan id yang dipilih
        DB::table('kategori_irfan')->where('IDKategori',$IDKategori)->delete();
            
        // alihkan halaman ke halaman barang
        return redirect('/kategori_irfan');
    }
    
    
}
