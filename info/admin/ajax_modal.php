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
    <h4 class="modal-title" id="myModalLabel">Reset Staff Password</h4>
</div>
<div class="modal-body">
    <div class="login-box" style="width:100%">
        <!-- /.login-logo -->
        <p class="login-box-msg"><label style="margin-right:5px">Staff ID :</label><?php echo $selrow[ 'Staff_ID']?></p>
        <div class="login-box-body" id="div1">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
                <div class="row">
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
                            <p>Enter new password:</p>
                            <input type="password" class="form-control" id="password2" name="new_password"  placeholder="Password" required>
                            <i id="togglePassword2" class="fa fa-eye fa-eye-slash" style="position:absolute;right:10px;top:40px"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <p>Re-enter new password:</p>
                            <input type="password" class="form-control" id="password3" name="re_enter_new_password"  placeholder="Password" required>
                            <i id="togglePassword3" class="fa fa-eye fa-eye-slash" style="position:absolute;right:10px;top:40px"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" style="margin-left:10px;" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                    <button type="submit" name="reset_staff" class="btn btn-primary btn-flat pull-right">Reset Password</button>
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
</div>
<script>
const togglePasswor2 = document.querySelector('#togglePassword2');
const togglePassword3 = document.querySelector('#togglePassword3');
const password2 = document.querySelector('#password2');
const password3 = document.querySelector('#password3');
togglePassword2.addEventListener('click',function (e) {
    const type = password2.getAttribute('type') === 'password'? 'text': 'password';
    password2.setAttribute('type',type);
    this.classList.toggle('fa-eye-slash');
    
});
togglePassword3.addEventListener('click',function (e) {
    const type = password3.getAttribute('type') === 'password'? 'text': 'password';
    password3.setAttribute('type',type);
    this.classList.toggle('fa-eye-slash');
    
});
</script>
<?php
include('../../backend/connection.php');
if (isset($_POST['reset_staff'])) {
    $admin = $_POST['admin_id'];
    $usern = $_POST['staffid'];
    $passw = $_POST['new_password'];
    $repassw = $_POST['re_enter_new_password'];
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
        $query1 = "UPDATE `AUTH` SET `login_password`= '$passw' WHERE `StafID`= '$usern'";
        $query2 = "INSERT INTO HR_ADMIN_ACCESS  (`Admin_ID`,`Fname`,`Lname`,`change_made_on`,`changed_password_to`)  VALUES ($admin,'$admin_fname','$admin_lname',$usern,'$passw');";
        $query_run1 = mysqli_query($con,$query1);
        $query_run2 = mysqli_query($con,$query2);
        if ($query_run1) {
        if ($query_run2) {
            $_SESSION['message'] = 1;
            header("location:auth.php");
        }
        }
    };
    }
}

?>