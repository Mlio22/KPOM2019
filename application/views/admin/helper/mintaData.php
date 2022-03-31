<?php
    include('mysql_connect.php');
    $input = $_GET['input'];
    $query = "SELECT * FROM `pemilih` WHERE username = '$input';";        

    // $json = array();

    $hasil = mysqli_query($koneksi,$query);
    while($data = mysqli_fetch_assoc($hasil)){
        $json[] = $data;
    }
    $json = json_encode($json);
    echo $json;
?>