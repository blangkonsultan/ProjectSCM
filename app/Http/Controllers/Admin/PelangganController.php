<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $users = User::where('id_level', '<>', 1)->get();
        return view('admin.lihat_pelanggan', compact('users'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.edit_pelanggan', compact('user'));
    }

    public function update(Request $request){
        $user = User::findOrFail($request->id)->update([
            'no_ijin' => $request->no_ijin
        ]);
        return redirect('/admin/pelanggan');
    }
}
