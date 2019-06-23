<?php

namespace App\Http\Controllers;

use App\BahanBaku;
use App\Pemesanan;
use App\Penjualan;
use App\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembelianBahanBakuController extends Controller
{
    public function index(){
        $penjualans = Penjualan::with('user')
            ->get();
        foreach ($penjualans as $penjualan){
            if($penjualan->id_jenis){
                $penjualan->barang = BahanBaku::findOrFail($penjualan->id_barang);
            } else {
                $penjualan->barang = Pupuk::findOrFail($penjualan->id_barang);
            }
        }
        return view('admin.lihat_pembelian_bahan_baku', compact('penjualans'));
    }

    public function store(Request $request){
        $penjualan = Penjualan::findOrFail($request->id);

        Pemesanan::create([
            'id_user' => Auth::user()->id,
            'id_penjualan' => $penjualan->id,
            'tgl_pesan' => date('Y-m-d'),
            'id_status' => 1,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->jumlah * $penjualan->harga
        ]);
        return redirect('/admin/pemesanan');
    }
}
