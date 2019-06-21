<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PupukController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('admin.tambah_pupuk');
    }
}
