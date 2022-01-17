<?php
include('connection.php');

if (isset($_POST['login'])) {
    session_start();
    $usern = $_POST['staffid'];
    $passw = $_POST['password'];
    $_SESSION['admin'] = '';
    $_SESSION['staff'] = '';
    $_SESSION['admin_password'] = '';
    $_SESSION['staff_password'] = '';

    $sql = "SELECT * FROM HR_ADMIN WHERE ID = $usern AND entry_password = $passw;";
    $sql1 ="UPDATE HR_ADMIN SET lastseen = CURRENT_TIME, lastlogout = CURRENT_TIME  WHERE ID = $usern AND entry_password = $passw;";
    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql1);
    $sql2 = "SELECT * FROM AUTH WHERE StafID = $usern AND login_password = $passw;";
    $sql3 ="UPDATE AUTH SET last_seen = CURRENT_TIME, last_logout = CURRENT_TIME  WHERE StafID = $usern AND login_password = $passw;";
    $result2 = mysqli_query($con, $sql2);
    $result3 = mysqli_query($con, $sql3);
    if($result3){
        if($result2->num_rows > 0){
         while($row = $result2->fetch_assoc()){
            if($row['StafID'] = $usern && $row['login_password'] = $passw){
                $_SESSION['staff'] = htmlentities($usern);
                $_SESSION['staff_password'] = htmlentities($passw);
                $_SESSION['last_login_timestamp'] = htmlentities(time());
                header("location: ../info/staff/index.php");
             }else {
                header('location:../login.php?Error= Credentials are Incorrect or not In Existence, Try Again');
             }
        }
        }else {
            header('location:../login.php?Error= Credentials are Incorrect or not In Existence, Try Again');
        }
    }
    if($result1){
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($row['ID'] = $usern && $row['entry_password'] = $passw){
                    $_SESSION['admin'] = htmlentities($usern);
                    $_SESSION['admin_password'] = htmlentities($passw);
                    $_SESSION['last_login_timestamp'] = htmlentities(time());
                    header("location: ../info/admin/index.php");
                }
            }
        }
    }

    if(!$result1 && !$result3){
        header('location:../login.php?Error= Credentials are Incorrect or not In Existence, Try Again');
    }

}

// My errors
// Forgot to require once for loginUser in login.php
// the $con variable in the mysqli_connect was different from that in the if statements
// check the result variable for the seocnd query for the staff
?>


