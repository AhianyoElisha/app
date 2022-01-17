<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location:./info/admin/index.php');
}elseif (isset($_SESSION['staff'])) {
    header('location:./info/staff/index.php');
}

  if (isset($_GET['id'])) {
    $id =$_GET['id'];
  }else {
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>MOE - HR | Lockscreen</title>
      <link rel="icon" type="image/png" href="./dist/images/icons/favicon.png"/>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="./bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="./bower_components/Ionicons/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition lockscreen" style="position:fixed;display:flex;justify-content:center;width:100%">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper" >
      <div class="lockscreen-logo">
        <a href="https://www.moe.gov.gh">
          <img src="./dist/images/pngfind.com-education-images-png-2219758.png" style="width:100%" alt="Ministry Of Education">
        </a>
      </div>
      <?php
      include('./backend/connection.php');
      $query1 = "SELECT `Staff_name`,`profile` FROM STAFF_DETAIL WHERE `Staff_ID` = $id";
      $query2 = "SELECT CONCAT_WS(' ',`Fname`,`Lname`) AS Admin_name FROM HR_ADMIN WHERE `ID` = $id"; 
      $query_run1 = mysqli_query($con,$query1);
      $query_run2 = mysqli_query($con,$query2);
      if ($query_run1->num_rows > 0) {
        foreach ($query_run1 as $row) {
      ?>
      <!-- User name -->
      <div class="lockscreen-name" style="position:relative;right:-30px;top:-15px"><?php echo $row['Staff_name']?></div>

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
          <img src="./uploads/<?php echo $row['profile']?>" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->
     
      <?php
        }
      }elseif ($query_run2->num_rows > 0) {
        foreach ($query_run2 as $row) {
      ?>
      <!-- User name -->
      <div class="lockscreen-name" style="position:relative;right:-30px;top:-15px">Admin account(<?php echo $row['Admin_name']?>)</div>

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
          <img src="./uploads/user-profile-svgrepo-com.svg" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->
      <?php
        }
      }
      ?>
        <!-- lockscreen credentials (contains the form) -->
        <form class="lockscreen-credentials" action="./backend/loginUser.php" method="post">
          <div class="input-group">
            <input type="hidden" class="form-control" value="<?php echo $id?>" name="staffid">
            <input type="password" class="form-control" id="password" name="password"  placeholder="password" required>
            <i id="togglePassword" class="btn fa fa-eye fa-eye-slash" style="z-index:100;position:absolute;right:30px;top:10px"></i>
            <div class="input-group-btn">
              <button type="submit" name="login" class="btn" style="outline:none;"><i class="fa fa-arrow-right text-muted"></i></button>
            </div>
          </div>
        </form>
        <!-- /.lockscreen credentials -->

      </div>
      <!-- /.lockscreen-item -->
      <div class="help-block text-center">
        Enter your password to retrieve your session
      </div>
      <div class="text-center">
        <a href="login.php">Or sign in as a different user</a>
      </div>
      <div class="lockscreen-footer text-center">
        Copyright &copy; 2021 <b><a href="https://www.moe.gov.gh" class="text-black">Ministry Of Education</a></b><br>
        All rights reserved
      </div>
    </div>
    <!-- /.center -->

    <!-- jQuery 3 -->
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');
      togglePassword.addEventListener('click',function (e) {
          const type = password.getAttribute('type') === 'password'? 'text': 'password';
          password.setAttribute('type',type);
          this.classList.toggle('fa-eye-slash');
          
      })
    </script>
  </body>
</html>