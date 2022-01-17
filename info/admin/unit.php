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
  <div class="content-wrapper" style="padding-top: 50px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Units tables</li>
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
              $query = "SELECT * FROM UNIT, DIRECTORATE WHERE Directorate_ID = DirID";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example1" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Unit</th>
                  <th>Directorate</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" data-href="" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Unit_ID']?>" id="<?php echo $row['Unit_ID']?>"><?php echo $row['Unit_Name']?></td>
                  <td data_id="<?php echo $row['Unit_ID']?>" id="<?php echo $row['Unit_ID']?>"><?php echo $row['Directorate_Name']?></td>
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
                  <th>Unit</th>
                  <th>Directorate</th>
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
