<?php

namespace App\Http\Controllers;

use App\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PupukController extends Controller
{
    public function index(){
        $pupuks = Pupuk::get();
        return view('admin.lihat_pupuk', compact('pupuks'));
    }

    public function create(){
        return view('admin.tambah_pupuk');
    }

    public function store(Request $request){
        $path = '/pupuk';
        $file_content = $request->file('gambar');
        $file_path = '/uploads/' . Storage::disk('public_uploads')->put($path, $file_content);
        Pupuk::create([
            'nama' => $request->nama,
            'gambar' => $file_path,
            'stock' => $request->stock,
            'harga' => $request->harga
        ]);

        return redirect('/admin/pupuk');
    }

    public function edit($id){
        $pupuk = Pupuk::findOrFail($id);
        return view('admin.edit_pupuk', compact('pupuk'));
    }

    public function update(Request $request){
        $pupuk = Pupuk::findOrFail($request->id);
        $pupuk->update([
            'stock' => $request->stock,
            'harga' => $request->harga
        ]);
        return redirect('/admin/pupuk');
    }

    public function destroy($id){
        $pupuk = Pupuk::findOrFail($id)->delete();
        return redirect('/admin/pupuk');
    }
}
