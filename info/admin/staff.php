<?php
  include('../../backend/session.php');
  $usern = $_SESSION['admin'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>MOE - HR | Staff Tables</title>
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
      <div class="col-md-12">
        <a class="btn btn-app bg-success" id="formales">
          <i class="ion ion-man"></i>Males
        </a>
        <a class="btn btn-app bg-success" id="forfemales">
          <i class="ion ion-woman"></i>Females
        </a>
        <a class="btn btn-app bg-success" id="forall">
          <i class="ion ion-ios-people"></i>All
        </a>
        <a class="btn btn-app bg-success" id="forsecond">
          <i class="ion ion-settings"></i>Secondment
        </a>
        <a class="btn btn-app bg-success" id="forsenior">
          <i class="ion ion-bookmark"></i>Senior
        </a>
        <a class="btn btn-app bg-success" id="forjunior">
          <i class="ion ion-bookmark"></i>Junior
        </a>
        <div style="margin-left:10px;cursor:pointer;" class="btn-group">
          <button type="button" class="btn btn-default">Age</button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a class="text-center"  id="forthirty">0 - 30</a></li>
            <li><a class="text-center"  id="forforty">31 - 40</a></li>
            <li><a class="text-center"  id="forfifty">41 - 50</a></li>
            <li><a class="text-center"  id="forsixty">51 - 60</a></li>
          </ul>
        </div>
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
              $query = "SELECT * FROM STAFF WHERE `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example1" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Sex</th>
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
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['DOB']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php if ($row['Sex'] =='M') {
                    echo 'Male';
                  }else {
                    echo 'Female';
                  }?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                    <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                    <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Sex</th>
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
      <div class="row" id="males" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF WHERE Sex = 'M' AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example3" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['DOB']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                  <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
      <div class="row" id="females" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF WHERE Sex ='F' AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example4" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['DOB']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                  <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
      <div class="row" id="seconded" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF WHERE Seconded = 1 AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example5" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['DOB']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                  <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
      <div class="row" id="senior" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF WHERE  Rank_Status ='Senior' AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example6" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['DOB']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                  <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
      <div class="row" id="junior" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT * FROM STAFF WHERE  Rank_Status ='Junior' AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example7" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['DOB']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                    <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                    <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Date Of Birth</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
      <div class="row" id="thirty" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $date = 
              $query = "SELECT `Staff_ID`, `Lname`, `Mname`, `Fname`, (YEAR(CURRENT_DATE)-YEAR(DOB)) AS Age, `Marital_Status` FROM STAFF WHERE YEAR(CURRENT_DATE)-YEAR(DOB) < 31 AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example8" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Age']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                  <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
      <div class="row" id="forty" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT `Staff_ID`, `Lname`, `Mname`, `Fname`, (YEAR(CURRENT_DATE)-YEAR(DOB)) AS Age, `Marital_Status` FROM STAFF WHERE YEAR(CURRENT_DATE)-YEAR(DOB) > 30 AND YEAR(CURRENT_DATE)-YEAR(DOB) < 41 AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example9" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Age']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                  <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
      <div class="row" id="fifty" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT `Staff_ID`, `Lname`, `Mname`, `Fname`, (YEAR(CURRENT_DATE)-YEAR(DOB)) AS Age, `Marital_Status` FROM STAFF WHERE YEAR(CURRENT_DATE)-YEAR(DOB) > 40 AND YEAR(CURRENT_DATE)-YEAR(DOB) < 51 AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example10" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Age']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                  <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                    <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                      Disable
                    </button>
                  <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
      <div class="row" id="sixty" style="display:none;">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <?php
              include('../../backend/connection.php');
              $query = "SELECT `Staff_ID`, `Lname`, `Mname`, `Fname`, (YEAR(CURRENT_DATE)-YEAR(DOB)) AS Age, `Marital_Status` FROM STAFF WHERE YEAR(CURRENT_DATE)-YEAR(DOB) > 50 AND YEAR(CURRENT_DATE)-YEAR(DOB) < 61 AND `Disable` = 0";
              $query_run = mysqli_query($con,$query);
              ?>
              <table id="example11" class="table table-bordered table-striped table-hover" style="width: 100%;">
                <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
                </tr>
                </thead>
                <tbody>
                <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
               <tr class="clickable-row" style="cursor: pointer;" >
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Staff_ID']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Lname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Mname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Fname']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Age']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>"><?php echo $row['Marital_Status']?></td>
                  <td data_id="<?php echo $row['Staff_ID']?>" id="<?php echo $row['Staff_ID']?>">
                    <input type="hidden" name="disable_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" class="btn btn-danger pull-right openModal" id="<?php echo $usern?>" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row['Staff_ID']?>" style="margin:2px"><i class="fa fa-trash"></i>
                        Disable
                      </button>
                    <form action="../admin/detail.php" method="post">
                      <input type="hidden" name="store_id" value="<?php echo $row['Staff_ID']?>">
                      <button type="submit" name="detail" class="btn btn-primary pull-right" style="margin:2px;text-decoration:none;"><i class="fa fa-file"></i>
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
                  <th>Last Name</th>
                  <th>Middle Name</th>
                  <th>First Name</th>
                  <th>Age</th>
                  <th>Marital Status</th>
                  <th>Details/ Disable</th>
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
    $('#example5').DataTable()
    $('#example6').DataTable()
    $('#example7').DataTable()
    $('#example8').DataTable()
    $('#example9').DataTable()
    $('#example10').DataTable()
    $('#example11').DataTable()
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
  const seconded = document.getElementById('seconded');
  const senior = document.getElementById('senior');
  const junior = document.getElementById('junior');
  const thirty = document.getElementById('thirty');
  const forty = document.getElementById('forty');
  const fifty = document.getElementById('fifty');
  const sixty = document.getElementById('sixty');
  const formales = document.getElementById('formales');
  const forfemales = document.getElementById('forfemales');
  const forsecond = document.getElementById('forsecond');
  const forsenior = document.getElementById('forsenior');
  const forjunior = document.getElementById('forjunior');
  const forthirty = document.getElementById('forthirty');
  const forforty = document.getElementById('forforty');
  const forfifty = document.getElementById('forfifty');
  const forsixty = document.getElementById('forsixty');
  const forall = document.getElementById('forall');
  forall.addEventListener("click", switchToAll);
  forfemales.addEventListener("click",switchToFemales);
  formales.addEventListener("click",switchToMales);
  forsecond.addEventListener("click",switchToSecond);
  forsenior.addEventListener("click",switchToSenior);
  forjunior.addEventListener("click",switchToJunior);
  forthirty.addEventListener("click",switchToThirty);
  forforty.addEventListener("click",switchToForty);
  forfifty.addEventListener("click",switchToFifty);
  forsixty.addEventListener("click",switchToSixty);
  function switchToAll() {
    all.style.display="inherit";
    males.style.display="none";
    females.style.display="none";
  forforty.addEventListener("click",switchToForty);
    seconded.style.display="none";
    senior.style.display="none";
    junior.style.display="none";
    thirty.style.display="none";
    forty.style.display="none";
    fifty.style.display="none";
    sixty.style.display="none";
  }
  function switchToFemales() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="inherit";
    seconded.style.display="none";
    senior.style.display="none";
    junior.style.display="none";
    thirty.style.display="none";
    forty.style.display="none";
    fifty.style.display="none";
    sixty.style.display="none";
  }
  function switchToMales() {
    all.style.display="none";
    males.style.display="inherit";
    females.style.display="none";
    seconded.style.display="none";
    senior.style.display="none";
    junior.style.display="none";
    thirty.style.display="none";
    forty.style.display="none";
    fifty.style.display="none";
    sixty.style.display="none";
  }
  function switchToSecond() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="none";
    seconded.style.display="inherit";
    senior.style.display="none";
    junior.style.display="none";
    thirty.style.display="none";
    forty.style.display="none";
    fifty.style.display="none";
    sixty.style.display="none";
  }
  function switchToSenior() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="none";
    seconded.style.display="none";
    senior.style.display="inherit";
    junior.style.display="none";
    thirty.style.display="none";
    forty.style.display="none";
    fifty.style.display="none";
    sixty.style.display="none";
  }
  function switchToJunior() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="none";
    seconded.style.display="none";
    senior.style.display="none";
    junior.style.display="inherit";
    thirty.style.display="none";
    forty.style.display="none";
    fifty.style.display="none";
    sixty.style.display="none";
  }
  function switchToThirty() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="none";
    seconded.style.display="none";
    senior.style.display="none";
    junior.style.display="none";
    thirty.style.display="inherit";
    forty.style.display="none";
    fifty.style.display="none";
    sixty.style.display="none";
  }
  function switchToForty() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="none";
    seconded.style.display="none";
    senior.style.display="none";
    junior.style.display="none";
    thirty.style.display="none";
    forty.style.display="inherit";
    fifty.style.display="none";
    sixty.style.display="none";
  }
  function switchToFifty() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="none";
    seconded.style.display="none";
    senior.style.display="none";
    junior.style.display="none";
    thirty.style.display="none";
    forty.style.display="none";
    fifty.style.display="inherit";
    sixty.style.display="none";
  }
  function switchToSixty() {
    all.style.display="none";
    males.style.display="none";
    females.style.display="none";
    seconded.style.display="none";
    senior.style.display="none";
    junior.style.display="none";
    thirty.style.display="none";
    forty.style.display="none";
    fifty.style.display="none";
    sixty.style.display="inherit";
  }
</script>
</body>
</html>
