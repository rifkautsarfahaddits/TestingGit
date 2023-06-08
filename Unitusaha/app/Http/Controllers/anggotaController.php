<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'barang'
    	 $anggota = DB::table('anggota')->get();
 
    	// mengirim data 'barang ke view index
    	return view('anggota',[ 'anggota' =>  $anggota]);
 
    }
    
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah_anggota');
    
    }

    // method untuk insert data ke table barang
    public function store(Request $request)
    {
        // insert data ke table barang
        DB::table('anggota')->insert([
            'id_anggota' => $request->id_anggota,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email'  => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/anggota');
    
    }
    // method untuk edit data barang
    public function edit($id_anggota)
    {
        // mengambil data barang berdasarkan id yang dipilih
        $anggota = DB::table('anggota')->where('id_anggota',$id_anggota)->get();
        // passing data barang yang didapat ke view edit.blade.php
        return view('edit_anggota',['anggota' => $anggota]);
    
    }

    // update data barang
    public function update(Request $request)
    {
        // update data barang
        DB::table('anggota')->where('id_anggota',$request->id_anggota)->update([
            'id_anggota' => $request->id_anggota,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email'  => $request->email,
            'Jenis_Kelamin' => $request->Jenis_Kelamin,
            'status' => $request->status,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/anggota');
    }

    // method untuk hapus data barang
    public function hapus($id_Anggota)
    {
        // menghapus data barang berdasarkan id yang dipilih
        DB::table('anggota')->where('id_anggota',$id_anggota)->delete();
            
        // alihkan halaman ke halaman barang
        return redirect('/anggota');
    }
    
    
}
