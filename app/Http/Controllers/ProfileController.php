<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('supplier.profile', compact('user'));
    }

    public function update(Request $request){
        if(isset($request->password)){
            $request->merge(['password' => bcrypt($request->password)]);
        }
        Auth::user()->update($request->all());
        return redirect('/profile');
    }
}
