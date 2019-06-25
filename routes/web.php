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

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::redirect('/', '/login');
Route::redirect('/supplier/profile', '/profile');

Route::get('/home', function () {
    if (\Illuminate\Support\Facades\Auth::user()->getRole() == 'ADMIN') {
        return redirect('/admin');
    } else if (\Illuminate\Support\Facades\Auth::user()->getRole() == 'SUPPLIER') {
        return redirect('/supplier');
    } elseif (\Illuminate\Support\Facades\Auth::user()->getRole() == 'PETANI') {
        return redirect('/petani');
    } else {
        return "anda siapa?";
    }
});

Route::get('/profile', 'ProfileController@index');

Route::post('/profile/update', 'ProfileController@update');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:ADMIN'], 'namespace' => 'Admin'], function () {
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

    Route::get('/pemesanan-pelanggan', 'PemesananPetaniController@index');
    Route::get('/pemesanan-pelanggan/detail/{id}', 'PemesananPetaniController@detail');
    Route::get('/pemesanan-pelanggan/{id}/{status}', 'PemesananPetaniController@updateStatus');

    Route::get('/bahan-baku', 'BahanBakuController@index');
    Route::get('/tambah-bahan-baku', 'BahanBakuController@create');
    Route::post('/tambah-bahan-baku', 'BahanBakuController@store');
    Route::get('/bahan-baku/delete/{id}', 'BahanBakuController@destroy');

    Route::get('/pembelian-bahan-baku', 'PembelianBahanBakuController@index');
    Route::post('/pembelian-bahan-baku', 'PembelianBahanBakuController@store');

    Route::get('/riwayat-pemesanan', 'PemesananAdminController@index');
    Route::get('/riwayat-pemesanan/konfirmasi-pembayaran/{id}', 'PemesananAdminController@bayar');
    Route::post('/riwayat-pemesanan/konfirmasi-pembayaran/', 'PemesananAdminController@storeBayar');
    Route::get('/riwayat-pemesanan/detail-pembayaran/{id}', 'PemesananAdminController@detail');
});


Route::group(['prefix' => 'supplier', 'middleware' => ['auth', 'role:SUPPLIER'], 'namespace' => 'Supplier'], function () {
    Route::redirect('/', '/supplier/pemesanan');
    Route::get('/pemesanan', 'PemesananController@index');
    Route::get('/pemesanan/ceklunas/{id}', 'PemesananController@cekLunas');
    Route::get('/penjualan', 'PenjualanController@index');
    Route::get('/penjualan/tambah-penjualan', 'PenjualanController@tambah');
    Route::post('/penjualan/tambah-penjualan', 'PenjualanController@store');
    Route::get('/penjualan/edit-penjualan/{id}', 'PenjualanController@edit');
    Route::post('/penjualan/edit-penjualan/', 'PenjualanController@update');
});

Route::group(['prefix' => 'petani', 'middleware' => ['auth', 'role:PETANI'], 'namespace' => 'Petani'], function () {
    Route::redirect('/', '/profile');
    Route::get('/pupuk', 'PupukController@index');
    Route::post('/pupuk/beli', 'PupukController@beli');

    Route::get('/keranjang', 'PupukController@keranjang');
    Route::get('/keranjang/hapus/{id}', 'PupukController@hapusKeranjang');
    Route::get('/keranjang/beli', 'PupukController@beliKeranjang');

    Route::get('/pembayaran', 'PembayaranController@index');
    Route::get('/pembayaran/detail/{id}', 'PembayaranController@detail');
    Route::get('/pembayaran/bayar/{id}', 'PembayaranController@bayar');
    Route::post('/pembayaran/bayar/store', 'PembayaranController@storeBayar');
});