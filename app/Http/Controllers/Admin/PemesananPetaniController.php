<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use App\Pemesanan;
use App\Penjualan;
use App\Pupuk;
use Illuminate\Http\Request;

class PemesananPetaniController extends Controller
{
    public function index(){
        $pemesanans = Pemesanan::with('penjualan', 'user', 'status')
            ->whereHas('penjualan', function($q){
                $q->where('id_jenis', 2);
            })
            ->get()->groupBy('id_pemesanan');

        foreach ($pemesanans as $id => $pemesanan_){
            $total = 0;
            foreach ($pemesanan_ as $p){
                $total += $p->total_harga;
            }
            foreach ($pemesanan_ as $p){
                $p->total = $total;
            }
        }

        return view('admin.lihat_pemesanan_pelanggan', compact('pemesanans'));
    }

    public function detail($id_pemesanan){
        $pemesanans = Pemesanan::with('user', 'penjualan', 'status', 'pembayarans')
            ->where('id_pemesanan', $id_pemesanan)
            ->get()
            ->groupBy('id_pemesanan');
        $pelanggan = $pemesanans->first()[0]->user;
        $total = 0;
        foreach ($pemesanans->first() as $pemesanan){
            $total += $pemesanan->total_harga;
        }

        return view('admin.lihat_detail_pemesanan_pelanggan', compact('pemesanans', 'pelanggan', 'total'));
    }

    public function updateStatus($id, $status){
        $pemesanans = Pemesanan::with('penjualan')->where('id_pemesanan', $id)->get();
        Pemesanan::where('id_pemesanan', $id)->update([
            'id_status' => $status
        ]);

        foreach ($pemesanans as $pemesanan){
            $pupuk = Pupuk::find($pemesanan->penjualan->id_barang);
            $pupuk->update([
                'stok' => $pupuk->stock - $pemesanan->jumlah
            ]);
            Penjualan::find($pemesanan->id_penjualan)->update([
                'stock' => $pupuk->stock - $pemesanan->jumlah
            ]);
        }

        return redirect('/admin/pemesanan-pelanggan');
    }
}
