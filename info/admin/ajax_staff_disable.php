<?php 
session_start();
// Get `id` from `<script></script>`
  header("Cache-Control: no cache");

$id = $_GET['id'];
$admin = $_GET['admin'];
include('../../backend/connection.php');
$sel_query=mysqli_query($con, "select * from STAFF where Staff_ID='$id'") or die(mysql_error($con)); 
$selrow=mysqli_fetch_array($sel_query,MYSQLI_ASSOC);
?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Disable Staff</h4>
</div>
<div class="modal-body">
    <div class="login-box" style="width:100%">
        <!-- /.login-logo -->
        <p class="login-box-msg"><label style="margin-right:5px">Staff ID :</label><?php echo $selrow[ 'Staff_ID'];?></p>
        <div class="login-box-body" id="div1">
            <form action="disable.php" method="post">
                <div class="row">
                <?php 
                // echo htmlentities($_SERVER['PHP_SELF'])
                ?>
                    <div class="col-lg-6">
                        <div class="form-group">
                             <img class="profile-user-img img-responsive img-circle" style="width:100px;height:100px" src="../../uploads/<?php echo $selrow[ 'profile']?>" alt="User profile picture">                   
                        </div>
                        <div class="form-group">
                            <p><label>Name : </label>
                            <?php echo $selrow[ 'Fname'];?>
                            <?php echo $selrow[ 'Mname'];?>
                            <?php echo $selrow[ 'Lname'];?></p> 
                        </div>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        <div class="form-group has-feedback">
                        <input type="hidden" name="staffid" value="<?php echo $selrow[ 'Staff_ID']?>">
                        <input type="hidden" name="admin_id" value="<?php echo $admin?>">
                            <p>Enter the reason:</p>
                            <textarea class="form-control" name="reason"  placeholder="Enter reason for disable" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" style="margin-left:10px;" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                    <button type="submit" name="disable" class="btn btn-danger btn-flat pull-right">Disable</button>
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
</div>
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
    if ($passw == $repassw) {
        $query1 = "UPDATE STAFF SET `Disable` = 1 WHERE `Staff_ID`= '$usern'";
        $query2 = "INSERT INTO DISABLE_ACCESS  (`Admin_ID`,`Admin_Fname`,`Admin_Lname`,`staff_disabled`,`reason`)  VALUES ($admin,'$admin_fname','$admin_lname',$usern,'$reason');";
        $query_run1 = mysqli_query($con,$query1);
        $query_run2 = mysqli_query($con,$query2);
        if ($query_run1) {
            if ($query_run2) {
                $_SESSION['message'] = 1;
                header("location:staff.php");
            }else {
                echo "UPDATE STAFF SET `Disable` = 1 WHERE `Staff_ID`= '$usern'";
            }
        }else {
            echo "INSERT INTO DISABLE_ACCESS  (`Admin_ID`,`Admin_Fname`,`Admin_Lname`,`staff_disabled`,`reason`)  VALUES ($admin,'$admin_fname','$admin_lname',$usern,'$reason');";
        }
    }else {
        echo "";
    }
    }
}
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

?>