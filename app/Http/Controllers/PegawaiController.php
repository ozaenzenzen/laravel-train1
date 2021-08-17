<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->get();

        // mengirim data pegawai ke view index
        return view('/pegawai/index', ['pegawai'=>$pegawai]);
    }

    public function tambah(){
        // return view('/blog/home');
        return view('/pegawai/tambah');
    }

    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama'=>$request->nama,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_umur'=>$request->umur,
            'pegawai_alamat'=>$request->alamat,
        ]);

        return redirect('/pegawai');
    }

    public function formulir()
    {
        return view('formulir');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : " . $nama . ", Alamat : " . $alamat;
    }
}
