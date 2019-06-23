<?php

namespace App\Http\Controllers;

use App\Penjualan;
use Illuminate\Http\Request;

class PembelianBahanBakuController extends Controller
{
    public function index(){
        $penjualans = Penjualan::with('user', 'bahanBaku')->get();
        return view('admin.lihat_pembelian_bahan_baku', compact('penjualans'));
    }
}
