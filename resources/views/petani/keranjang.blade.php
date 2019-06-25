@extends('layouts.base')

@section('title', 'Penjualan Pupuk')

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Penjualan Pupuk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        {{--Text--}}
                    </p>
                    <form action="" id="delete-form" method="post">
                        @method('DELETE')
                        @csrf
                    </form>
                    <table id="anak-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Gambar</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($total = 0)
                        @foreach($keranjangs as $no => $keranjang)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $keranjang->barang->nama }}</td>
                                <td><img src="{{ $keranjang->barang->gambar }}" width="200px" alt=""></td>
                                <td>{{ $keranjang->jumlah }}</td>
                                <td>{{ $keranjang->barang->harga }}</td>
                                <td>{{ $keranjang->subtotal }}</td>
                                @php($total += $keranjang->subtotal)
                                <td>
                                    <a class="btn btn-danger" href="{{ url('/petani/keranjang/hapus/' . $keranjang->id) }}">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <p><b>Total : {{ $total }}</b></p>
                    <a href="/petani/keranjang/beli" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection