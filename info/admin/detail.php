<?php
  require_once('../../backend/session.php');
  $usern = $_SESSION['admin'];
  $passw = $_SESSION['admin_password'];
  $staff = '';
if (isset($_POST['detail'])) {
  $staff = $_POST['store_id'];
  $_POST = array();
}
else {
  $staff = $_GET['staff_id'];
}
$_SESSION['staff_id'] = $staff;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Staff Details | Invoice</title>
  <?php include('../../frontend/head.php')?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('../../frontend/header.php')?>
  <?php include('editmodal.php')?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('../../frontend/left-aside.php');
      include('../../backend/connection.php');
      $query = "SELECT * FROM STAFF_DETAIL WHERE Staff_ID = '$staff'"; 
      $query1 = "SELECT * FROM CHIEF_DIRECTOR_DETAIL WHERE Staff_ID = '$staff'"; 
      $query2 = "SELECT Unit_Name FROM UNIT,STAFF WHERE Staff_ID = '$staff' AND UnitID = Unit_ID"; 
      $query_run = mysqli_query($con,$query);
      $query_run2 = mysqli_query($con,$query2);
      $query_run1 = mysqli_query($con,$query1); 

      $unit = '';
      if ($query_run2->num_rows > 0) {
        foreach ($query_run2 as $row) {  
           $unit = $row['Unit_Name'];
        }
      }
