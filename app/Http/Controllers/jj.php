<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UnitUsahaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table Surat
    	$Surat = DB::table('Surat')->get();
 
    	// mengirim data Surat ke view index
    	return view('UnitUsaha',['Surat' => $Surat]);
 
    }
    
    // method untuk menampilkan view form tambah Surat
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table Surat
    public function store(Request $request)
    {
        // insert data ke table Surat
        DB::table('Surat')->insert([
            'Id_Surat' => $request->Id_Surat,
            'Jenis_Surat' => $request->Jenis_Surat,
            'Desc_Surat' => $request->Desc_Surat,
            'Jenis_Tabungan' => $request->Jenis_Tabungan,
            'Jenis_Simpanan' => $request->Jenis_Simpanan,
            'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman Surat
        return redirect('/Surat');
    
    }

    // method untuk edit data Surat
    public function edit($Id_Surat)
    {
        // mengambil data Surat berdasarkan id yang dipilih
        $Surat = DB::table('Surat')->where('Id_Surat',$Id_Surat)->get();
        // passing data Surat yang didapat ke view edit.blade.php
        return view('edit',['Surat' => $Surat]);
    
    }

    // update data Surat
    public function update(Request $request)
    {
        // update data Surat
        DB::table('Surat')->where('Id_Surat',$request->Id_Surat)->update([
            'Jenis_Surat' => $request->Jenis_Surat,
            'Desc_Surat' => $request->Desc_Surat,
            'Jenis_Tabungan' => $request->Jenis_Tabungan,
            'Jenis_Simpanan' => $request->Jenis_Simpanan,
            'Status' => $request->Status,
        ]);
        // alihkan halaman ke halaman Surat
        return redirect('/Surat');
    }

    // method untuk hapus data Surat
    public function hapus($Id_Surat)
    {
        // menghapus data Surat berdasarkan id yang dipilih
        DB::table('Surat')->where('Id_surat',$Id_Surat)->delete();
            
        // alihkan halaman ke halaman Surat
        return redirect('/Surat');
    }
}
