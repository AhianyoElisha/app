<?php
        include('connection.php');
        if (isset($_POST['add_staff'])) {
            $staff_id = $_POST['staff_id'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $dob = date('Y-m-d', strtotime($_POST['dob']));
            $gender = $_POST['gender'];
            $marital_status = $_POST['marital_status'];
            $rank = $_POST['rank'];
            $highest_qualification = $_POST['highest_qualification'];
            $date_of_first_appointment = date('Y-m-d', strtotime(($_POST['date_of_first_appointment'])));
            $date_of_present_appointment = date('Y-m-d', strtotime(($_POST['date_of_present_appointment'])));
            $current_grade = $_POST['current_grade'];
            $directorate = $_POST['directorate'];
            $unit = $_POST['unit'];
            $phone_number = $_POST['phone_number'];
            $query = "INSERT INTO `STAFF`(`Staff_ID`, `Direct_ID`, `Fname`, `Lname`, `Mname`,`DOB`, `Marital_Status`, `Phone_number`, `UnitID`, `Highest_Qualification`, `Rank_Status`, `Sex`) VALUES ($staff_id,$directorate,'$fname','$lname','$mname','$dob','$marital_status',$phone_number,$unit,'$highest_qualification','$rank','$gender');";
            $query .= "INSERT INTO APPOINTMENT(`Date_of_first_appointment`,`Date_of_present_appointment`,`StaffID`,`Current_Grade`) VALUES ('$date_of_first_appointment','$date_of_present_appointment','$staff_id','$current_grade');";
 
            $mysql_connection = new mysqli('localhost', 'admin', 'e10980^D', 'MinistryOfEducation_HR');
            if(!$mysql_connection->connect_error){
                var_dump($mysql_connection->multi_query($query));
                header("location:../info/admin/staff.php");
            }else{
                echo 'Error: '.$mysql_connection->connect_error;
            }
        }
?>