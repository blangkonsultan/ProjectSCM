<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('logout', function(){
  Auth::logout();
  return redirect('/login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:ADMIN']], function(){
    Route::get('/', 'AdminController@index');
    Route::get('/tambah-pupuk', 'PupukController@create');
    Route::get('/penjadwalan', 'AdminController@showPenjadwalan');
    Route::get('/pemesanan', 'AdminController@showPemesanan');
    Route::get('/pelanggan', 'AdminController@showPelanggan');
});

Route::get('/test', function(){
   return \Illuminate\Support\Facades\Auth::user()->getRole();
});