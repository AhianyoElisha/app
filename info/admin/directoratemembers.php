<?php
  include('../../backend/session.php');
  $usern = $_SESSION['admin'];
  if (isset($_POST['more'])) {
    $directorate = $_POST['directorate_id'];
  }
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
        <li><a href="directorate.php">Directorate</a></li>
        <li class="active">Staff</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-md-6">
        <a class="btn btn-app bg-success" id="formales">
          <i class="ion ion-man"></i>Males
        </a>
        <a class="btn btn-app bg-success" id="forfemales">
          <i class="ion ion-woman"></i>Females
        </a>
        <a class="btn btn-app bg-success" id="forall">
          <i class="ion ion-ios-people"></i>All
        </a>
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-success pull-right" style="margin:10px" href="#addModal" 
        data-toggle="modal" data-target="#addModal" class="btn btn-success pull-right editbtn">
          <i class="fa fa-pencil"></i> Add New
        </button>
      </div>
      <div class="row" id="all">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
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
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
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
      <div class="row" id="males" style="display: none;">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF_DETAIL WHERE Direct_ID = $directorate AND Sex = 'M'";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example3" class="table table-bordered table-striped table-hover" style="width: 100%;">
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
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
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
      <div class="row" id="females" style="display: none;">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF_DETAIL WHERE Direct_ID = $directorate AND Sex = 'F'";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example4" class="table table-bordered table-striped table-hover" style="width: 100%;">
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
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
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
      $('.openModal').click(function(){
      var id = $(this).attr('data-id');
      var admin = $(this).attr('id');
      $.ajax({url:"ajax_staff_disable.php?id="+id+"&admin="+admin,cache:false,success:function(result){
          $(".make-change").html(result);
      }});
    });
  $(function () {
    $('#example1').DataTable()
    $('#example3').DataTable()
    $('#example4').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  const all = document.getElementById('all');
  const males = document.getElementById('males');
  const females = document.getElementById('females');
  const formales = document.getElementById('formales');
  const forfemales = document.getElementById('forfemales');
  const forall = document.getElementById('forall');
  forall.addEventListener("click", switchToAll);
  forfemales.addEventListener("click",switchToFemales);
  formales.addEventListener("click",switchToMales);
  function switchToAll() {
    all.style.display="inherit";
    males.style.display="none";
    females.style.display="none";
  }
  function switchToFemales() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="inherit";
  }
  function switchToMales() {
    all.style.display="none";
    males.style.display="inherit";
    females.style.display="none";
  }
  jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
  });
</script>
</body>
</html>
