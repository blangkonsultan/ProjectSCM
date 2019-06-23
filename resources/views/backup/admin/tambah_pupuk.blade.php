@extends('layouts.base-admin')
@section('title', 'Tambah Data Pupuk')

@section('content')
    <div class="container col-md-4 col-md-offset-4"
         style="background-color: #818481a1;
    border-radius: 10px;
    padding-bottom: 20px;">
        <div class="form-card" style="
    background-color: rgba(0, 0, 0, 0.80);
    padding: 10px 30px;
    border-radius: 10px;
">
            <h3 style="color: #fefefe">Masukkan Data Pupuk <span class="label label-default"></span></h3>
            <!-- form masukkan data padi -->
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label style="color: #fefefe" for="name">Nama Pupuk :</label>
                    <input type="Name" name="nama_pupuk" class="form-control" id="nameJenisPadi" placeholder="Nama Pupuk">
                </div>
                <div class="form-group">
                    <label style="color: #fefefe" for="gambarpadi">gambar :</label>
                    <input type="file" name="gambar" class="form-control" id="gambarpadi" placeholder="Gambar Pupuk">
                </div>
                <div class="form-group">
                    <label style="color: #fefefe" for="JenisPupuk">Jenis Pupuk :</label>
                    <select class="form-control" name="Jenis_pupuk">
                        <option>Pupuk Hijau</option>
                        <option>Pupuk Hayati Organik</option>
                        <option>Pupuk Kandang</option>
                        <option>Pupuk Kompos</option>
                        <option>Pupuk Lainnya...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label style="color: #fefefe" for="Name">Stok Pupuk :</label>
                    <input type="Name" name="stok_pupuk" class="form-control" id="stok" placeholder="/Kg">
                </div>
                <div class="form-group">
                    <label style="color: #fefefe" for="Tipe">Tipe :</label>
                    <select class="form-control" name="Tipe">
                        <option>Kering</option>
                        <option>Cair</option>
                    </select>
                </div>
                <div class="form-group">
                    <label style="color: #fefefe" for="price">Harga :</label>
                    <input type="price" name="harga" class="form-control" id="price" placeholder="Rp">
                </div>
                <div class="form-group">
                    <label style="color: #fefefe" for="comment">Detail Pupuk :</label>
                    <textarea class="form-control" name="detail_pupuk" rows="5" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label style="color: #fefefe" for="date">Tanggal Masuk :</label>
                    <input type="date" name="tgl_masuk" class="form-control" id="date1" placeholder="tanggal masuk ">
                </div>
                <div class="form-group">
                    <label style="color: #fefefe" for="date">Tanggal Keluar :</label>
                    <input type="date" name="tgl_keluar" class="form-control" id="date2" placeholder="tanggal keluar ">
                </div>
                <button type="submit" class="btn btn-default" name="btnsubmit">Submit</button>
                <a class="btn btn-primary" href="lihat_padi.php"><span>Lihat Data Padi</span></a>
            </form>
        </div>
    </div>
@endsection