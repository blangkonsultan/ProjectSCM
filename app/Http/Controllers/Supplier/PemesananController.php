<?php

namespace App\Http\Controllers\Supplier;

use App\BahanBaku;
use App\Pemesanan;
use App\Penjualan;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index(){
        $pemesanans = Pemesanan::with('penjualan', 'pembayarans', 'status')
            ->where('id_user', User::where('id_level', 1)->first()->id)
            ->get();
        foreach ($pemesanans as $pemesanan){
            $pemesanan->barang = BahanBaku::find($pemesanan->penjualan->id_barang);
        }
        return view('supplier.lihat_pemesanan', compact('pemesanans'));
    }

    public function cekLunas($id){
        $pemesanan = Pemesanan::where('id_pemesanan', $id)->firstOrFail();

        $pemesanan->update([
            'id_status' => 3
        ]);

        $penjualan = Penjualan::find($pemesanan->id_penjualan);
        $bahan = BahanBaku::find($penjualan->id_barang);

        $bahan->update([
            'stock' => $bahan->stock + $pemesanan->jumlah
        ]);
        $penjualan->update([
            'stok' => $penjualan->stok - $pemesanan->jumlah
        ]);

        return redirect()->back();
    }
}
