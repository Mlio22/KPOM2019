<?php
    include ('helper/mysql_connect.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrator</title>
    <link rel="stylesheet" href="../../../public/assets for admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/assets for admin/css/ubah.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">ADMIN KPOM 2018 / 19</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active" role="presentation"><a href="#">DAFTAR PESERTA</a></li>
                    <li role="presentation"><a href="tambah.php">Tambah Peserta</a></li>
                    <li role="presentation"><a href="#">Nav Item</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a class="text-uppercase" href="admin.php"><strong>Logout </strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="container">
        <h2 class="text-uppercase text-center text-danger bg-danger" id="judul">eDIT DATA</h2>
        <p class="text-center">Tuliskan Salah Satu data (Nama Lengkap, Username, dan Password) lalu tekan cari dan Silahkan Mengedit Data</p>
        <form id="input" method="post" action="ubah2.php">
            <input id="apa" class="form-control input" type="text" name="masukan" required="" placeholder="masukkan username, nama lengkap, atau password disini" autofocus="" id="masukan">
            <button class="btn btn-primary" name="mintaData" type="submit" id="kirimData">Cari! </button>
        </form>
    </div>
    <form id="keluaran" method="post">
        <input class="form-control input" type="text" name="namaLengkapx">
        <input class="form-control input" type="text" name="usernamex">
        <input class="form-control input" type="text" name="passwordx">
        <select id="kelasx" class="form-control" value="Pilih Kelas" required>
            <optgroup label="X">
                <option value="01">X MIA 1</option>
                <option value="02">X MIA 2</option>
                <option value="03">X MIA 3</option>
                <option value="04">X IIS 1</option>
                <option value="05">X IIS 2</option>
            </optgroup>
            <optgroup label="XI">
                <option value="12">XI MIA 1</option>
                <option value="13">XI MIA 2</option>
                <option value="13">XI MIA 3</option>
                <option value="14">XI IIS 1</option>
                <option value="15">XI IIS 2</option>
            </optgroup>
            <optgroup label="XII">
                <option value="21">XII MIA 1</option>
                <option value="22">XII MIA 2</option>
                <option value="23">XII MIA 3</option>
                <option value="24">XII MIA 4</option>
                <option value="25">XII IIS</option>
                <option value="0" selected>Pilih Kelas</option>
            </optgroup>
        </select>
        <input class="form-control input" type="text" name="tokenOsimx">
        <input class="form-control input" type="text" name="TokenMpsx">
        <button class="btn btn-primary" type="submit" id="kirimData">Edit! </button>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../public/assets for admin/js/admin.js"> </script>
</body>

</html>