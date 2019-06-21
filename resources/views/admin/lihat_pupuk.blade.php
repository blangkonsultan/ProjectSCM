@extends('layouts.base-admin')
@section('title', 'Tambah Data Pupuk')

@section('content')
    <div class="container col-md-10 col-md-offset-1"
         style="background-color: #818481a1 ;
         border-radius: 10px;
         padding-bottom: 20px;">
        <div class="form-card" style="
    background-color: rgba(0, 0, 0, 0.80);
    padding: 10px 30px;
    border-radius: 10px;
">
            <h3 style="color: #fefefe">Lihat Data Pupuk <span class="label label-default"></span></h3>
            <!-- tabel data padi -->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="container-fluid panel panel-warning table-reponsive">

                        <div class="panel-heading">Data Pupuk</div>

                        <!--   Table -->


                        <table class="table table-hover" style=" text-align: center; ">
                            <tr>
                                <th style="text-align: center;">Nama Pupuk</th>
                                <th style="text-align: center;">Gambar</th>
                                <th style="text-align: center;">Jenis Pupuk</th>
                                <th style="text-align: center;">Stok Pupuk</th>
                                <th style="text-align: center;">Tipe</th>
                                <th style="text-align: center;">Harga</th>
                                <th style="text-align: center;">Detail</th>
                                <th style="text-align: center;">Tanggal Masuk</th>
                                <th style="text-align: center;">Tanggal Keluar</th>
                                <th style="text-align: center;">Edit</th>
                                <th style="text-align: center;">Hapus</th>
                            </tr>
                            <tr>
                                <!-- modal -->
                            </tr>
                            <div class="modal fade" id="modaledit" tabindex="-1"
                                 role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post">
                                                <div class="form-group">
                                                    <label for="name">Nama Pupuk :</label>
                                                    <input type="Name" name="nama_pupuk" class="form-control"
                                                           id="nameJenisPadi" placeholder="Nama Pupuk"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="gambar">Gambar :</label>
                                                    <input type="file" name="gambar" class="form-control" id="gambar"
                                                           placeholder="Gambar Pupuk"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="Jenispupuk">Jenis Pupuk :</label>
                                                    <select class="form-control" name="Jenis_pupuk">
                                                        <option>
                                                            Pupuk Hijau
                                                        </option>
                                                        <option>
                                                            Pupuk Hayati Organik
                                                        </option>
                                                        <option>
                                                            Pupuk Kandang
                                                        </option>
                                                        <option>
                                                            Pupuk Kompos
                                                        </option>
                                                        <option>
                                                            Pupuk Lainnya...
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Name">Stok Pupuk :</label>
                                                    <input type="Name" name="stok_kg" class="form-control" id="stok"
                                                           placeholder="/Kg">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Tipe">Tipe :</label>
                                                    <select class="form-control" name="Tipe"
                                                    >
                                                        <option>Kering</option>
                                                        <option>Cair</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Harga :</label>
                                                    <input type="price" name="harga" class="form-control" id="price"
                                                           placeholder="Rp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="comment">Detal Pupuk :</label>
                                                    <textarea class="form-control" name="detail_pupuk" rows="5"
                                                              id="comment"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date">Tanggal Masuk :</label>
                                                    <input type="date" name="tgl_masuk" class="form-control" id="date1"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="date">Tanggal Keluar :</label>
                                                    <input type="date" name="tgl_keluar" class="form-control" id="date2"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control"
                                                           id="exampleInputPassword1" name="id_padi"
                                                    >
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="btnedit">Submit
                                                </button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <!-- <button type="button" class="btn btn-primary" name="btnedit">Edit</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </table>
                    </div>
                </div>
            </div>
            <!-- end tabel data padi -->
        </div>
    </div>
@endsection