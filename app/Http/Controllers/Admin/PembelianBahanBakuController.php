<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
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
            ->where('id_jenis', 1)
            ->get();
        foreach ($penjualans as $penjualan){
            $penjualan->barang = BahanBaku::findOrFail($penjualan->id_barang);
        }
        return view('admin.lihat_pembelian_bahan_baku', compact('penjualans'));
    }

    public function store(Request $request){
        $penjualan = Penjualan::findOrFail($request->id);
        $id_pemesanan = Helper::generateOrderId();

        Pemesanan::create([
            'id_user' => Auth::user()->id,
            'id_penjualan' => $penjualan->id,
            'tgl_pesan' => date('Y-m-d'),
            'id_pemesanan' => $id_pemesanan,
            'id_status' => 1,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->jumlah * $penjualan->harga
        ]);
        return redirect('/admin/riwayat-pemesanan');
    }
}
