<?php

namespace App\Http\Controllers;
use App\Dokter;
use App\Gejala;
use App\Penyakit;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('pengguna.index');
    }
    public function Dokter()
    {
        $dokter = Dokter::all();
        return view('pengguna.dokter', compact('dokter'));
        
    }
    public function Gejala()
    {
        $gejala = Gejala::all();
        return view('pengguna.gejala', compact('gejala'));
    }
    public function Penyakit()
    {
        $penyakit = Penyakit::all();
        return view('pengguna.penyakit', compact('penyakit'));
    }
}
