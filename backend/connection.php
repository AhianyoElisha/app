<?php
    $servername = "localhost";
    $username = "admin";
    $password = "e10980^D";
    $dbname = "MinistryOfEducation_HR";
    $con = mysqli_connect($servername,$username,$password);
    $db = mysqli_select_db($con,$dbname);
?>