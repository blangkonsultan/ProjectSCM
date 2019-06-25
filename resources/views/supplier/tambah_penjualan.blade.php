@extends('layouts.base')

@section('title', 'Tambah Pupuk')

@section('css')

@endsection

@section('content')
    <form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post"
          action="{{ url('/supplier/penjualan/tambah-penjualan') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Data Penjualan</h2>
                    <ul class="nav navbar-right panel_toolbox">

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bahan Baku</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="id_bahan">
                                @foreach($bahans as $bahan)
                                    <option value="{{ $bahan->id }}">{{ $bahan->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Stock (kg)
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="stock">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga Rp
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="harga">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="button"
                                    onclick="window.location = '{{ url('/supplier') }}'">Cancel
                            </button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')

@endsection