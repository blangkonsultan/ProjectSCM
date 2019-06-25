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
                            <th>Nama Pupuk</th>
                            <th>Gambar</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
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
                                <td><input type="number" id="jml-{{ $no+1 }}"></td>
                                <td>
                                    <button class="btn btn-primary" onclick="buy({{\App\Penjualan::where('id_jenis', 2)->where('id_barang', $pupuk->id)->first()->id}}, 'jml-{{ $no+1 }}')">Beli</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <form action="/petani/pupuk/beli" method="post" id="form-beli">
        @csrf
        <input type="hidden" name="id" value="" id="id">
        <input type="hidden" name="jumlah" value="" id="jumlah">
    </form>
@endsection

@section('js')
    <script>
        function buy(id, jml) {
            $('#id').val(id);
            $('#jumlah').val($('#'+jml).val());
            $('#form-beli').submit();
        }
    </script>
@endsection