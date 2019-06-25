@extends('layouts.base')

@section('title', 'Tambah Pupuk')

@section('css')

@endsection

@section('content')
    <form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" method="post"
          action="{{ url('/profile/update') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ganti Data Profil</h2>
                    <ul class="nav navbar-right panel_toolbox">

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="name" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="email" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="alamat" value="{{ $user->alamat }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No HP
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="no_hp" value="{{ $user->no_hp }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No KTP
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" name="no_ktp" value="{{ $user->no_ktp }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Ijin
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" required="required"
                                   class="form-control col-md-7 col-xs-12" value="{{ $user->no_ijin }}" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password
                            <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password"
                                   class="form-control col-md-7 col-xs-12" value="" id="pwd">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="" id="" class="btn btn-success">Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')
    <script>
        $('#demo-form').submit(function(){
            $('#pwd').val() != '' ? $('#pwd').attr('name', 'password') : '';
        })
    </script>
@endsection