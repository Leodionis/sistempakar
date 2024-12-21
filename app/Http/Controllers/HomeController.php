<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Dokter;
use App\Penyakit;
use App\Gejala;
use App\Pengetahuan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = Admin::count();
        $dokter = Dokter::count();
        $penyakit = Penyakit::count();
        $gejala = Gejala::count();
        $pengetahuan = Pengetahuan::count();

        return view('admin.home', compact('admin','dokter','penyakit','gejala','pengetahuan'));
    }
}
