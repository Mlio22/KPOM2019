<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrator2</title>
    <link rel="stylesheet" href="../../../public/assets for admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/assets for admin/css/tambah.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">ADMIN KPOM 2018 / 19</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-left">
                    <li role="presentation"><a href="daftar.php" target="_self">DAFTAR PESERTA</a></li>
                    <li class="active" role="presentation"><a class="text-uppercase" href="#">Tambah Peserta</a></li>
                    <li role="presentation"><a href="#">Nav Item</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a class="text-uppercase" href="#"><strong>Logout </strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <form id="formTambah" action="helper/tambahkan.php" method="post" class="form">
            <h2 class="text-center text-success bg-info">Tambah Peserta</h2><span class="label label-default label">Nama Lengkap</span>
            <input class="form-control input-sm" type="text" name="namaLengkap" id="namaLengkap" required="" placeholder="Tuliskan Nama Lengkap disini..." autofocus=""><span class="label label-default">Kelas </span>
            <select id="pilihan" class="form-control" value="Pilih Kelas" required="" name="pilihan">
                <optgroup label="X">
                    <option value="X MIA 1">X MIA 1</option>
                    <option value="X MIA 2">X MIA 2</option>
                    <option value="X MIA 3">X MIA 3</option>
                    <option value="X IIS 1">X MIA 4</option>
                    <option value="X IIS 2">X IIS</option>
                </optgroup>
                <optgroup label="XI">
                    <option value="XI MIA 1">XI MIA 1</option>
                    <option value="XI MIA 2">XI MIA 2</option>
                    <option value="XI MIA 3">XI MIA 3</option>
                    <option value="XI IIS 1">XI IIS 1</option>
                    <option value="XI IIS 2">XI IIS 2</option>
                </optgroup>
                <optgroup label="XII">
                    <option value="XII MIA 1">XII MIA 1</option>
                    <option value="XII MIA 2">XII MIA 2</option>
                    <option value="XII MIA 3">XII MIA 3</option>
                    <option value="XII MIA 4">XII IIS 1</option>
                    <option value="XII IIS">XII IIS 2</option>
                </optgroup>
                <optgroup label="DLL">
                  <option value="Guru Dan Karyawan"> Guru Dan Karyawan </option>
                  <option value="0" selected="">Pilih Kelas</option>
                </optgroup>
            </select>
            <span class="label label-default">Username </span>
            <input id="username" class="form-control input-sm" type="text" name="username" required="" placeholder="Masukkan Username disini..." autofocus="">
            <span class="label label-default">Password </span>
            <input id="password" class="form-control input-sm" type="password" name="password" required="" placeholder="Masukkan Password disini..." autofocus="">
            <button class="btn btn-primary tombol" type="submit">Tambah! </button>
        </form>
    </div>
    <div class="message" id="Message-success">Berhasil Terdaftar</div>
    <div class="message" id="Message-failed">Berhasil Terdaftar</div>
    <script src="../../../public/assets for admin/js/jquery.min.js"></script>
    <script src="../../../public/assets for admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../public/assets for admin/js/tambah.js"></script>
</body>

</html>
