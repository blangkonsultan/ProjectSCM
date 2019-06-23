<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Akun saya</title>

  <!-- Bootstrap -->
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap-3.3.7-dist/font/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="cssadmin.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <!-- awal navbar -->
  <nav class="navbar navbar-default navbar-custom navbar-fixed-top affix-top" id="mainNav" style="opacity: 0.9">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="padding: 0;"><img id="img1" src="Kompod.png" style="width: 47px; margin-top: inherit; "></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Hello Suplier :)</a></li>
        </ul>
      </li>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="suplier_lihat_pemesanan.php">Pemesanan</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Bahan Baku
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="suplier_tambah_data_bahan_baku.php">Masukkan Data Bahan Baku</a></li>
              <li><a href="suplier_lihat_bahan_baku.php">Lihat Data Bahan Baku</a></li>
            </ul>
          </li>
          <li><a href="suplier_edit_akun.php">Akun saya</a></li>


          <li><a href="login.php" class="glyphicon glyphicon-off" onclick="return confirm('Anda akan logout?')" style="margin-top: -3px"></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- welcome paddy -->



  <!-- data padi -->
  <br><br><br><br><br><br>
  <div class="container col-md-5 col-md-offset-3"
  style="background-color: #818481a1 ;
  border-radius: 10px;
  padding-bottom: 20px;">
  <div class="form-card" style="
  background-color: rgba(0, 0, 0, 0.80);
  padding: 10px 30px;
  border-radius: 10px;">
  <h3 style="color: #fefefe">Edit akun <span class="label label-default"></span></h3>
  <!-- tabel data padi -->
  <div class="row">
    <div class="col-md-12 ">
      <div class="container-fluid panel panel-warning table-reponsive">
        <div class="row">
        <br>
        <div class="container">
          <table style="width:90%; margin: 0 auto; font-size: 20px;">
              <tr>
              <th>Nama</th>
            </tr>
            <tr>
              <td>Bagas</td>
            </tr>

            <tr>
              <th>Email</th>
            </tr>
            <tr>
              <td>bagas@bagas.com</td>
            </tr>

            <tr>
              <th>Alamat</th>
            </tr>
            <tr>
              <td>Krian</td>
            </tr>

            <tr>
              <th>No HP</th>
            </tr>
            <tr>
              <td>08768678</td>
            </tr>

            <tr>
              <th>No KTP</th>
            </tr>
            <tr>
              <td>89739827847298</td>
            </tr>

            <tr>
              <th>Password</th>
            </tr>
            <tr>
              <td>*******</td>
            </tr>

            <!-- <tr>
              <th>Edit</th>
            </tr> -->
            <tr>
              <td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modaledit"><span>Edit</span></button></td>
            </tr>
            <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST">
                        <div class="form-group">
                          <label for="namadep">Nama :</label>
                          <input type="Name" name="nama" class="form-control" id="namadep" placeholder="Nama Depan" value="">
                      </div>
                      <div class="form-group">
                        <label for="namabel">Email:</label>
                        <input type="Name" name="email" class="form-control" id="namabel" placeholder="Nama Belakang" value="">
                      </div>
                      <div class="form-group">
                        <label for="e-mail">Alamat :</label>
                        <input type="email" name="alamat" class="form-control" id="e-mail" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <label for="alamatt">No HP :</label>
                        <input type="name" name="noHP" class="form-control" id="alamatt" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <label for="no-ktp">No KTP :</label>
                        <input type="name" name="no_ktp" class="form-control" id="no-ktp" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <label for="passwordd">Password :</label>
                        <input type="password" name="password" class="form-control" id="passwordd" placeholder="" value="">
                      </div>
                      <div class="form-group">
                        <input type="hidden" class="form-control"
                        id="exampleInputPassword1" name="id_user"
                        value="">
                      </div>
                      <button type="submit" class="btn btn-primary" name="btnedit" >Submit</button>

                                    </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary" name="btnedit">Edit</button> -->
                        </div>
                      </div>
                    </div>
                    </div>

                        </table>
                      </div>
                      <br>
            </div>
      </div>
    </div>
  </div>
</div>
<!-- end tabel data padi -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>

</html>
