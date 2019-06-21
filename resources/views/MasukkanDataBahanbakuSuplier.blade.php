<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Distributor</title>

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
          <li><a href="">Hello Distributor :)</a></li>
        </ul>
      </li>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Pupuk
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="distributor.php">Masukkan Data Pupuk</a></li>
              <li><a href="lihatpupukdistrib.php">Lihat Data Pupuk</a></li>
            </ul>
          </li>
          <li><a href="pesanandistrib.php">Pemesanan</a></li>

          <li><a href="index.php" class="glyphicon glyphicon-off" onclick="return confirm('Anda akan logout?')" style="margin-top: -3px"></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- welcome paddy -->

  <img id="welcome" src="Kompod.png" style="
  width : 50%;
  margin-top: 100px;
  margin-left: 360px">

  <!-- data padi -->
  <br><br><br>
  <div class="container col-md-4 col-md-offset-4"
  style="background-color: #818481a1;
  border-radius: 10px;
  padding-bottom: 20px;">
  <div class="form-card" style="
  background-color: rgba(0, 0, 0, 0.80);
  padding: 10px 30px;
  border-radius: 10px;
  ">
  <h3 style="color: #fefefe">Masukkan Data Pupuk <span class="label label-default"></span></h3>
  <!-- form masukkan data padi -->
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label style="color: #fefefe" for="name">Nama Pupuk :</label>
      <input type="Name" name="nama_pupuk" class="form-control" id="nameJenisPadi" placeholder="Nama Pupuk">
    </div>
    <div class="form-group">
      <label style="color: #fefefe" for="gambarpadi">gambar :</label>
      <input type="file" name="gambar" class="form-control" id="gambarpadi" placeholder="Gambar Pupuk">
    </div>
    <div class="form-group">
      <label style="color: #fefefe" for="JenisPupuk">Jenis Pupuk :</label>
      <select class="form-control" name="Jenis_pupuk">
        <option>Pupuk Hijau</option>
        <option>Pupuk Hayati Organik</option>
        <option>Pupuk Kandang</option>
        <option>Pupuk Kompos</option>
        <option>Pupuk Lainnya...</option>
      </select>
    </div>
    <div class="form-group">
      <label style="color: #fefefe" for="Name">Stok Pupuk :</label>
      <input type="Name" name="stok_pupuk" class="form-control" id="stok" placeholder="/Kg">
    </div>
    <div class="form-group">
      <label style="color: #fefefe" for="Tipe">Tipe :</label>
      <select class="form-control" name="Tipe">
        <option>Kering</option>
        <option>Cair</option>
      </select>
    </div>
    <div class="form-group">
      <label style="color: #fefefe" for="price">Harga :</label>
      <input type="price" name="harga" class="form-control" id="price" placeholder="Rp">
    </div>
    <div class="form-group">
      <label style="color: #fefefe" for="comment">Detail Pupuk :</label>
      <textarea class="form-control" name="detail_pupuk" rows="5" id="comment"></textarea>
    </div>
    <div class="form-group">
      <label style="color: #fefefe" for="date">Tanggal Masuk :</label>
      <input type="date" name="tgl_masuk" class="form-control" id="date1" placeholder="tanggal masuk ">
    </div>
    <div class="form-group">
      <label style="color: #fefefe" for="date">Tanggal Keluar :</label>
      <input type="date" name="tgl_keluar" class="form-control" id="date2" placeholder="tanggal keluar ">
    </div>
    <button type="submit" class="btn btn-default" name="btnsubmit">Submit</button>
    <a class="btn btn-primary" href="lihat_padi.php"><span>Lihat Data Padi</span></a>
  </div>

</div>
</form>
<?php
if (isset($_POST['btnsubmit'])) {
            // $id= $_SESSION['id_pegawai'];
  $jenisPadi = $_POST['nama_pupuk'];
            // $gambar    = $_POST['gambar'];
  $kualitas  = $_POST['Jenis_pupuk'];
  $stok      = $_POST['stok_pupuk'];
  $warna      = $_POST['Tipe'];
  $harga      = $_POST['harga'];
  $detail      = $_POST['detail_pupuk'];
  $tglMasuk      = $_POST['tgl_masuk'];
  $tglKeluar      = $_POST['tgl_keluar'];
            // $status = 'Tolak';
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];

  $fotobaru = date('dmYHis').$gambar;
  $path = "upload/".$fotobaru;

              // echo "$_SESSION[id]";

  if(move_uploaded_file($tmp, $path)){
    $sql = "INSERT INTO `padi` (`id_padi`, `jenis_padi`, `gambar`, `kualitas_padi`, `stok_kg`, `warna`, `harga`, `detail_padi`, `tgl_masuk`, `tgl_keluar`)
    VALUES (NULL, '$jenisPadi', '$fotobaru', '$kualitas', '$stok', '$warna', '$harga', '$detail', '$tglMasuk', '$tglKeluar')";
    mysqli_query($konek,$sql);
    ?>
    <script type="text/javascript">
      alert("data berhasil disimpan");
    </script>
    <?php
  }

}

?>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>

</html>
