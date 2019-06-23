<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Data Pemesanan</title>

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
  <div class="container col-md-10 col-md-offset-1"
  style="background-color: #818481a1 ;
  border-radius: 10px;
  padding-bottom: 20px;">
  <div class="row">
    <br>
    <div class="col-md-12 ">
      <div class="container-fluid panel panel-warning table-reponsive">

        <div class="panel-heading">Detail Pemesanan</div>

        <!--   Table -->


        <table class="table table-hover" style=" text-align: center; ">
          <tr>
            <th style="text-align: center;">No</th>
            <!-- <th style="text-align: center;">Id detail</th> -->
            <th style="text-align: center;">Nama Bahan</th>
            <th style="text-align: center;">Harga</th>
            <th style="text-align: center;">Jumlah</th>
            <th style="text-align: center;">Subtotal</th>
            <th style="text-align: center;">Bukti Transfer</th>
            <th colspan="4" style="text-align: center;">Aksi</th>
            <!-- <th style="text-align: center;">No KTP</th> -->
            <!-- <th style="text-align: center;">Edit</th>
            <th style="text-align: center;">Hapus</th> -->
          </tr>
          <tr>
            <td>1</td>

            <td>Kotoran Sapi</td>
            <td>Rp. 12000</td>
            <td>10 Kg</td>
            <td>Rp. 120000</td>
            <td>
              <a href="#"  class="btn btn-success">Cek</a>
            </td>
            <td>
              <a href="#" class="btn btn-success">Lunas</a>
              <a href="#" onclick="return confirm('Yakin akan di hapus?');" class="btn btn-danger">Hapus</a>
            </td>
          </tr>

        </table>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>

</html>
