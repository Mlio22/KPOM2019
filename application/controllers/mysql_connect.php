<?php
  $koneksi = mysqli_connect("localhost","root","","kpom");

  if(!$koneksi){
    die("gagal".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
}
?>
