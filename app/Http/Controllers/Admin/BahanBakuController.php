<?php

namespace App\Http\Controllers;

use App\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function index(){
        $bahans = BahanBaku::get();
        return view('admin.lihat_bahan_baku', compact('bahans'));
    }

    public function create(){
        return view('admin.tambah_bahan_baku');
    }

    public function store(Request $request){
        BahanBaku::create($request->all());
        return redirect('/admin/bahan-baku');
    }

    public function destroy($id){
        $bahan = BahanBaku::findOrFail($id)->update([
            'stock' => 0
        ]);

        return redirect('/admin/bahan-baku');
    }
}
