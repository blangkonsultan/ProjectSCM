<?php

namespace App\Http\Controllers\Supplier;

use App\BahanBaku;
use App\Penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
    public function index(){
        $penjualans = Penjualan::where('id_user', Auth::user()->id)
            ->where('id_jenis', 1)
            ->get();
        foreach ($penjualans as $penjualan){
            $penjualan->barang = BahanBaku::find($penjualan->id_barang);
        }
        return view('supplier.lihat_penjualan', compact('penjualans'));
    }

    public function tambah(){
        $bahans = BahanBaku::get();
        return view('supplier.tambah_penjualan', compact('bahans'));
    }

    public function store(Request $request){
        Penjualan::create([
            'id_user' => Auth::user()->id,
            'id_jenis' => 1,
            'id_barang' => $request->id_bahan,
            'stok' => $request->stock,
            'harga' => $request->harga
        ]);
        return redirect('/supplier/penjualan');
    }

    public function edit($id){
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->barang = BahanBaku::find($penjualan->id_barang);
        return view('supplier.edit_penjualan', compact('penjualan'));
    }

    public function update(Request $request){
        Penjualan::findOrFail($request->id)->update($request->all());
        return redirect('/supplier/penjualan');
    }
}
