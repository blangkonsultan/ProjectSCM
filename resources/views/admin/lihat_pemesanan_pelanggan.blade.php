@extends('layouts.base')

@section('title', 'Riwayat Pemesanan')

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Pemesanan Pelanggan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="anak-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID Pemesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Pembelian</th>
                            <th>Total Pemesanan</th>
                            <th>Status Pembayaran</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pemesanans as $no => $pemesanan)
                            <tr>
                                @php($pemesanan = $pemesanan->first())
                                <td>{{ $no }}</td>
                                <td>{{ $pemesanan->user->name }}</td>
                                <td>{{ $pemesanan->tgl_pesan }}</td>
                                <td>{{ $pemesanan->total_harga }}</td>
                                <td>{{ $pemesanan->status->status }}</td>
                                <td>
                                    <a class="btn btn-primary"
                                       href="{{ url('/admin/pemesanan-pelanggan/detail/' . $pemesanan->id_pemesanan ) }}">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection