<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'barang'
    	 $penjualan = DB::table('penjualan')->get();
 
    	// mengirim data 'barang ke view index
    	return view('penjualan',[ 'penjualan' =>  $penjualan]);
 
    }
    
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah_penjualan');
    
    }

    // method untuk insert data ke table barang
    public function store(Request $request)
    {
        // insert data ke table barang
        DB::table('penjualan')->insert([
            'id_penjualan' => $request->id_penjualan,
            'tgl_penjualan' => $request->tgl_penjualan,
            'id_barang' => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_jual'  => $request->harga_jual,
            'total_penjualan' => $request->total_penjualan,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/penjualan');
    
    }
    // method untuk edit data barang
    public function edit($id_penjualan)
    {
        // mengambil data barang berdasarkan id yang dipilih
        $penjualan = DB::table('penjualan')->where('id_penjualan',$id_penjualan)->get();
        // passing data barang yang didapat ke view edit.blade.php
        return view('edit_penjualan',['penjualan' => $penjualan]);
    
    }

    // update data barang
    public function update(Request $request)
    {
        // update data barang
        DB::table('penjualang')->where('id_penjualan',$request->id_penjualan)->update([
            'id_penjualan' => $request->id_penjualan,
            'tgl_penjualan' => $request->tgl_penjualan,
            'id_barang' => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_jual' => $request->harga_jual,
            'total_penjualan' => $request->total_penjualan,
        ]);
        // alihkan halaman ke halaman barang
        return redirect('/penjualan');
    }

    // method untuk hapus data barang
    public function hapus($id_penjualan)
    {
        // menghapus data barang berdasarkan id yang dipilih
        DB::table('penjualan')->where('id_penjualan',$id_penjualan)->delete();
            
        // alihkan halaman ke halaman barang
        return redirect('/penjualan');
    }
    
}

