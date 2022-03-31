<?php
  session_start();

  if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
  }

  if(isset($_POST['submit'])){
    $username = htmlentities(strip_tags(trim($_POST['username'])));
    $password = htmlentities(strip_tags(trim($_POST['password'])));

    $pesan = "";

    include ("helper/mysqli_connect.php");

    $username = mysqli_real_escape_string($koneksi,$username);
    $password = mysqli_real_escape_string($koneksi,$password);

    $query = "SELECT * FROM `admin` WHERE username = '$username';";
    $hasil = mysqli_query($koneksi,$query);

    if(mysqli_num_rows($hasil) == 0){
      $pesan = 'username tidak terdaftar';
    }
    else{
      $query = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password';";
      $hasil = mysqli_query($koneksi,$query);

      if(mysqli_num_rows($hasil) == 0){
        $pesan = 'password anda tidak sesuai';
        $username1 = $username;
      }
    }

    mysqli_free_result($hasil);
    mysqli_close($koneksi);

    if($pesan == ''){
      $_SESSION['admin'] = $username;
      header('location: daftar.php');
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
    <link rel="stylesheet" href='../../../public/assets for login/css/styles.css'>
    <link rel="stylesheet" href='../../../public/assets for login/bootstrap/css/bootstrap.min.css'>
  </head>

  <body style="background-color: #0f0f0f;">
  <div class="container">
        <h2 class="text-center">Silahkan Log In! (ADMIN) </h2>
        <div id="pesan" class="text-center"> <?php if(isset($pesan)){echo $pesan; $pesan="";} ?> </div>
        <form action="index.php" method="post" target="_self">
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
  </body>

</html>
