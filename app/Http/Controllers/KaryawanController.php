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
}
