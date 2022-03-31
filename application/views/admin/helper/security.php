<?php
  include ('mysql_connect.php');
  $mode = $_GET['mode'];

  $query = "SELECT * FROM `pemilih` WHERE (tokenOsim=0 OR tokenMps=0) ORDER BY {$mode} ;";
  $json = array();

  $hasil = mysqli_query($koneksi,$query);
  while($data = mysqli_fetch_assoc($hasil)){
    $json[] = $data;
  }

  $json = json_encode($json);
  echo $json;

 ?>
