<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class koperasiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'koperasi'
    	 $koperasi = DB::table('koperasi')->get();
 
    	// mengirim data 'id_koperasi ke view index
    	return view('koperasi',[ 'koperasi' =>  $koperasi]);
 
    }
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah_koperasi');
    
    }

    // method untuk insert data ke table koperasi
    public function store(Request $request)
    {
        // insert data ke table koperasi
        DB::table('koperasi')->insert([
            'id_koperasi' => $request->id_koperasi,
            'nama_koperasi' => $request->nama_koperasi,
            'alamat' => $request->alamat,
            
        ]);
        // alihkan halaman ke halaman koperasi
        return redirect('/koperasi');
    
    }
    // method untuk edit data koperasi
    public function edit($id_koperasi)
    {
        // mengambil data koperasi berdasarkan id yang dipilih
        $koperasi = DB::table('koperasi')->where('id_koperasi',$id_koperasi)->get();
        // passing data koperasi yang didapat ke view edit.blade.php
        return view('edit_koperasi',['koperasi' => $koperasi]);
    
    }

    // update data koperasi
    public function update(Request $request)
    {
        // update data koperasi
        DB::table('koperasi')->where('id_koperasi',$request->id_koperasi)->update([
            'id_koperasi' => $request->id_koperasi,
            'nama_koperasi' => $request->nama_koperasi,
            'alamat' => $request->alamat,
            
        ]);
        // alihkan halaman ke halaman koperasi
        return redirect('/koperasi');
    }

    // method untuk hapus data koperasi
    public function hapus($id_koperasi)
    {
        // menghapus data koperasi berdasarkan id yang dipilih
        DB::table('koperasi')->where('id_koperasi',$id_koperasi)->delete();
            
        // alihkan halaman ke halaman koperasi
        return redirect('/koperasi');
    }
}
