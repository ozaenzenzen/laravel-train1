<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get();
        $pegawai = DB::table('pegawai')->paginate(5);

        // mengirim data pegawai ke view index
        return view('/pegawai/index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        // return view('/blog/home');
        return view('/pegawai/tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // ambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('/pegawai/edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);

        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        //mengalihkan halaman
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
