<?php

namespace App\Http\Controllers\Supplier;

use App\BahanBaku;
use App\Pemesanan;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index(){
        $pemesanans = Pemesanan::with('penjualan', 'pembayarans', 'status')
            ->where('id_user', Auth::user()->id)
            ->get();
        foreach ($pemesanans as $pemesanan){
            $pemesanan->barang = BahanBaku::find($pemesanan->penjualan->id_barang);
        }
        return view('supplier.lihat_pemesanan', compact('pemesanans'));
    }

    public function cekLunas($id){
        Pemesanan::where('id_pemesanan', $id)->firstOrFail()->update([
            'id_status' => 3
        ]);

        return redirect()->back();
    }
}
