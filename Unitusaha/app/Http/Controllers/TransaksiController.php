<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'transaksi'
    	 $transaksi = DB::table('transaksi')->get();
 
    	// mengirim data 'transaksi ke view index
    	return view('transaksi',[ 'transaksi' =>  $transaksi]);
 
    }
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambaht');
    
    }

    // method untuk insert data ke table transaksi
    public function store(Request $request)
    {
        // insert data ke table transaksi
        DB::table('transaksi')->insert([
            'id_transaksi' => $request->id_transaksi,
            'tgl_transaksi' => $request->tgl_transaksi,
            'jenis_transaksi' => $request->jenis_transaksi,
            'id_anggota' => $request->id_anggota,
            'id_usaha' => $request->id_usaha,
            'nominal' => $request->nominal,
        ]);
        // alihkan halaman ke halaman transaksi
        return redirect('/transaksi');
    
    }
    // method untuk edit data transaksi
    public function editt($Id_transaksi)
    {
        // mengambil data transaksi berdasarkan id yang dipilih
        $transaksi = DB::table('transaksi')->where('Id_transaksi',$Id_transaksi)->get();
        // passing data transaksi yang didapat ke view edit.blade.php
        return view('editt',['transaksi' => $transaksi]);
    
    }

    // update data transaksi
    public function update(Request $request)
    {
        // update data transaksi
        DB::table('transaksi')->where('id_transaksi',$request->id_transaksi)->update([
            'id_transaksi' => $request->id_transaksi,
            'tgl_transaksi' => $request->tgl_transaksi,
            'jenis_transaksi' => $request->jenis_transaksi,
            'id_anggota' => $request->id_anggota,
            'id_usaha' => $request->id_usaha,
            'nominal' => $request->nominal,
        ]);
        // alihkan halaman ke halaman transaksi
        return redirect('/transaksi');
    }

    // method untuk hapus data transaksi
    public function hapus($id_transaksi)
    {
        // menghapus data transaksi berdasarkan id yang dipilih
        DB::table('transaksi')->where('id_transaksi',$id_transaksi)->delete();
            
        // alihkan halaman ke halaman transaksi
        return redirect('/transaksi');
    }
}

