<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class buku_zamiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'barang'
    	 $buku_zami = DB::table('buku_zami')->get();
 
    	// mengirim data 'barang ke view index
    	return view('buku_zami',[ 'buku_zami' =>  $buku_zami]);

    }
    public function tambahbuku_zami()
    {
    
        // memanggil view tambah
        return view('tambah_buku_zami');
    
    }

    // method untuk insert data ke table barang
    public function store(Request $request)
    {
        // insert data ke table barang
        DB::table('buku_zami')->insert([
            'IDBuku' => $request->IDBuku,
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/buku_zami');
    
    }
    // method untuk edit data barang
    public function edit($IDBuku)
    {
        // mengambil data barang berdasarkan id yang dipilih
        $barang = DB::table('buku_zami')->where('IDBuku',$IDBuku)->get();
        // passing data barang yang didapat ke view edit.blade.php
        return view('edit_buku_zami',['buku_zami' => $buku_zami]);
    
    }

    // update data barang
    public function update(Request $request)
    {
        // update data barang
        DB::table('buku_zami')->where('IDBuku',$request->IDBuku)->update([
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/buku_zami');
    }

    // method untuk hapus data barang
    public function hapus($IDBuku)
    {
        // menghapus data barang berdasarkan id yang dipilih
        DB::table('buku_zami')->where('IDBuku',$IDBuku)->delete();
            
        // alihkan halaman ke halaman barang
        return redirect('/buku_zami');
    }
    
}
