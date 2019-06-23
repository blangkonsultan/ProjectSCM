<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Data Pelanggan</title>

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
          <li><a href="">Hello Admin :)</a></li>
        </ul>
      </li>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_penjadwalan.php">Penjadwalan</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pelanggan
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="admin_lihat_pelanggan.php">Data Pelanggan</a></li>
              <li><a href="admin_lihat_pemesanan.php">Pemesanan</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bahan Baku
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin_shop.php">Beli Bahan Baku</a></li>
                <li><a href="admin_cart.php">Keranjang</a></li>
                <li><a href="admin_riwayat_pemesanan.php">Riwayat Pemesanan</a></li>
                <li><a href="admin_lihat_bahan_baku.php">Lihat Data Bahan Baku</a></li>
              </ul>
            </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Pupuk
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="admin_tambah_data_pupuk.php">Masukkan Data Pupuk</a></li>
              <li><a href="admin_lihat_pupuk.php">Lihat Data Pupuk</a></li>
            </ul>
          </li>



          <li><a href="login.php" class="glyphicon glyphicon-off" onclick="return confirm('Anda akan logout?')" style="margin-top: -3px"></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- welcome paddy -->


  <!-- data padi -->
  <br><br><br><br><br><br>
  <div class="container col-md-10 col-md-offset-1"
  style="background-color: #818481a1 ;
         border-radius: 10px;
         padding-bottom: 20px;">
   <div class="form-card" style="
    background-color: rgba(0, 0, 0, 0.80);
    padding: 10px 30px;
    border-radius: 10px;
">
  <h3 style="color: #fefefe" >Lihat Data Pelanggan <span class="label label-default"></span></h3>
<!-- tabel data padi -->
<div class="row">
      <div class="col-md-12 ">
          <div class="container-fluid panel panel-warning table-reponsive">

              <div class="panel-heading">Data Pelanggan</div>

              <!--   Table -->


                <table class="table table-hover" style=" text-align: center; ">
                  <tr>
                      <th style="text-align: center;">Nama</th>
                      <th style="text-align: center;">Email</th>
                      <th style="text-align: center;">Alamat</th>
                      <th style="text-align: center;">No HP</th>
                      <th style="text-align: center;">No KTP</th>
                      <th style="text-align: center;">No Ijin</th>
                      <!-- <th style="text-align: center;">Edit</th>
                      <th style="text-align: center;">Hapus</th> -->
                    </tr>
                    <tr>
                      <td>Bagas</td>
                      <td>Bagas@bagas.com</td>
                      <td>Krian</td>
                      <td style="text-align: center;">093042234</td>
                      <td>982938492</td>
                      <td style="text-align: center;">543543545</td>
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
                        <input type="Name" name="nama" class="form-control" id="nama" placeholder="Nama" value="">
                    </div>
                    <div class="form-group">
                      <label for="namabel">Email:</label>
                      <input type="Name" name="email" class="form-control" id="email" placeholder="email" value="">
                    </div>
                    <div class="form-group">
                      <label for="e-mail">Alamat :</label>
                      <input type="email" name="alamat" class="form-control" id="alamat" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="alamat">No HP :</label>
                      <input type="name" name="noHP" class="form-control" id="noHP" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="no-ktp">No KTP :</label>
                      <input type="name" name="no_ktp" class="form-control" id="noktp" placeholder="" value="">
                    </div>
                    <div class="form-group">
                      <label for="noIjin">No Ijin :</label>
                      <input type="name" name="noIjin" class="form-control" id="noIjin" placeholder="" value="">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnedit" >Submit</button>
                    </table>
            </div>s
      </div>
    </div>
<!-- end tabel data padi -->
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>

</html>
