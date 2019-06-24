<?php

namespace App\Http\Controllers;

use App\BahanBaku;
use App\Pembayaran;
use App\Pemesanan;
use App\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PemesananAdminController extends Controller
{
    public function index(){
        $pemesanans = Pemesanan::with('penjualan.user', 'status', 'user')->where('id_user', Auth::user()->id)->get();
        foreach ($pemesanans as $pemesanan){
            if($pemesanan->penjualan->id_jenis == 1){
                $pemesanan->barang = BahanBaku::findOrFail($pemesanan->penjualan->id_barang);
            } else {
                $pemesanan->barang = Pupuk::findOrFail($pemesanan->penjualan->id_barang);
            }
        }
        return view('admin.lihat_pemesanan', compact('pemesanans'));
    }

    public function bayar($id){
        $pemesanan = Pemesanan::findOrFail($id);
        if($pemesanan->id_status != 1){
            return redirect()->back();
        }
        return view('admin.tambah_pembayaran', compact('pemesanan'));
    }

    public function storeBayar(Request $request){
        $path = '/pembayaran';
        $file_content = $request->file('bukti');
        $file_path = '/uploads/' . Storage::disk('public_uploads')->put($path, $file_content);

        Pemesanan::findOrFail($request->id)->update([
            'id_status' => 2
        ]);

        Pembayaran::create([
            'id_pemesanan' => $request->id,
            'nama' => $request->nama,
            'no_rek' => $request->no_rek,
            'tanggal_bayar' => date('Y-m-d'),
            'bukti' => $file_path
        ]);

        return redirect('/admin/riwayat-pemesanan');
    }

    public function destroy($id){
        $pemesanan = Pemesanan::findOrFail($id)->delete();
        if($pemesanan->id_status != 1){
            return redirect()->back();
        }
        return redirect('/admin/riwayat-pemesanan');
    }

    public function detail($id){
        $pembayaran = Pembayaran::with('pemesanan')->findOrFail($id);
        if($pembayaran->id_status == 1){
            return redirect()->back();
        }
        return view('admin.detail_pembayaran', compact('pembayaran'));
    }
}
