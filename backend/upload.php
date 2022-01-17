<?php
        include('connection.php');
        $target_dir = "/var/www/html/MOE/app/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $file_path = basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if(isset($_POST["submit"])) {
          $staff_id = $_POST['staff_id'];
          $query = "UPDATE `STAFF` SET `profile` = '$file_path' WHERE `Staff_ID` = $staff_id;";
            // Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo "File is not an image.";
              $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 200000) {
              echo "Sorry, your file is too large.";
              $uploadOk = 0;
            }

            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
            }
            $mysql_connection = new mysqli('localhost', 'admin', 'e10980^D', 'MinistryOfEducation_HR');
            if(!$mysql_connection->connect_error && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                var_dump($mysql_connection->multi_query($query));
                header("location:../info/admin/detail.php?staff_id=$staff_id");
            }else{
                echo 'Error: '.$mysql_connection->connect_error;
            }
        }
?>