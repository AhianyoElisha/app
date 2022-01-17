<?php
  include('../../backend/session.php');
  header("Cache-Control: no cache");
  $admin = $_SESSION['admin'];
  if (isset($_SESSION['message'])==1) {
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 15; URL=$url1");
  }
?>
<!DOCTYPE html>
<html>
<head>
<?php include('../../frontend/head.php')?>
  <title>MOE - HR | User Authentication</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include('../../frontend/header.php')?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('../../frontend/left-aside.php')?>
  <?php include('authmodal.php')?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-top:50px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../uploads/user-profile-svgrepo-com.svg" alt="User profile picture">

              <h3 class="profile-username text-center">Human Resourse Management</h3>
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM HR_ADMIN WHERE ID = $admin";
              $query_run = mysqli_query($con,$query);
              foreach ($query_run as $row) {
              ?>
              <p class="text-muted text-center">Account managed by <?php echo $row['Fname'];?>
              <?php echo $row['Lname'];?></p>
                <?php
              }
                ?>
              <a data-toggle="modal" data-target="#authModalAdmin" class="btn btn-primary btn-block"><b>Change Admin Details</b></a>
              <p class="text-muted">Note that admin authentication is required to change staff paasword.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change Staff Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a data-toggle="modal" data-target="#authModalStaff" class="btn btn-primary btn-block"><b>Change Staff Details</b></a>

              <p class="text-muted">Note that admin authentication is required to change staff paasword.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box" style="display:none;" id="staffpass">
            <h3 style="margin-left:10px">Change Staff Password</h3>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF_DETAIL";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example1" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th class="text-center">Staff ID</th>
                  <th class="text-center">Staff Name</th>
                  <th class="text-center">Update Password</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  if ($query_run) {
                    foreach ($query_run as $row) {
                  ?>
              <tr class="clickable-row" style="cursor: pointer;" >
                  <td class="text-center" data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td class="text-center" data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_name']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                    <a name="detail" class="btn btn-primary btn-flat openModal" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:auto;text-decoration:none;display:block;width:90px;"><i class="fa fa-pencil"></i>
                    Change
                    </a>
                  </td>
                </tr>
                <?php
                      }
                    }
                    else
                    {
                      echo "Error ";
                    };
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th class="text-center">Staff ID</th>
                  <th class="text-center">Staff Name</th>
                  <th class="text-center">Update Password</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box" style="display:none;" id="adminpass">
            <h3 style="margin-left:10px">Change Admin Password</h3>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT ID, CONCAT_WS(' ',Fname,Lname) AS Admin_name FROM HR_ADMIN";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example3" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th class="text-center">Admin ID</th>
                  <th class="text-center">Admin Name</th>
                  <th class="text-center">Update Password</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  if ($query_run) {
                    foreach ($query_run as $row) {
                  ?>
              <tr class="clickable-row" style="cursor: pointer;" >
                  <td class="text-center" data_id="<?php echo $row['ID']?>" id="<?php echo $row['ID']?>"><?php echo $row['ID']?></td>
                  <td class="text-center" data_id="<?php echo $row['ID']?>" id="<?php echo $row['ID']?>"><?php echo $row['Admin_name']?></td>
                  <td class="text-center" data_id="<?php echo $row['ID']?>" id="<?php echo $row['ID']?>">
                  <a name="detail" class="btn btn-primary btn-flat openModalAdmin" data-toggle="modal" data-target="#myModalAdmin" data-id="<?php echo $row['ID']?>" style="margin:auto;text-decoration:none;display:block;width:90px;"><i class="fa fa-pencil"></i>
                    Change
                    </a>
                  </td>
                </tr>
                <?php
                      }
                    }
                    else
                    {
                      echo "Error ";
                    };
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th class="text-center">Admin ID</th>
                  <th class="text-center">Admin Name</th>
                  <th class="text-center">Update Password</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box" id="staffNothing">
            <h3 style="margin-left:10px">Change Staff Password</h3>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <table id="example2" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th class="text-center">Staff ID</th>
                  <th class="text-center">Staff Name</th>
                  <th class="text-center">Update Password</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                  <th class="text-center">Staff ID</th>
                  <th class="text-center">Staff Name</th>
                  <th class="text-center">Update Password</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box" id="adminNothing">
            <h3 style="margin-left:10px">Change Admin Password</h3>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <table id="example4" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th class="text-center">Admin ID</th>
                  <th class="text-center">Admin Name</th>
                  <th class="text-center">Update Password</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                  <th class="text-center">Admin ID</th>
                  <th class="text-center">Admin Name</th>
                  <th class="text-center">Update Password</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div style="margin-top:5%;" class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content make-change"></div>
        </div>
      </div>
      <div style="margin-top:5%;" class="modal " id="myModalAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content make-change-admin"></div>
        </div>
      </div>
      <div style="margin-top:5%;" class="modal " id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:60%;margin:auto;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body text-center">
                <h3>Update Successful</h3>
                <div class="form-group">
                <img src="../../dist/img/checkmark-circle.svg" alt="" style="width:50%">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" style="margin-left:10px;" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('../../frontend/footer.php')?>

  <!-- Control Sidebar -->
  <?php include('../../frontend/right-aside.php')?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php include('../../frontend/js.php')?>
<script>

  $('.openModal').click(function(){
      var id = $(this).attr('data-id');
      var admin = $(this).attr('id');
      $.ajax({url:"ajax_modal.php?id="+id+"&admin="+admin,cache:false,success:function(result){
          $(".make-change").html(result);
      }});
  });
  $('.openModalAdmin').click(function(){
      var id = $(this).attr('data-id');
      var admin = $(this).attr('id');
      $.ajax({url:"ajax_modal_admin.php?id="+id+"&admin="+admin,cache:false,success:function(result){
          $(".make-change-admin").html(result);
      }});
  });
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable()
    $('#example3').DataTable()
    $('#example4').DataTable()
  });
  <?php
      if (isset($_SESSION['message'])==1) {
        echo "$('#successModal').modal('show');";   
        unset($_SESSION['message']);
      }
    if (isset($_GET['success'])) {
      
    }
        include('../../backend/connection.php');
        if (isset($_POST['allow_staff'])) {
          $usern = $_POST['staffid'];
          $passw = $_POST['password'];
          $sql = "SELECT * FROM HR_ADMIN WHERE ID = $usern AND entry_password = $passw;";
          $result = mysqli_query($con, $sql);
          if ($result) {
            echo "
            document.getElementById('staffpass').style.display = \"inherit\";
            document.getElementById('staffNothing').style.display = \"none\";
            var els = document.getElementsByClassName(\"openModal\");
            for (var i=0; i < els.length; i++) {
                els[i].setAttribute(\"id\", \"$usern\");
            }
            ";
          }
        }
        if (isset($_POST['allow_admin'])) {
          $usern = $_POST['staffid'];
          $passw = $_POST['password'];
          $sql1 = "SELECT * FROM HR_ADMIN WHERE ID = $usern AND entry_password = $passw;";
          $result1 = mysqli_query($con, $sql1);
          if($result1){
            echo "
            document.getElementById('adminpass').style.display = \"inherit\";
            document.getElementById('adminNothing').style.display = \"none\";
            var els = document.getElementsByClassName(\"openModalAdmin\");
            for (var i=0; i < els.length; i++) {
                els[i].setAttribute(\"id\", \"$usern\");
            }
            ";
          }
        }
      ?>
</script>
</body>
</html>
