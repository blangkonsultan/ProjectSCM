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
                                    onclick="window.location='{{ url('/admin/tambah-pupuk') }}';">Tambah
                            </button>
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
                            <th>Nama Pupuk</th>
                            <th>Gambar</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pupuks as $no => $pupuk)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $pupuk->nama }}</td>
                                <td><img src="{{ $pupuk->gambar }}" width="200px" alt=""></td>
                                <td>{{ $pupuk->stock }}</td>
                                <td>{{ $pupuk->harga }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ url('/admin/pupuk/edit/' . $pupuk->id) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ url('/admin/pupuk/delete/' . $pupuk->id) }}">Delete</a>
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