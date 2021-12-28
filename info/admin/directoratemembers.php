<?php
  include('../../backend/session.php');
  $directorate = $_GET['directorate_id'];
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
    <?php include('add.php')?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-top: 50px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Staff</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
          <button type="button" class="btn btn-success" style="margin:10px" href="#addModal" 
          data-toggle="modal" data-target="#addModal" class="btn btn-success pull-right editbtn">
          <i class="fa fa-pencil"></i> Add New
              </button>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF_DETAIL WHERE Direct_ID = $directorate";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example1" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Staff Name</th>
                  <th>Directorate</th>
                  <th>Current Grade</th>
                  <th>Details/ Update /Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
                <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_name']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Directorate_Name']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Current_Grade']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <form action="../admin/detail.php" method="post">
                    <button type="submit" name="disable" class="btn btn-danger pull-right" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                  </form>
                  <form action="../admin/detail.php" method="post">
                    <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px"><i class="fa fa-file"></i>
                    Detail
                    </button>
                  </form>
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
                <th>Staff ID</th>
                  <th>Staff Name</th>
                  <th>Directorate</th>
                  <th>Current Grade</th>
                  <th>Details/ Update /Disable</th>
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
<?php 
  if (isset($_POST[''])) {
    # code...
  }
?>
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
