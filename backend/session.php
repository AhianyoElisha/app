<?php
session_start();
if (!isset($_SESSION['admin'])) {
  if (time()-$_SESSION['last_login_timestamp'] > 3600) {
    # code...
    header('location:../../login.php');

  }else {
    $_SESSION['last_login_timestamp'] = time();
  }
  # code...
}

?>