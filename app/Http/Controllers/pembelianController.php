<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class pembelianController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'usaha'
    	 $pembelian = DB::table('pembelian')->get();
 
    	// mengirim data 'usaha ke view index
    	return view('pembelian',[ 'pembelian' =>  $pembelian]);
 
    }
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah_pembelian');
    
    }

    // method untuk insert data ke table pembel$pembelian
    public function store(Request $request)
    {
        // insert data ke table usaha
        DB::table('pembelian')->insert([
            'id_pembelian' => $request->id_pembelian,
            'tgl_pembelian' => $request->tgl_pembelian,
            'id_supplier' => $request->id_supplier,
            'id_barang' => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_beli' => $request->harga_beli,
            'total_pembelian' => $request->total_pembelian,
        ]);
        // alihkan halaman ke halaman usaha
        return redirect('/pembelian');
    
    }
    // method untuk edit data usaha
    public function edit($id_pembelian)
    {
        // mengambil data usaha berdasarkan id yang dipilih
        $pembelian = DB::table('pembelian')->where('id_pembelian',$id_pembelian)->get();
        // passing data usaha yang didapat ke view edit.blade.php
        return view('edit_pembelian',['pembelian' => $pembelian]);
    
    }

    // update data usaha
    public function update(Request $request)
    {
        // update data usaha
        DB::table('pembelian')->where('id_pembelian',$request->id_pembelian)->update([
            'id_pembelian' => $request->id_pembelian,
            'tgl_pembelian' => $request->tgl_pembelian,
            'id_supplier' => $request->id_supplier,
            'id_barang' => $request->id_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_beli' => $request->harga_beli,
            'total_pembelian' => $request->total_pembelian,
        ]);
        // alihkan halaman ke halaman usaha
        return redirect('/pembelian');
    }

    // method untuk hapus data usaha
    public function hapus($id_pembelian)
    {
        // menghapus data usaha berdasarkan id yang dipilih
        DB::table('pembelian')->where('id_pembelian',$id_pembelian)->delete();
            
        // alihkan halaman ke halaman usaha
        return redirect('/pembelian');
    }
}
