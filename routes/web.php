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
    Route::redirect('/', '/admin/pupuk');

    Route::get('/pupuk', 'PupukController@index');
    Route::get('/tambah-pupuk', 'PupukController@create');
    Route::post('/tambah-pupuk', 'PupukController@store');
    Route::post('/edit-pupuk', 'PupukController@update');
    Route::get('/pupuk/edit/{id}', 'PupukController@edit');
    Route::get('/pupuk/delete/{id}', 'PupukController@destroy');

    Route::get('/pelanggan', 'PelangganController@index');
    Route::get('/pelanggan/edit/{id}', 'PelangganController@edit');
    Route::post('/pelanggan/edit-pelanggan', 'PelangganController@update');

    Route::get('/bahan-baku', 'BahanBakuController@index');
});

Route::get('/test', function(){
   return \Illuminate\Support\Facades\Auth::user()->getRole();
});