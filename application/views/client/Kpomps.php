<?php
  session_start();
  include ('mysql_connect.php');

  if(!isset($_SESSION['username'])){
    header('location: login.php');
  }

  if(isset($_POST['submit'])){
    $pil = $_POST['submit'];
    $username = $_SESSION['username'];
    $query = "UPDATE `pemilih` SET tokenMps = 0, pilihanMps = '$pil' WHERE username = '$username';";
    $hasil = mysqli_query($koneksi,$query);
  }

  $username = $_SESSION['username'];
  $query = "SELECT * FROM `pemilih` WHERE username = '$username' AND tokenMps = 1;";
  $hasil = mysqli_query($koneksi,$query);

  if(mysqli_num_rows($hasil) == 0){
    header('location: trims.php');
  }
  else{
    //echo "gagal";
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komisi Pemilihan Osim Mps</title>
    <link rel="stylesheet" href="../../../public/assets for Kposis/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/assets for Kposis/css/styles.css">
    <link rel="stylesheet" href="../../../public/assets for Kposis/css/style2.css">
    <link rel="stylesheet" href="../../../public/assets for Kposis/css/animate.css">
</head>

<body id="halaman">
  <div id="konfirmasi">
    <div id="confirmBox">
      <span class="close" onclick="dakJadi()">&times;</span>
      <h1 id="peringatan">Konfirmasi</h1>
      <p id="nama"> apakah anda yakin memilih <span id="nama2"> </span> sebagai <strong> ketua dan wakil ketua Mps </strong> </p>
      <form method="post" target="_self" action="Kpomps.php">
        <button class="btn btn-primary confirm" type="submit" id="submit" name="submit" value="">Pilih!</button>
      </form>
    </div>
  </div>


    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand text-uppercase navbar-link" href="#">KPOM 2018 / 2019</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a class="hidden-xs" href="#">Halo, <?php if(isset($_SESSION['username'])){echo ($_SESSION['username']);} ?> </a></li>
                    <li role="presentation"><a class="text-danger" href="helper/logout.php">Logout </a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="kontainer">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="TempatTulisan">
                <h1 id="TulisanKpom">KPOM 2018</h1>
                <h4 id="Tulisan">"Gunakan Hak Suaramu Dengan Bijak"</h4></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hidden-xs hidden-sm" id="TempatLogo"><img class="hidden-xs hidden-sm" src="../../../public/assets for Kposis/img/Kemenag.png" id="LogoKemenag"><img class="hidden-xs hidden-sm" src="../../../public/assets for Kposis/img/icj.png" id="LogoIcj"><img class="hidden-xs hidden-sm" src="../../../public/assets for Kposis/img/logOsim.png" id="LogoBn"></div>
        </div>
        <hr id="garis">
        <div id="konten">
            <div class="container">
                <h2 class="text-center" id="TulisanKandidat">KANDIDAT </h2>
                <h3 class="text-uppercase text-center">Calon Ketua dan Wakil Ketua MPS 2018 / 2019</h3>
                <div id="TempatFoto">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-md-offset-3 col-sm-12 col-xs-12 FotoTulisan" id="FotoPertama" onclick="terpilih2(0)" onmouseover="jelaskan(0,'t1')" onmouseout="blurkan(this.id,'t1')">
                          <div class="places" id="one">
                            <p class="TulisanCalon" id="t1">lio</p>
                        </div>
                      </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-12 col-xs-12 FotoTulisan" onclick="terpilih2(1)" onmouseover="jelaskan(1,'t2')" onmouseout="blurkan(this.id,'t2')">
                            <div class="places" id="two">
                            <p class="TulisanCalon" id="t2">widi</p>
                          </div>
                        </div>
                        <div class="col-md-3 col-md-offset-0 col-sm-12 col-xs-12 FotoTulisan" onclick="terpilih2(2)" onmouseover="jelaskan(2,'t3')" onmouseout="blurkan(this.id,'t3')">
                          <div class="places" id="three">
                            <p class="TulisanCalon" id="t3">ega</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="VisiMisi">
                <h3 class="text-uppercase text-center" id="HVisi"><strong>Visi </strong></h3>
                <p id="visi" >Paragraph</p>
                <h3 class="text-uppercase text-center" id="HVisi"><strong>Misi </strong></h3>
                <ul id="misi">
                    <li class="misi"></li>
                    <li class="misi"></li>
                    <li class="misi"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div id="Konfirmasi"></div> -->
    <footer id="penutup">
        <div id="DaftarNama">
            <div class="row" id="NamaNama">
                <div class="col-md-4">
                    <p>&copy KPOM 2018 - 2019</p>
                </div>
                <div class="col-md-4">
                    <p> Made By Team KPOM 2018 </p>
                </div>
                <div class="col-md-4">
                    <p>Elzafor - Efrossia - ...</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../../../public/assets for Kposis/js/jquery.min.js"></script>
    <script src="../../../public/assets for Kposis/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../public/assets for Kposis/js/index.js"></script>
</body>

</html>
