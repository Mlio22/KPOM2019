<?php
      session_start();
      if(isset($_SESSION['username'])){
        header('location: kposis.php');
      }
          if(isset($_GET['pesan'])){
              $pesan = $_GET['pesan'];
          }
      // apakah form telah disubmit
          if(isset($_POST['login'])){
          $username = htmlentities(strip_tags(trim($_POST['username'])));
          $password = htmlentities(strip_tags(trim($_POST['password'])));

          $pesan = "";
          $username1 = "";

          include("mysql_connect.php");

          $username = mysqli_real_escape_string($koneksi,$username);
          $password = mysqli_real_escape_string($koneksi,$password);

          $query = "SELECT * FROM `pemilih` WHERE username = '$username';";
          $hasil = mysqli_query($koneksi,$query);


          if(mysqli_num_rows($hasil) == 0){
              $pesan = "username tidak terdaftar";
          }
          else{
              $query = "SELECT * FROM `pemilih` WHERE username = '$username' AND password = '$password';";
              $hasil = mysqli_query($koneksi,$query);

              if(mysqli_num_rows($hasil) == 0){
                  $pesan = "password anda tidak sesuai";
                  $username1 = $username;
              }
          }

          mysqli_free_result($hasil);

          mysqli_close($koneksi);


          if($pesan === ""){
              $_SESSION['username'] = $username;
              header('location: kposis.php');
              // setcookie('username',$username,time()+180);
              // header("location: Kposis.php");
          }
      }

      else{
          $pesan = "";
          $username = "";
          $password = "";
      }
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../../public/assets for login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/assets for login/css/styles.css">
    <style type="text/css">
      body{
        background-image:url('../../../public/img/source/3.jpg');
      }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Silahkan Log In!</h2>
        <div id="pesan" class="text-center"> <?php if(isset($pesan)){echo $pesan;} ?> </div>
        <form action="Login.php" method="post" target="_self">
          <div class="row">
              <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                  <input class="form-control input-lg" type="text" name="username" placeholder="Username" maxlength="12" minlength="1" autofocus="" required value="<?php if(isset($username1)){echo $username1;} ?>">
              </div>
              <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 column">
                  <input class="form-control input-lg" type="password" name="password" required placeholder="Password" maxlength="20" minlength="1" autocomplete="off">
              </div>
              <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-7 col-sm-offset-3 column">
                  <button class="btn btn-primary btn-block" type="submit" id="submit" name="login">Masuk!</button>
              </div>
          </div>
      </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
