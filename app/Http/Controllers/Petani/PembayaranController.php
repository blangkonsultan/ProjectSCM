<?php

namespace App\Http\Controllers\Petani;

use App\Pembayaran;
use App\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::with('pembayarans')
            ->where('id_user', Auth::user()->id)
            ->get()
            ->groupBy('id_pemesanan');

        foreach ($pemesanans as $id => $pemesanan_){
            $total = 0;
            foreach ($pemesanan_ as $p){
                $total += $p->total_harga;
            }
            foreach ($pemesanan_ as $p){
                $p->total = $total;
            }
        }

        return view('petani.pembayaran', compact('pemesanans'));
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

        return view('petani.detail_pembayaran', compact('pemesanans', 'pelanggan', 'total'));
    }

    public function bayar($id_pemesanan){
        $pemesanans = Pemesanan::where('id_pemesanan', $id_pemesanan)->get();
        $total = 0;
        foreach ($pemesanans as $pemesanan){
            $total += $pemesanan->total_harga;
        }
        return view('petani.tambah_pembayaran', compact('pemesanans', 'total'));
    }

    public function storeBayar(Request $request){
        $path = '/pembayaran';
        $file_content = $request->file('bukti');
        $file_path = '/uploads/' . Storage::disk('public_uploads')->put($path, $file_content);

        Pemesanan::where('id_pemesanan', $request->id)->update([
            'id_status' => 2
        ]);

        Pembayaran::create([
            'id_pemesanan' => $request->id,
            'nama' => $request->nama,
            'no_rek' => $request->no_rek,
            'tanggal_bayar' => date('Y-m-d'),
            'bukti' => $file_path
        ]);

        return redirect('/petani/pembayaran');
    }
}
