@extends('layouts.base')

@section('title', 'Pembelian Bahan baku')

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pembelian Bahan Baku</h2>
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
                            <th>Nama Supplier</th>
                            <th>Nama Bahan Baku</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($penjualans as $no => $penjualan)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $penjualan->user->name }}</td>
                                <td>{{ $penjualan->bahanBaku->nama }}</td>
                                <td>{{ $penjualan->stok }}</td>
                                <td>{{ $penjualan->harga }}</td>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control" type="number" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Beli</button>
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