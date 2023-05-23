<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UnitusahaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table 'usaha'
    	 $usaha = DB::table('usaha')->get();
 
    	// mengirim data 'usaha ke view index
    	return view('UnitUsaha',[ 'usaha' =>  $usaha]);
 
    }
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table usaha
    public function store(Request $request)
    {
        // insert data ke table usaha
        DB::table('usaha')->insert([
            'id_usaha' => $request->id_usaha,
            'nama_usaha' => $request->nama_usaha,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jenis_usaha' => $request->jenis_usaha,
            
        ]);
        // alihkan halaman ke halaman usaha
        return redirect('/UnitUsaha');
    
    }
    // method untuk edit data usaha
    public function edit($id_usaha)
    {
        // mengambil data usaha berdasarkan id yang dipilih
        $usaha = DB::table('usaha')->where('id_usaha',$id_usaha)->get();
        // passing data koperasi yang didapat ke view edit.blade.php
        return view('edit',['usaha' => $usaha]);
    
    }

    // update data usaha
    public function update(Request $request)
    {
        // update data usaha
        DB::table('usaha')->where('id_usaha',$request->id_usaha)->update([
            'nama_usaha' => $request->nama_usaha,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jenis_usaha' => $request->jenis_usaha,
            
        ]);
        // alihkan halaman ke halaman usaha
        return redirect('/UnitUsaha');
    }

    // method untuk hapus data usaha
    public function hapus($id_usaha)
    {
        // menghapus data usaha berdasarkan id yang dipilih
        DB::table('usaha')->where('id_usaha',$id_usaha)->delete();
            
        // alihkan halaman ke halaman usaha
        return redirect('/UnitUsaha');
    }
}
