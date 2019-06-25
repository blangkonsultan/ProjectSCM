<?php

namespace App\Http\Controllers\Petani;

use App\Helpers\Helper;
use App\Keranjang;
use App\Pemesanan;
use App\Pupuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PupukController extends Controller
{
    public function index(){
        $pupuks = Pupuk::get();
        return view('petani.lihat_pupuk', compact('pupuks'));
    }

    public function beli(Request $request){
        Keranjang::create([
            'id_user' => Auth::user()->id,
            'id_penjualan' => $request->id,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/petani/pupuk');
    }

    public function keranjang(){
        $keranjangs = Keranjang::with('penjualan')->where('id_user', Auth::user()->id)->get();
        foreach ($keranjangs as $keranjang){
            $keranjang->barang = Pupuk::find($keranjang->penjualan->id_barang);
            $keranjang->subtotal = $keranjang->barang->harga * $keranjang->jumlah;
        }
        return view('petani.keranjang', compact('keranjangs'));
    }

    public function hapusKeranjang($id){
        Keranjang::findOrFail($id)->delete();
        return redirect('/petani/keranjang');
    }

    public function beliKeranjang(){
        $keranjangs = Keranjang::with('penjualan')->where('id_user', Auth::user()->id)->get();
        $id_pemesanan = Helper::generateOrderId();
        foreach ($keranjangs as $keranjang){
            Pemesanan::create([
                'id_pemesanan' => $id_pemesanan,
                'id_user' => $keranjang->id_user,
                'id_penjualan' => $keranjang->id_penjualan,
                'tgl_pesan' => date('Y-m-d'),
                'id_status' => 1,
                'jumlah' => $keranjang->jumlah,
                'total_harga' => $keranjang->jumlah * $keranjang->penjualan->harga
            ]);
            $keranjang->delete();
        }
        return redirect()->back();
    }
}
