@extends('layouts.base-admin')
@section('title', 'Data Pelanggan')

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
            <h3 style="color: #fefefe">Lihat Data Pelanggan <span class="label label-default"></span></h3>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="container-fluid panel panel-warning table-reponsive">

                        <div class="panel-heading">Data Pelanggan</div>

                        <!--   Table -->


                        <table class="table table-hover" style=" text-align: center; ">
                            <tr>
                                <th style="text-align: center;">Nama Depan</th>
                                <th style="text-align: center;">Nama Belakang</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">No KTP</th>
                                <!-- <th style="text-align: center;">Edit</th>
                                <th style="text-align: center;">Hapus</th> -->
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection