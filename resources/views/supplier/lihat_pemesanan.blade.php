@extends('layouts.base')

@section('title', 'Riwayat Pemesanan')

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
                            <th>Tanggal Pemesanan</th>
                            <th>Nama Bahan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pemesanans as $no => $pemesanan)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ date('d/m/Y', strtotime($pemesanan->tgl_pesan)) }}</td>
                                <td>{{ $pemesanan->barang->nama }}</td>
                                <td>{{ $pemesanan->penjualan->harga }}</td>
                                <td>{{ $pemesanan->jumlah }}</td>
                                <td>{{ $pemesanan->jumlah * $pemesanan->penjualan->harga }}</td>
                                <td>{{ $pemesanan->status->status }}</td>
                                <td>
                                    @if($pemesanan->id_status == 1)

                                    @elseif($pemesanan->id_status == 2)
                                        <a class="btn btn-primary"
                                           href="{{ url($pemesanan->pembayarans->first()->bukti) }}">Bukti</a>
                                        <a class="btn btn-success"
                                           href="{{ url('/supplier/pemesanan/ceklunas/' . $pemesanan->id_pemesanan) }}">Lunas</a>
                                    @else
                                        <a class="btn btn-primary"
                                           href="{{ url($pemesanan->pembayarans->first()->bukti) }}">Bukti</a>
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