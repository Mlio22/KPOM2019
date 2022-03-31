<?php
  include('mysql_connect.php');

  // if(isset($_GET['submit'])){
    $namaLengkap = $_POST['namaLengkap'];
    $kelas = $_POST['pilihan'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "penambahan  {$namaLengkap} ";


    $query = "SELECT * FROM `pemilih` WHERE username={$namaLengkap};";
    $hasil = mysqli_query($koneksi,$query);

    if($hasil){
      $pesan .= "nama lengkap {$namaLengkap} telah Digunakan!";
    }

    $query = "SELECT * FROM `pemilih` WHERE username={$username};";
    $hasil = mysqli_query($koneksi,$query);

    if($hasil){
      $pesan .= "username {$username} telah Digunakan!";
    }

    // $query = "SELECT * FROM `pemilih` WHERE username={$password};";
    // $hasil = mysqli_query($koneksi,$query);

    // if($hasil){
    //   $pesan .= "password {$password} telah Digunakan!";
    // }

    if(isset($pesan)){
      echo $pesan;
    }
    else{
      $query = "INSERT INTO `pemilih` VALUES('','$namaLengkap','$kelas','$username','$password',0,1,0,1)";
      $hasil = mysqli_query($koneksi,$query);

      if($hasil){
        echo "berhasil ditambahkan";
        // header('location: ../tambah.php');
      }
      else{
        echo "gagal ditambahkan";
        echo mysqli_error($koneksi);
      }
    }
  // }
?>
