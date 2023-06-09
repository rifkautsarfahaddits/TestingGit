<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class buku_irfanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'barang'
    	 $buku_irfan = DB::table('buku_irfan')->get();
 
    	// mengirim data 'barang ke view index
    	return view('buku_irfan',[ 'buku_irfan' =>  $buku_irfan]);
 
    }
    
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah_buku_irfan');
    
    }

    // method untuk insert data ke table barang
    public function store(Request $request)
    {
        // insert data ke table barang
        DB::table('buku_irfan')->insert([
            'IDBuku' => $request->IDBuku,
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit'  => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/buku_irfan');
    
    }
    // method untuk edit data barang
    public function edit($IDBuku)
    {
        // mengambil data barang berdasarkan id yang dipilih
        $buku_irfan = DB::table('buku_irfan')->where('IDBuku',$IDBuku)->get();
        // passing data barang yang didapat ke view edit.blade.php
        return view('edit_buku_irfan',['buku_irfan' => $buku_irfan]);
    
    }

    // update data barang
    public function update(Request $request)
    {
        // update data barang
        DB::table('IDBuku')->where('IDBuku',$request->IDBuku)->update([
            'IDBuku' => $request->IDBuku,
            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit'  => $request->TahunTerbit,
            'JumlahStok' => $request->JumlahStok,
            'dendabuku' => $request->dendabuku,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/buku_irfan');
    }

    // method untuk hapus data barang
    public function hapus($IDBuku)
    {
        // menghapus data barang berdasarkan id yang dipilih
        DB::table('buku_irfan')->where('IDBuku',$IDBuku)->delete();
            
        // alihkan halaman ke halaman barang
        return redirect('/buku_irfan');
    }
    
    
}
