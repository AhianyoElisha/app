<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:../../login.php');
}elseif (!isset($_SESSION['staff'])) {
    header('location:../../login.php');
}elseif (isset($_SESSION['admin']) && time()-$_SESSION['last_login_timestamp'] > 3600) {
    header('location:../../backend/logout.php?logout');
}elseif (isset($_SESSION['staff']) && time()-$_SESSION['last_login_timestamp'] > 3600) {
    header('location:../../backend/logout.php?logout_staff');
}
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $_SESSION['postdata'] = $_POST;
//     unset($_POST);
//     header("Location: ".$_SERVER['PHP_SELF']);
//     exit;
// }
?>