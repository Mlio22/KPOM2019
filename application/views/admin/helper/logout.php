<?php
  session_start();

  if(isset($_SESSION['admin'])){
    $_SESSION['admin'] = '';
    unset($_SESSION['admin']);
    session_destroy();
    header('../admin.php');
  }
  else{
    header('../admin.php');
  }

 ?>
