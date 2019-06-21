<nav class="navbar navbar-default navbar-custom navbar-fixed-top affix-top" id="mainNav" style="opacity: 0.9">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#" style="padding: 0;"><img id="img1" src="/Kompod.png"
                                                                      style="width: 47px; margin-top: inherit; "></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/admin">Hello Admin :)</a></li>
            </ul>
            </li>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/penjadwalan">Penjadwalan</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Data Pupuk
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/admin/tambah-pupuk">Masukkan Data Pupuk</a></li>
                        <li><a href="/admin">Lihat Data Pupuk</a></li>
                    </ul>
                </li>
                <li><a href="/admin/pemesanan">Pemesanan</a></li>
                <li><a href="/admin/pelanggan">Pelanggan</a></li>
                <li><a href="/logout" class="glyphicon glyphicon-off" onclick="return confirm('Anda akan logout?')"
                       style="margin-top: -3px"></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>