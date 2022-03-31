<?php
    include ('mysql_connect.php');
    $input = $_POST['masukkan'];
    $query = "SELECT * FROM `pemilih` WHERE username='$input';";

    $hasil = mysqli_query($koneksi,$query);

    if(!$hasil){
        $query = "SELECT * FROM `pemilih` WHERE nama_lengkap='$input';";
        $hasil = mysqli_query($koneksi,$query);
    }

    if(!$hasil){
        $query = "SELECT * FROM `pemilih` WHERE password='$input';";
        $hasil = mysqli_query($koneksi,$query);
    }
    $data = mysqli_fetch_assoc($hasil);

    $json = json_encode($data);
    echo $json;
?>