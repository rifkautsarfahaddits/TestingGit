<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'buku'
    	 $buku = DB::table('buku')->get();
 
    	// mengirim data 'buku ke view index
    	return view('Buku',[ 'buku' =>  $buku]);

    }
    public function tambah_Buku()
    {
    
        // memanggil view tambah
        return view('tambah_Buku');
    
    }

    // method untuk insert data ke table buku
    public function store(Request $request)
    {
        // insert data ke table buku
        DB::table('buku')->insert([
            'nama_buku' => $request->nama_buku,
            'jenis_buku' => $request->jenis_buku,
            'stok_buku' => $request->stok_buku,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);
        // alihkan halaman ke halaman buku
        return redirect('/Buku');
    
    }
    // method untuk edit data buku
    public function edit($Id_buku)
    {
        // mengambil data buku berdasarkan id yang dipilih
        $buku = DB::table('buku')->where('Id_buku',$Id_buku)->get();
        // passing data buku yang didapat ke view edit.blade.php
        return view('edit_Buku',['buku' => $buku]);
    
    }

    // update data buku
    public function update(Request $request)
    {
        // update data buku
        DB::table('buku')->where('id_buku',$request->id_buku)->update([
            'nama_buku' => $request->nama_buku,
            'jenis_buku' => $request->jenis_buku,
            'stok_buku' => $request->stok_buku,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);
        // alihkan halaman ke halaman buku
        return redirect('/Buku');
    }

    // method untuk hapus data buku
    public function hapus($id_buku)
    {
        // menghapus data buku berdasarkan id yang dipilih
        DB::table('buku')->where('id_buku',$id_buku)->delete();
            
        // alihkan halaman ke halaman buku
        return redirect('/Buku');
    }
    
}
