<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        // return "Test function index in Dosen Controller";
        $nama = "Fauzan Akmal Mahdi";
        $arrayNama = ["Fauzan", "Cahyo", "Dinda", "Irham", "Verina", "Oca"];
        return view('biodata', ['nama' => $nama, 'arrayNama' => $arrayNama]);
    }
}
