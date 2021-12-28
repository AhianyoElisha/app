<?php
        include('connection.php');
        if (isset($_POST['edit_staff'])) {
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
            $query = "UPDATE `STAFF` SET `Direct_ID`='$directorate', `Fname`='$fname', `Lname`= '$lname', `Mname`= '$mname',`DOB`='$dob', `Marital_Status`='$marital_status', `Phone_number`=$phone_number, `UnitID`=$unit, `Highest_Qualification`='$highest_qualification', `Rank_Status`='$rank', `Sex`='$gender' WHERE `Staff_ID` = $staff_id;";
            $query .= "UPDATE APPOINTMENT SET `Date_of_first_appointment`='$date_of_first_appointment',`Date_of_present_appointment` ='$date_of_present_appointment',`StaffID` ='$staff_id',`Current_Grade ='$current_grade' WHERE StaffID = $staff_id;";
 
            $mysql_connection = new mysqli('localhost', 'admin', 'e10980^D', 'MinistryOfEducation_HR');
            if(!$mysql_connection->connect_error){
                var_dump($mysql_connection->multi_query($query));
                header("location:../info/admin/staff.php");
            }else{
                echo 'Error: '.$mysql_connection->connect_error;
            }
        }
?>