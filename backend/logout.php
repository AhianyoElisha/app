<?php
include('connection.php');
session_start();
$usern =$_SESSION['staff'];
$passw = $_SESSION['staff_password'];

$admin = $_SESSION['admin'];
$passa = $_SESSION['admin_password'];
if (isset($_GET['logout_staff'])) {
    # code...
    $sql3 ="UPDATE AUTH SET last_logout = CURRENT_TIME  WHERE StafID = $usern AND login_password = $passw;";
    $result3 = mysqli_query($con, $sql3);
    if($result3){
        session_destroy();
    header("location:../login.php");
    }
    else {
        echo 'staff error';
    }
}


if (isset($_GET['logout'])) {
    # code...
    $sql1 ="UPDATE HR_ADMIN SET lastlogout = CURRENT_TIME  WHERE ID = $admin AND entry_password = $passa;";
    $result1 = mysqli_query($con, $sql1);
    if($result1){
        session_destroy();
        header("location:../login.php");
    }
    else {
        echo 'admin error';
    }
}

?>