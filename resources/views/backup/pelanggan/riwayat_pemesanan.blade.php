<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan</title>

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
  <body style="background-image: url(bgppl.png);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100%;
">

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="user-menu">
                      <ul>
                        <li><a href="pelanggan_edit_akun.php"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                      </ul>
                  </div>
                </div>

            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area" style = "background-color: white; ">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="home.php">Komp<span>o</span>skan</a></h1>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li><a href="pelanggan_home.php">Home</a></li>
                      <li><a href="pelanggan_shop.php">Belanja</a></li>
                      <li><a href="pelanggan_cart.php">Keranjang</a></li>
                      <li><a href="pelanggan_checkout.php">Pembayaran</a></li>
                      <li class="active"><a href="pelanggan_riwayat_pemesanan.php">Riwayat Pemesanan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Riwayat Pemesanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <br><br><br>

    <div class="row">
    <div class="container">

    <div class="col-md-4 col-md-offset-1">
      <h2 style="color:#1abc9c;">Riwayat Belanja Bagas</h2>


      </p>
    </div>


    </div>



    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <div class="product-content-right">
                      <div class="container-fluid panel panel-warning table-reponsive">
                              <br>
                              <table class="table table-hover" style=" text-align: center; ">
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Tanggal</th>
                                    <th style="text-align: center;">Nama Produk</th>
                                    <th style="text-align: center;">Gambar</th>
                                    <th style="text-align: center;">Jumlah</th>
                                    <th style="text-align: center;">Harga</th>
                                    <th style="text-align: center;">Total</th>
                                    <th style="text-align: center;">Status Pembayaran</th>
                                    <th colspan="4" style="text-align: center;">Perbarui Status</th>
                                  </tr>

                                  <tr>

                                    <td>1</td>
                                    <td>2019-06-22</td>
                                    <td>Pupuke</td>
                                    <td><img src='upload\031220181801016.jpg' tyle='width:200px; heigth:200px;'></td>
                                    <td>10</td>
                                    <td>Rp. 12000</td>
                                    <td>Rp. 120000</td>
                                    <td>
                                      Belum Lunas
                                    </td>
                                    <td>
                                      <a href="pelanggan_pembayaran_produk.php" class="btn btn-success">Pembayaran</a>
                                    </td>
                                  </tr>
                              </table>
                          </div>
                      </div>
                  </div>
            </div>
            <br><br><br>



        </div>
    </div>

    <div class="footer-top-area">
      4<div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Komp<span>o</span>skan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                         <li><a href="pelanggan_edit_akun.php"><i class="fa fa-user"></i> My Account</a></li>
                          <li><a href="pelanggan_riwayat_pemesanan.php"><i class="fa fa-th-list"></i> Riwayat Pemesanan</a></li>
                          <li><a href="pelanggan_cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                          <li><a href="pelanggan_checkout.php"><i class="fa fa-money"></i> Checkout</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="">Mobile Phone</a></li>
                            <li><a href="">Home accesseries</a></li>
                            <li><a href="">LED TV</a></li>
                            <li><a href="">Computer</a></li>
                            <li><a href="">Gadets</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2019 Komposkan All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="http://wpexpand.com" target="_blank">WP Expand</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
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
