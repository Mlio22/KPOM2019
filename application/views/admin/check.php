<?php
  // if(isset($_SESSION['admin'])){
  //   header('admin.php');
  // }

  include ('helper/mysql_connect.php');

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrator</title>
    <link rel="stylesheet" href="../../../public/assets for admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/assets for admin/css/daftar.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">ADMIN KPOM 2018 / 19</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-left">
                    <li role="presentation"><a href="daftar.php">DAFTAR PESERTA</a></li>
                    <li role="presentation"><a href="tambah.php" target="_blank">Tambah Peserta</a></li>
                    <li class="active" role="presentation"><a href="#">Security Check</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a class="text-uppercase" href="helper/logout.php"><strong>Logout </strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="tempatTabel">
        <h2 class="text-uppercase text-center bg-info" id="urutan">Urutan Berdasarkan <span id="mode"> ID </span></h2>
        <div class="table-responsive tabel">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama </th>
                        <th>Kelas </th>
                        <th>Username </th>
                        <th>Password </th>
                        <th>Status Pemilihan OSIM</th>
                        <th>Status Pemilihan MPS</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    <tr>
                        <td>Muhammat Lio Pratama</td>
                        <td>XII MIA 2</td>
                        <td>lioa </td>
                        <td>220801nhs </td>
                        <td>Sudah Memilih (1)</td>
                        <td>Sudah Memilih (2)</td>
                    </tr>
                    <tr>
                        <td>Ega Kurnianto</td>
                        <td>XII IIS</td>
                        <td>ega </td>
                        <td>220801 </td>
                        <td>Belum Memilih (0)</td>
                        <td>Belum Memilih (0)</td>
                    </tr>
                </tbody> -->

                <tbody id="hasil">
                </tbody>
            </table>
        </div>
        <p>Urut Berdasarkan</p>
        <select name="urutan" id="urutanLain" class="selector">
            <option value="id"  selected="">ID</option>
            <option value="nama_lengkap" >Nama</option>
            <option value="kelas" >Kelas</option>
        </select>
        <a class="btn btn-primary" role="button" href="Ubah.php" target="_blank">Ubah Data</a>
        <a class="btn btn-danger" role="button" href="Ubah.php" target="_blank">Hapus Data</a>
    </div>
    <script src="../../../public/assets for admin/js/jquery.min.js"></script>
    <script src="../../../public/assets for admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../public/assets for admin/js/check.js"></script>
</body>

</html>