if ($query_run->num_rows > 0) {
  foreach ($query_run as $row) {  
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-top: 50px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff ID
        <small><?php echo $row['Staff_ID']?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="staff.php">Staff</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>
    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom.
      </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img src="../../../LeaveForm/images/pngfind.com-education-images-png-2219758.png" alt="" style="width:25%;height:auto">
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
       <div class="col-sm-4 invoice-col">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Personal Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong>First Name</strong>

              <p class="text-muted">
              <?php echo $row['Fname']?>
              </p>

              <hr>

              <strong>Middle Name</strong>

              <p class="text-muted"><?php echo $row['Mname']?></p>

              <hr>

              <strong> Last Name</strong>

              <p class="text-muted"><?php echo $row['Lname']?></p>

              <hr>

              <strong> Date of Birth</strong>

              <p class="text-muted"><?php echo $row['DOB']?></p>
              <hr>

              <strong> Marital Status</strong>

              <p class="text-muted"><?php echo $row['Marital_Status']?></p>
              
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-sm-4 invoice-col">
        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Education/ Work Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i>Highest Qualification</strong>

              <p class="text-muted">
              <?php echo $row['Highest_Qualification']?>
              </p>

              <hr>

              <strong><i class="fa fa-phone margin-r-5"></i> Phone Number</strong>

              <p class="text-muted">+233-<?php echo $row['Phone_number']?></p>
              <hr>

              <strong><i class="fa fa-folder-open margin-r-5"></i> Directorate</strong>

              <p class="text-muted"><?php echo $row['Directorate_Name']?></p>

              <hr>
              <strong><i class="fa fa-users margin-r-5"></i> Unit</strong>

              <p class="text-muted"><?php echo $unit?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Current Grade</strong>

              <p class="text-muted"><?php echo $row['Current_Grade']?></p>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" style="width:130px;height:130px" src="../../uploads/<?php echo $row['profile']?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $row['Staff_name']?></h3>

              <p class="text-muted text-center"><?php echo $row['Current_Grade']?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                <b>Gender</b> <a class="pull-right"><?php if ($row['Sex'] =='M') {
                    echo 'Male';
                  }else {
                    echo 'Female';
                  }?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">benjamin@gmail.com</a>
                </li>
                <li class="list-group-item">
                  <b>Senior/ Junior</b> <a class="pull-right"><?php echo $row['Rank_Status']?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>    <!-- /.box-body -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Appointments</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong>Date Of First Appointment</strong>

              <p class="text-muted">
              <?php echo $row['Date_of_first_appointment']?>
              </p>

              <hr>

              <strong>Date Of Current Appointment</strong>

              <p class="text-muted"><?php echo $row['Date_of_present_appointment']?></p>

              <hr>

              <strong>Current Grade</strong>

              <p class="text-muted"> <?php echo $row['Current_Grade']?></p>

              <hr>

              <strong> Date of Birth</strong>

              <p class="text-muted"><?php echo $row['DOB']?></p>
              <hr>

              <strong> Marital Status</strong>

              <p class="text-muted"><?php echo $row['Marital_Status']?></p>
              
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Current Promotion Data</h3>
              </div>
          <?php 
                $query2 = "SELECT * FROM PROMOTION WHERE Staff_ID = '$staff'"; 
                $query_run2 = mysqli_query($con,$query2);
          if ($query_run2->num_rows >0) {
          
          
          ?>
          <div class="box-body">
              <strong>Grade Promoted From</strong>
              <p class="text-muted"><?php echo $row['Promotion_from']?></p>
              <hr>
              <strong>Date Of Promotion</strong>
              <p class="text-muted"><?php echo $row['Promotion_Date']?></p>
              <hr>

              <strong>Grade Promoted To</strong>

              <p class="text-muted"><?php echo $row['Promotion_to']?></p>

              <hr>
              <strong>Date Of Commenecent Of Office</strong>

              <p class="text-muted"><?php echo $row['Commencement_date']?></p>
            </div>
            <?php }else {?>
                        <!-- /.box-header -->
                        <div class="box-body">
              <strong>Grade Promoted From</strong>
              <p class="text-muted">N/A</p>
              <hr>
              <strong>Date Of Promotion</strong>
              <p class="text-muted">N/A</p>
              <hr>

              <strong>Grade Promoted To</strong>

              <p class="text-muted">N/A</p>

              <hr>
              <strong>Date Of Commenecent Of Office</strong>

              <p class="text-muted">N/A</p>
            </div>

            <?php
              # code...
            }?>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Current Training Data</h3>
            </div>
            <?php 
                $query3 = "SELECT * FROM TRAINING, TRAINING_TYPE WHERE Staff_ID = '$staff' AND Training_no = Training_number"; 
                $query_run3 = mysqli_query($con,$query3);
          if ($query_run3->num_rows >0) {
          
          
          ?>
            <!-- /.box-header -->
            <div class="box-body">
              <strong>Training Type</strong>

              <p class="text-muted">
              <?php echo $row['Training_name']?>
              </p>

              <hr>

              <strong>Start Date For Training</strong>

              <p class="text-muted"><?php echo $row['Start_date']?></p>

              <hr>

              <strong> End Date For Training</strong>

              <p class="text-muted"> <?php echo $row['End_date']?></p>
              
            </div>
            <!-- /.box-body -->
            <?php 
          }else {
            ?>
            <div class="box-body">
              <strong>Training Type</strong>

              <p class="text-muted">
                N/A
              </p>

              <hr>

              <strong>Start Date For Training</strong>

              <p class="text-muted">N/A</p>

              <hr>

              <strong> End Date For Training</strong>

              <p class="text-muted"> N/A</p>
              
            </div>
            <?php 
            }?>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>

      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
            <div class="box box-primary">
              <div class="box-header with-border">
              <h3 class="box-title"> Current Leave Data</h3>
              </div>
              <?php 
                $query4 = "SELECT * FROM LEAVE_RECORD, LEAVE_TYPE WHERE StffID = '$staff' AND Leave_ID = LeaveID"; 
                $query_run4 = mysqli_query($con,$query4);
          if ($query_run4->num_rows >0) {
          
          
          ?>
                <!-- /.box-header -->
                <div class="col-sm-6">
                  <div class="box-body">
                    <strong>Date Applied</strong>
                    <p class="text-muted"><?php echo $row['Date_applied']?></p>
                    <hr>
                    <strong>Home Town</strong>
                    <p class="text-muted"><?php echo $row['Home_town']?></p>
                    <hr>
                    <strong> Leave Type</strong>
                    <p class="text-muted"><?php echo $row['Leave_name']?></p>
                    <hr>
                    <strong>Number Of Applied For</strong>
                    <p class="text-muted"><?php echo $row['Applied_days']?></p>
                    <hr>
                    <strong>Number Of Leave Days Left</strong>
                    <p class="text-muted"><?php echo $row['Number_of_days']?></p>
                    <hr>
                  </div>
                </div>  
                <div class="col-sm-6">
                  <div class="box-body">
                    <strong>Commencement Date</strong>
                    <p class="text-muted"><?php echo $row['Commencement_date']?></p>
                    <hr>
                    <strong>Leave Address</strong>
                    <p class="text-muted"><?php echo $row['Leave_address']?></p>
                    <hr>
                    <strong>Officer Taking Over</strong>
                    <p class="text-muted"><?php echo $row['Office_taking_over']?></p>
                    <hr>

                    <strong>To</strong>
                    <p><?php echo $row['To_']?></p>
                    <hr>
                    <strong> Through</strong>

                    <p><?php echo $row['Through']?></p>

                  </div>
                </div>
                <!-- /.box-body -->
                <?php
          }else {
                ?>
                <!-- /.box-header -->
                <div class="col-sm-6">
                  <div class="box-body">
                    <strong>Date Applied</strong>
                    <p class="text-muted">N/A</p>
                    <hr>
                    <strong>Home Town</strong>
                    <p class="text-muted">N/A</p>
                    <hr>
                    <strong> Leave Type</strong>
                    <p class="text-muted">N/A</p>
                    <hr>
                    <strong>Number Of Applied For</strong>
                    <p class="text-muted">N/A</p>
                    <hr>
                    <strong>Number Of Leave Days Left</strong>
                    <p class="text-muted">N/A</p>
                    <hr>
                  </div>
                </div>  
                <div class="col-sm-6">
                  <div class="box-body">
                    <strong>Commencement Date</strong>
                    <p class="text-muted">N/A</p>
                    <hr>
                    <strong>Leave Address</strong>
                    <p class="text-muted">N/A</p>
                    <hr>
                    <strong>Officer Taking Over</strong>
                    <p class="text-muted">N/A</p>
                    <hr>

                    <strong>To</strong>
                    <p>N/A</p>
                    <hr>
                    <strong> Through</strong>

                    <p>N/A</p>

                  </div>
                </div>
                <!-- /.box-body -->
                
                
                <?php
          }
                ?>
              </div>
          </div>
          <!-- /.col -->
      </div>

      <!-- /.row -->
      <!-- Table row -->
      <div class="row">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"> All Promotion Data</h3>
          </div>
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>Promotion From</th>
                <th>Promotion To</th>
                <th>Promotion Date</th>
                <th>Commencement Date</th>
              </tr>
              </thead>
              <tbody>
              <?php 
                $query5 = "SELECT * FROM PROMOTION WHERE Staff_ID = '$staff'"; 
                $query_run5 = mysqli_query($con,$query5);
          if ($query_run5->num_rows >0) {
          
          
          ?>
              <tr>
                <td><?php echo $row['Promotion_from']?></td>
                <td><?php echo $row['Promotion_to']?></td>
                <td><?php echo $row['Promotion_date']?></td>
                <td><?php echo $row['Commencement_date']?></td>
              </tr>
              <?php
          }else {
            ?>
              <tr>
                  <td colspan="4" style = "text-align:center">
                    <div class="sparkbar" data-color="#00a65a" data-height="20">No Promotion Information</div>
                  </td>
              </tr>
            <?php
          };
              ?>
              </tbody>
            </table>
          </div>
          <!-- /.col -->    
        </div>
      </div>
      <!-- /.row -->
            <!-- Table row -->
            <div class="row">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"> All Leave Data</h3>
          </div>
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>Leave Type</th>
                <th>Date Applied</th>
                <th>Home Town</th>
                <th>Number of days applied For</th>
                <th>Number of days left</th>
                <th>Commencement Date</th>
                <th>Leave Address</th>
                <th>Officer taking over</th>
                <th>To</th>
                <th>Through</th>
              </tr>
              </thead>
              <tbody>
              <?php 
                $query4 = "SELECT * FROM LEAVE_RECORD, LEAVE_TYPE WHERE StffID = '$staff' AND Leave_ID = LeaveID"; 
                $query_run4 = mysqli_query($con,$query4);
          if ($query_run4->num_rows >0) {
          
          
          ?>
              <tr>

                <td><?php echo $row['Leave_name']?></td>
                <td><?php echo $row['Date_applied']?></td>
                <td><?php echo $row['Home_town']?></td>
                <td><?php echo $row['Applied_days']?></td>
                <td><?php echo $row['Number_of_days']?></td>
                <td><?php echo $row['Commencement_date']?></td>
                <td><?php echo $row['Leave_address']?></td>
                <td><?php echo $row['Office_taking_over']?></td>
                <td><?php echo $row['To_']?></td>
                <td><?php echo $row['Through']?></td>
                <td></td>
              </tr>
              <?php
          }else {
            ?>
              <tr>
                  <td colspan="10" style = "text-align:center">
                    <div class="sparkbar" data-color="#00a65a" data-height="20">No Leave Information</div>
                  </td>
              </tr>
            <?php
          };
              ?>
              </tbody>
            </table>
          </div>
          <!-- /.col -->    
        </div>
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="../../pages/examples/staffdataprint.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <button type="button" href="#editModal" data-toggle="modal" data-target="#exampleModal" class="btn btn-success pull-right editbtn"><i class="fa fa-pencil"></i> Update
              </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <?php 
  }
}

else
  {
    echo 'error';
  };
  ?>
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
