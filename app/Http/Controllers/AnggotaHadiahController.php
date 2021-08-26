<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Hadiah;
use Illuminate\Http\Request;

class AnggotaHadiahController extends Controller
{
    public function index()
    {
        $anggota = Anggota::get();
        return view('/hadiah_anggota/anggota', ['anggota' => $anggota]);
    }
}
