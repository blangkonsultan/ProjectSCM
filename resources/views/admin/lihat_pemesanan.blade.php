@extends('layouts.base')

@section('title', 'Pemesanan')

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pemesanan</h2>
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
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Produk</th>
                            <th>Supplier</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pemesanans as $no => $pemesanan)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $pemesanan->tgl_pesan }}</td>
                                <td>{{ $pemesanan->barang->nama }}</td>
                                <td>{{ $pemesanan->penjualan->user->name }}</td>
                                <td>{{ $pemesanan->jumlah }}</td>
                                <td>{{ $pemesanan->penjualan->harga }}</td>
                                <td>{{ $pemesanan->total_harga }}</td>
                                <td>{{ $pemesanan->status->status }}</td>
                                <td>
                                    @if($pemesanan->status->id == 1)
                                        <a class="btn btn-primary" href="{{ url('/admin/pemesanan/konfirmasi-pembayaran/'.$pemesanan->id) }}">Bayar</a>
                                        <a class="btn btn-danger" href="{{ url('/admin/pemesanan/hapus/'.$pemesanan->id) }}">Hapus</a>
                                    @endif
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