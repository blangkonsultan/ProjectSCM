
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun</title>

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
    <style type="text/css"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                          <li><a href="pelanggan_home.php"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="pelanggan_riwayat_pemesanan.php"><i class="fa fa-th-list"></i> Riwayat Pemesanan</a></li>
                          <li><a href="pelanggan_cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                          <li><a href="pelanggan_checkout.php"><i class="fa fa-money"></i> Checkout</a></li>
                          <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="pelanggan_home.php">Komp<span>o</span>skan</a></h1>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="shop.html"></a></li>
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
                        <h2>Akun</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="row">
      <br>
      <div class="container">
        <table style="width:30%; margin: 0 auto; font-size: 20px;">
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






    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
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
                           <li><a href="akunp.php"><i class="fa fa-user"></i> My Account</a></li>
                          <li><a href="riwayat_pemesanan.php"><i class="fa fa-th-list"></i> Riwayat Pemesanan</a></li>
                          <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                          <li><a href="checkout.php"><i class="fa fa-money"></i> Checkout</a></li>
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
                            <li><a href="">Gadgets</a></li>
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
