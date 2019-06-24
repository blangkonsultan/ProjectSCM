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
                        <b>Nama Pelanggan : {{ $pelanggan->name }}</b> <br>
                        <b>Email Pelanggan : {{ $pelanggan->email }}</b> <br>
                        <b>Alamat Pelanggan : {{ $pelanggan->alamat }}</b> <br>
                        <b>Tanggal Pemesanan : {{ $pemesanans->first()[0]->tgl_pesan }}</b> <br>
                        <b>Total Pemesanan : {{ $total }}</b> <br>
                        <b>Status Pembayaran : {{ $pemesanans->first()[0]->status->status }}</b> <br>
                        <br>
                        @if($pemesanans->first()[0]->id_status != 1)
                            <a href="{{ $pemesanans->first()[0]->pembayarans->first()->bukti }}" target="_blank"
                               class="btn btn-primary">Bukti</a>
                        @endif
                    </p>
                    <table id="anak-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pemesanans->first() as $no => $pemesanan)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ \App\Pupuk::find($pemesanan->penjualan->id_barang)->nama }}</td>
                                <td>{{ \App\Pupuk::find($pemesanan->penjualan->id_barang)->harga }}</td>
                                <td>{{ $pemesanan->jumlah }}</td>
                                <td>{{ $pemesanan->total_harga }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if($pemesanans->first()[0]->id_status == 2)
                        <p class="text-muted font-13 m-b-30">
                            <a href="{{ url('/admin/pemesanan-pelanggan/' . $pemesanans->first()[0]->id_pemesanan . '/3') }}" class="btn btn-success">Lunas</a>
                            <a href="{{ url('/admin/pemesanan-pelanggan/' . $pemesanans->first()[0]->id_pemesanan . '/1') }}" class="btn btn-danger">Tidak Lunas</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection