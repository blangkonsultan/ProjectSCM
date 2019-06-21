<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.lihat_pupuk');
    }

    public function showPenjadwalan(){
        return view('admin.penjadwalan');
    }

    public function showPemesanan(){
        return view('admin.pemesanan');
    }

    public function showPelanggan(){
        return view('admin.pelanggan');
    }
}
