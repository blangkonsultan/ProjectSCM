@extends('layouts.base')

@section('title', 'Data Bahan baku')

@section('css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Bahan Baku</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <button type="button" class="btn btn-success"
                                    onclick="window.location='{{ url('/admin/tambah-bahan-baku') }}';">Tambah
                            </button>
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
                            <th>Nama Bahan Baku</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bahans as $no => $bahan)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $bahan->nama }}</td>
                                <td>{{ $bahan->stock }}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{ url('/admin/bahan-baku/delete/' . $bahan->id) }}">Reset Stock</a>
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