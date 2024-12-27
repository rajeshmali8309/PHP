<?php

include './connection.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $lan = implode(",",$_POST['language']);
    $phone = $_POST['number'];
    $profile ='';
 

if($_FILES['profile'])
{
    $target_dir = "upload/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $profile = time() . '.' . pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION);
    $target_file =  $target_dir . $profile ;
    move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);
}

   
    // Update the record in the database
   // $sql = "UPDATE `phplaravel` 
   //          SET `name`='$name', `email`='$email', `gender`='$gender',`language`='$lan',``phone``='$phone', `password`='$password' 
   //          WHERE `id`='$id'";
       $sql = "UPDATE `phplaravel` 
          SET `name`='$name', `email`='$email', `gender`='$gender',`language`='$lan',`phone`='$phone',`profile`='$profile'  WHERE `id`='$id'";

    
        
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location:display.php");
    } else {
        echo "Failed to update record: " . mysqli_error($conn);
    }

?>