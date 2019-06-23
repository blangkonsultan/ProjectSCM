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
    border-radius: 10px;">

            <h3 style="color: #fefefe">Penjadwalan Produksi Pupuk<span class="label label-default"></span></h3>
            <a href="/admin/tambah-penjadwalan" class="btn btn-primary" style="margin-bottom: 8px">Input Data</a>
            <!-- tabel data padi -->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="container-fluid panel panel-warning table-reponsive">
                        <div class="panel-heading">Penjadwalan</div>
                        <table class="table table-hover" style=" text-align: center; ">
                            <tr>
                                <th style="text-align: center;">Tanggal Produksi</th>
                                <th style="text-align: center;">Jadwal Produksi</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
