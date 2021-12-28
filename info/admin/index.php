<?php
  require_once('../../backend/session.php');
  $usern = $_SESSION['admin'];
  $passw = $_SESSION['admin_password'];
  $_SESSION['last_login_timestamp'];
?>
<?php
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 60; URL=$url1");
?>
<!DOCTYPE html>
<html>
<head>

  <title>MOE| Dashboard</title>
  <!-- <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <?php include('../../frontend/head.php')?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" >

<?php include('../../frontend/header.php')?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('../../frontend/left-aside.php')?>
  <?php
    include('../../backend/connection.php');
    $query = "SELECT COUNT(*) as total FROM STAFF";
    $query_run = mysqli_query($con,$query);
    $query1 = "SELECT COUNT(*) as total1 FROM DIRECTORATE";
    $query_run1 = mysqli_query($con,$query1);
    $query2 = "SELECT COUNT(*) as total2 FROM UNIT";
    $query_run2 = mysqli_query($con,$query2);
    $query3 = "SELECT COUNT(*) as total3 FROM STAFF WHERE Sex = 'F'";
    $query_run3 = mysqli_query($con,$query3);
    $query4 = "SELECT COUNT(*) as total4 FROM STAFF WHERE Sex = 'M'";
    $query_run4 = mysqli_query($con,$query4);
    $query5 = "SELECT COUNT(*) as total5 FROM NATIONAL_SERVICE";
    $query_run5 = mysqli_query($con,$query5);
    $query6 = "SELECT COUNT(*) as total6 FROM INTERNSHIP";
    $query_run6 = mysqli_query($con,$query6);
    $query7 = "SELECT COUNT(*) as total7 FROM LEAVE_RECORD";
    $query_run7 = mysqli_query($con,$query7);
    $query8 = "SELECT Staff_ID, Fname, Lname,last_seen,last_logout FROM AUTH, STAFF WHERE StafID = Staff_ID AND last_seen = last_logout";
    $query_run8 = mysqli_query($con,$query8);    
    $staff = 0;
    $male = 0;
    $female = 0;
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-top: 50px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
      <!-- Info boxes -->
      <div class="row">
        <a href="staff.php" style="color:black;"><div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
              <?php
                    if ($query_run) {
                      foreach ($query_run as $row) {
                        $staff = $row['total']; 
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Staff Members</span>
                <span class="info-box-number"><?php echo $row['total']?></span>
              </div>
              <!-- /.info-box-content -->
              <?php
                        }
                      }
                      else
                      {
                        echo "Error ";
                      };
                      ?>

            </div>
            <!-- /.info-box -->
          </div>
          </a>
          <!-- /.col -->
          <?php
          if ($query_run1) {
                      foreach ($query_run1 as $row) {
          ?>

        <a href="directorate.php" style="color:black;">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="ion ion-ios-folder-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Directorates</span>
                <span class="info-box-number"><?php echo $row['total1']?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            
            <?php
                        }
                      }
                      else
                      {
                        echo "Error ";
                      };
                      ?>

            <!-- /.info-box -->
          </div>
        </a>
          <!-- /.col -->
          <?php
          if ($query_run2) {
                foreach ($query_run2 as $row) {
          ?>

        <a href="unit.php" style="color:black">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="ion ion-ios-albums-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">UNITS</span>
                <span class="info-box-number"><?php echo $row['total2']?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </a>
          <!-- /.col -->
          <?php
                        }
                      }
                      else
                      {
                        echo "Error ";
                      };
                      ?>
          <!-- fix for small devices only -->
          <?php
          if ($query_run7) {
                foreach ($query_run7 as $row) {
          ?>

        <a href="leave.php" style ="color:black;" ><div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-briefcase-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">STAFF ON LEAVE</span>
              <span class="info-box-number"><?php echo $row['total7']?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      </div>
       </a> <!-- /.col -->
        <?php
                      }
                    }
                    else
                    {
                      echo "Error ";
                    };
                     ?>
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Logins</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Staff ID</th>
                    <th>Staff Name</th>
                    <th>Status</th>
                    <th>Last Login</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  if ($query_run8->num_rows > 0) {
      						  foreach ($query_run8 as $row) {
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
                  </tr>
                  <?php
                    }
                  }
                    else
                    {
                      echo '<tr>
                      <td colspan="4" style = "text-align:center">
                        <div class="sparkbar" data-color="#00a65a" data-height="20">No Staff Online</div>
                      </td>
                    </tr>';
                    };  
                     ?>
                     
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="fullstatus.php" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <?php
        if ($query_run3) {
      				foreach ($query_run3 as $row) {
                $female = $row['total3'];
                $result = round($female/$staff*100, 2);
        ?>
        <a href="females.php">
        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-woman"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">FEMALE STAFF</span>
              <span class="info-box-number"><?php echo $female?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $result?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo $result?>% Females of Total Staff
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <?php
                      }
                    }
                    else
                    {
                      echo "Error ";
                    };
                     ?>

          <!-- /.info-box -->
          <?php
        if ($query_run4) {
      				foreach ($query_run4 as $row) {
                $male = $row['total4'];
                $result1 = round($male/$staff*100, 2);
        ?>
          <a href="males.php"><div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-man"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">MALE STAFF</span>
              <span class="info-box-number"><?php echo $male?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $result1?>%"></div>
              </div>
              <span class="progress-description">
              <?php echo $result1?>% Males of Total Staff 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </a>
          <?php
                      }
                    }
                    else
                    {
                      echo "Error ";
                    };
                     ?> 
        <?php
        if ($query_run5) {
      				foreach ($query_run5 as $row) { 
        ?>                   
          <!-- /.info-box -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-bookmark"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">NATIONAL SERVICE PERSONNEL</span>
              <span class="info-box-number"><?php echo $row['total5']?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <?php
                      }
                    }
                    else
                    {
                      echo "Error ";
                    };
                     ?> 
        <?php
        if ($query_run6) {
      				foreach ($query_run6 as $row) {
        ?>
          <!-- /.info-box -->
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">INTERNS</span>
              <span class="info-box-number"><?php echo $row['total6']?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <?php
                      }
                    }
                    else
                    {
                      echo "Error ";
                    };
                     ?> 

          <!-- /.box -->

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
</body>
</html>
