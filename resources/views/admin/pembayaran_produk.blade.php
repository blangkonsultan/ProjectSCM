<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pembayaran</title>

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/responsive.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
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




<div class="single-product-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <h2>Konfirmasi Pembayaran</h2>
    <p>Kirim bukti pembayaran anda disini</p>
    <div class="aler alert-info col-md-3">
      <br>
      <h5>Total Tagihan Anda Rp. 120000</h5>
    </div>
    <div class="row">
      <div class="col-md-10">
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Penyetor</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rudi Tabuti" required name="nama">
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputEmail1">No Rekening</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="111-233-412-12" name="norek" required >
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jumlah</label>
            <input type="text" class="form-control" id="exampleInputEmail1" readonly name="jumlah" value="Rp. 12000" >
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputFile">Foto Bukti Pembayaran</label>
            <input type="file" id="exampleInputFile" name="bukti" required>
            <p class="text-danger">Foto bukti Max 2Mb</p>
          </div> -->
          <a href="admin_riwayat_pemesanan.php" type="submit" class="btn btn-success" name="kirim" >Kirim</a>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="js/main.js"></script>
</body>
</html>
