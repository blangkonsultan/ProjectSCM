
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Komposkan</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css') }} -->
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
<div>
    @if($errors->any())
        <div class = "alert alert-error">
            @foreach ($errors->all() as $input_error)
                {{ $input_error }}
            @endforeach
        </div>
    @endif
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="{{ route('register') }}">
                    <h1>Register SIPAD</h1>
                    @csrf
                    <div>
                        <input type="text" name="name" class="form-control" placeholder="Name" required="" autocomplete="name" />
                    </div>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" autocomplete="email" />
                    </div>
                    <div>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="" autocomplete="alamat" />
                    </div>
                    <div>
                        <input type="text" name="no_hp" class="form-control" placeholder="No HP" required="" autocomplete="nohp" />
                    </div>
                    <div>
                        <input type="text" name="no_ktp" class="form-control" placeholder="No KTP" required="" autocomplete="noktp" />
                    </div>
                    <div>
                        <label for="">Pilih Sebagai</label>
                        <select name="id_role" id="">
                            <option value="2">Supplier</option>
                            <option value="3">Petani</option>
                        </select>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Register</button>
                    </div>

                    <div class="clearfix"></div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
