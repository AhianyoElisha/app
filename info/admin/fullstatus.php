<?php
  include('../../backend/session.php');
  $usern = $_SESSION['admin'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>MOE - HR | Data Tables</title>
    <?php include('../../frontend/head.php')?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include('../../frontend/header.php')?>
  <!-- Left side column. contains the logo and sidebar -->
    <?php include('../../frontend/left-aside.php')?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $con = mysqli_connect($servername,$username,$password);
              $db = mysqli_select_db($con,$dbname);
              $query = "SELECT Staff_ID, Fname, Lname,last_seen,last_logout FROM AUTH, STAFF WHERE StafID = Staff_ID";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example1" class="table table-bordered table-striped table-hover" style="width: 100%;">
              <thead>
                  <tr>
                    <th>Staff ID</th>
                    <th>Staff Name</th>
                    <th>Status</th>
                    <th>Last Login</th>
                    <th>Last Logout</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
        if ($query_run) {
      							foreach ($query_run as $row) {
        ?>
                  <tr>
                    <td><?php echo $row['Staff_ID']?></td>
                    <td><?php echo $row['Fname']?> <?php echo $row['Lname']?></td>
                    <?php
                    if($row['last_seen'] === $row['last_logout']){
                    echo '<td><span class="label label-success">Online</span></td>';
                    }else {
                    echo '<td><span class="label label-danger">Offline</span></td>'; 
                    }
                    
                    ?>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo date("F j, Y, g:i a", strtotime($row['last_seen']));?></div>
                    </td>
                  <td><?php echo date("F j, Y, g:i a", strtotime($row['last_logout']));?></td>
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
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
</body>
</html>
