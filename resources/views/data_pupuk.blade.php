
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Data Pupuk</title>

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
          <li><a href="#">Penjadwalan</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Pupuk
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="data_padi.php">Masukkan Data Pupuk</a></li>
                <li><a href="lihat_padi.php">Lihat Data Pupuk</a></li>
              </ul>
            </li>
            <li><a href="pemesanan.php">Pemesanan</a></li>
            <li><a href="Pelanggan.php">Pelanggan</a></li>
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

      <script type="text/javascript">
        alert("data berhasil disimpan");
      </script>

              <!-- // $sql = mysqli_query($konek, "INSERT INTO padi VALUES
              //                             (NULL,
              //                             '".$_POST['jenis_padi']."',
              //                             '".$_POST['gambar']."',
              //                             '".$_POST['kualitas_padi']."',
              //                             '".$_POST['stok_kg']."',
              //                             '".$_POST['warna']."',
              //                             '".$_POST['harga']."',
              //                             '".$_POST['detail_padi']."',
              //                             '".$_POST['tgl_masuk']."',
              //                             '".$_POST['tgl_keluar']."')");
              //                     if ($sql) {
              //                       // echo 'berhasil';
              //                       echo "";
              //                       }else{
              //                         echo "error";
              //                       }
              //                       # code...
              //                     }
              // -->
              <!-- end form data padi -->
            </div>


  <!-- <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="container-fluid panel panel-warning table-reponsive">

                <div class="panel-heading">Data Padi</div>
                <div class="panel-body">
                  <p>Masukkan data padi yang akan dijual. Data berisi nama petani, kualitas padi dan harga
                  </p>
                </div>



                  <table class="table table-hover" style=" text-align: center; ">
                    <tr>
                        <th style="text-align: center;">Nomer</th>
                        <th style="text-align: center;">Petani</th>
                        <th style="text-align: center;">Kualitas</th>
                        <th style="text-align: center;">Harga</th>
                        <th style="text-align: center;">Aksi</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Alfreds Futterkiste</td>
                        <td>A</td>
                        <td>10.000/kg</td>
                        <td><button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Centro comercial Moctezuma</td>
                        <td>A</td>
                        <td>10.000/kg</td>
                        <td><button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Ernst Handel</td>
                        <td>A</td>
                        <td>10.000/kg</td>
                        <td><button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                        <td></td>
                      </tr>
                </table>
              </div>
        </div>
      </div> -->


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    </body>

    </html>