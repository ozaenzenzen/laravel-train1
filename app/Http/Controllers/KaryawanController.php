<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        // mengambil data karyawan
        // $karyawan = Karyawan::all();
        $karyawan = Karyawan::paginate(10);
        // $karyawan = Karyawan::where('id', '<', 30)->get();

        return view('/karyawan/index', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('/karyawan/tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        Karyawan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('/karyawan/edit', ['karyawan' => $karyawan]);
    }
}
