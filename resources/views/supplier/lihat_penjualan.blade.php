@extends('layouts.base')

@section('title', 'Data Pupuk')

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Pupuk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <button type="button" class="btn btn-success"
                                    onclick="window.location='{{ url('/supplier/penjualan/tambah-penjualan') }}';">Tambah
                            </button>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        {{--Text--}}
                    </p>
                    <table id="anak-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Bahan</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($penjualans as $no => $penjualan)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $penjualan->barang->nama }}</td>
                                <td>{{ $penjualan->stok }}</td>
                                <td>{{ $penjualan->harga }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ url('/supplier/penjualan/edit-penjualan/' . $penjualan->id) }}">Edit</a>
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