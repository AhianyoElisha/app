<?php
  require_once('../../backend/session.php');
  $usern = $_SESSION['admin'];
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
        <li class="active">Directorate</li>
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
              Directorate_Name,profile 
              FROM STAFF,DIRECTORATE WHERE `Staff_ID` = `Directorate_Head_ID`";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center">Profile</th>
                  <th class="text-center">Head of Directorate</th>
                  <th class="text-center">Name of Directorate</th>
                  <th class="text-center">Change Director</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
                <a>
                  <tr style="cursor: pointer;">
                    <td data_id="<?php echo $row['Directorate_ID']?>" id="<?php echo $row['Directorate_ID']?>">
                      <img class="profile-user-img img-responsive img-circle" style="width:70px;height:70px" src="../../uploads/<?php echo $row['profile']?>" alt="User profile picture">
                    </td>
                    <td data_id="<?php echo $row['Directorate_ID']?>" id="<?php echo $row['Directorate_ID']?>" style="vertical-align:middle;" class="text-center">
                      <?php echo $row['Name']?>
                    </td>
                    <td data_id="<?php echo $row['Directorate_ID']?>" id="<?php echo $row['Directorate_ID']?>" style="vertical-align:middle;" class="text-center">
                      <?php echo $row['Directorate_Name']?>
                    </td>
                    <td data_id="<?php echo $row['Directorate_ID']?>" id="<?php echo $row['Directorate_ID']?>" style="vertical-align:middle;margin-right:auto">
                    <button type="submit" class="btn btn-success pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Directorate_ID']?>" style="margin:2px"><i class="fa fa-pencil"></i>
                        Change
                      </button>
                      <form action="directoratemembers.php" method="post">
                        <input type="hidden" name="directorate_id" value ='<?php echo $row['Directorate_ID']?>'>
                      <button type="submit" name="more" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th class="text-center">Profile</th>
                  <th class="text-center">Head of Directorate</th>
                  <th class="text-center">Name of Directorate</th>
                  <th class="text-center">Change Director</th>
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
            <div class="modal-content">
    			</div>
    		</div>
            </div>
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
                <h3>Staff Disabled</h3>
                <div class="form-group">
                <img src="../../dist/img/close-circle.svg" alt="" style="width:50%">
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
<!-- page script -->
<script>
      $('.openModal').click(function(){
      var id = $(this).attr('data-id');
      var admin = $(this).attr('id');
      $.ajax({url:"change.php?id="+id+"&admin="+admin,cache:false,success:function(result){
          $(".make-change").html(result);
      }});
    });
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
