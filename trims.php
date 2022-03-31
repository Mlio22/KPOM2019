<?php
    session_start();
    include ('application/controllers/mysql_connect.php');

    if(!isset($_SESSION['username'])){
        header('location: index.php');
    }
    else{
        $_SESSION['username'] = '';
        unset($_SESSION['username']);
        session_destroy();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komisi Pemilihan Osim Mps</title>
    <link rel="stylesheet" href="public/assets for Kposis & Kpomps/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets for Kposis & Kpomps/css/styles.css">
    <link rel="stylesheet" href="public/assets for Kposis & Kpomps/css/style2.css">
    <link rel="stylesheet" href="public/assets for Kposis & Kpomps/css/trims.css">

</head>
<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand text-uppercase navbar-link" href="#"></a>
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
    </div>
</nav>
<div id="kontainer">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="TempatTulisan">
            <h1 id="TulisanKpom">KPOM 2018</h1>
            <h4 id="Tulisan">"Gunakan Hak Suaramu Dengan Bijak"</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hidden-xs hidden-sm" id="TempatLogo">
            <img class="hidden-xs hidden-sm" src="public/assets for Kposis & Kpomps/img/Kemenag.png" id="LogoKemenag">
            <img class="hidden-xs hidden-sm" src="public/assets for Kposis & Kpomps/img/icj.png" id="LogoIcj">
            <img class="hidden-xs hidden-sm" src="public/assets for Kposis & Kpomps/img/logOsim.png" id="LogoBn">
        </div>
    </div>
</div>
<hr id="garis">

<div id="konten">
    <h3>Terima kasih karena telah memilih dengan bijak</h3>
    <p> Halaman ini akan auto-redirect ke halaman login dalam </p>
    <h1 id="countdown"></h1>
</div>
</body>
<script src="public/assets for Kposis & Kpomps/js/jquery.min.js"></script>
<script src="public/assets for Kposis & Kpomps/js/countdown.js"></script>

</html>


