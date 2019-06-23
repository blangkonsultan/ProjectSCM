@extends('layouts.base')

@section('title', 'Konfirmasi Pembayaran')

@section('css')

@endsection

@section('content')
    <form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post"
          action="{{ url('/admin/pemesanan/konfirmasi-pembayaran') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $pemesanan->id }}">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Konfirmasi Pembayaran</h2>
                    <ul class="nav navbar-right panel_toolbox">

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Total tagihan anda adalah : {{ $pemesanan->total_harga }}</strong>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Penyetor
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="nama">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Rekening
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="no_rek">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bukti Pembayaran
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="bukti">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jumlah
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="jumlah" value="{{ $pemesanan->total_harga }}" disabled>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="button"
                                    onclick="window.location = '{{ url('/admin') }}'">Cancel
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