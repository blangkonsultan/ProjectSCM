@extends('layouts.base')

@section('title', 'Detail Pembayaran')

@section('css')

@endsection

@section('content')
    <form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post"enctype="multipart/form-data">
        @csrf
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Detail Pembayaran</h2>
                    <ul class="nav navbar-right panel_toolbox">

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Penyetor
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" value="{{ $pembayaran->nama }}" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Rekening
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" value="{{ $pembayaran->no_rek }}" disabled="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bukti Pembayaran
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <img src="{{ url($pembayaran->bukti) }}" alt="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jumlah
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="jumlah" value="{{ $pembayaran->pemesanan->total_harga }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')

@endsection