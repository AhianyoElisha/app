<?php
include('../../backend/connection.php');
if (isset($_POST['disable'])) {
    $admin = $_POST['admin_id'];
    $usern = $_POST['staffid'];
    $reason = $_POST['reason'];
    $sql = "SELECT Fname, Lname FROM HR_ADMIN WHERE ID = $admin";
    $result = mysqli_query($con, $sql);
    $admin_fname ="";
    $admin_lname ="";
    if ($result) {
    foreach ($result as $row) {
        $admin_fname = $row['Fname'];
        $admin_lname = $row['Lname'];
    }
        $query1 = "UPDATE STAFF SET `Disable` = 1 WHERE `Staff_ID`= '$usern'";
        $query2 = "INSERT INTO DISABLE_ACCESS  (`Admin_ID`,`Admin_Fname`,`Admin_Lname`,`Staff_disabled`,`reason`)  VALUES ($admin,'$admin_fname','$admin_lname',$usern,'$reason');";
        $query_run1 = mysqli_query($con,$query1);
        $query_run2 = mysqli_query($con,$query2);
        if ($query_run1) {
            if ($query_run2) {
                $_SESSION['message'] = 1;
                header("location:staff.php");
            }else {
                echo "INSERT INTO DISABLE_ACCESS  (`Admin_ID`,`Admin_Fname`,`Admin_Lname`,`Staff_disabled`,`reason`)  VALUES ($admin,'$admin_fname','$admin_lname',$usern,'$reason');";
            }
        }else {
            echo "INSERT INTO DISABLE_ACCESS  (`Admin_ID`,`Admin_Fname`,`Admin_Lname`,`Staff_disabled`,`reason`)  VALUES ($admin,'$admin_fname','$admin_lname',$usern,'$reason');";
        }
    }else {
        echo "INSERT INTO DISABLE_ACCESS  (`Admin_ID`,`Admin_Fname`,`Admin_Lname`,`Staff_disabled`,`reason`)  VALUES ($admin,'$admin_fname','$admin_lname',$usern,'$reason');";
    }
}
// session_start();
// include('../../backend/connection.php');
// if (isset($_POST['disable'])) {
//     $id = $_POST['disable_id'];
//     $sql= "UPDATE STAFF SET `Disable` = 1 WHERE `Staff_ID`= $id";
//     $result = mysqli_query($con,$sql);
//     if ($result) {
//         $_SESSION['disable'] = 1;
//         header("location:staff.php");
//     }
// }
if (isset($_POST['enable'])) {
    $id = $_POST['disable_id'];
    $sql= "UPDATE STAFF SET `Disable` = 0 WHERE `Staff_ID`= $id";
    $result = mysqli_query($con,$sql);
    if ($result) {
        $_SESSION['enable'] = 1;
        header("location:staff.php");
    }
}
?>