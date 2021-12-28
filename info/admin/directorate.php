<?php
  require_once('../../backend/session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <?php include('../../frontend/head.php')?>
<title>MOE - HR | Data Tables</title>
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
            <div class="box-body">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT Directorate_ID,CONCAT_WS(' ',Lname,Mname,Fname) AS Name,
              Directorate_Name 
              FROM STAFF,DIRECTORATE WHERE `Staff_ID` = `Directorate_Head_ID`";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Directorate ID</th>
                  <th>Head of Directorate</th>
                  <th>Name of Directorate</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
                <a>
                  <tr class='clickable-row' data-href='directoratemembers.php?directorate_id=<?php echo $row['Directorate_ID']?>' style="cursor: pointer;">
                    <td data_id="<?php echo $row['Directorate_ID']?>" id="<?php echo $row['Directorate_ID']?>"><?php echo $row['Directorate_ID']?></td>
                    <td data_id="<?php echo $row['Directorate_ID']?>" id="<?php echo $row['Directorate_ID']?>"><?php echo $row['Name']?></td>
                    <td data_id="<?php echo $row['Directorate_ID']?>" id="<?php echo $row['Directorate_ID']?>"><?php echo $row['Directorate_Name']?></td>
                  </tr>
                </a>
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
                <th>Directorate ID</th>
                  <th>Head of Directorate</th>
                  <th>Name of Directorate</th>
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
  });
  jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
</body>
</html>
