<?php
  include './connection.php';
// echo "<pre>";
// print_r($_FILES);
// exit;
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$hobbies = implode(",",$_POST['hobbies']);
$time = $_POST['time'];
$volume = $_POST['range'];
$qualification = $_POST['qualification'];
$profile ='';

// echo "<pre>";
// print_r($number);
// exit;

// file insert part..................

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



   $sql = "INSERT INTO `mydatabase`(`name`, `email`, `password` ,`number`,`gender` ,`DOB`,`hobbies`,`time`,`volume`,`qualification`,`profile`) VALUES ('$name' ,  '$email' , '$password' , '$mobile' , '$gender' , '$dob' , '$hobbies' ,  '$time' , '$volume' , '$qualification' , '$profile')";

// echo "<pre>";
// print_r($sql);
// exit;

    $result = mysqli_query($conn, $sql);

// echo "<pre>";
// print_r($result);
// exit;

   //  if ($result) {
   //    echo "Insert successfull";
   // } else {
   //  echo "insert Failed: ";
   // }

if ($result) {
         header("location:success.php");
} else {
    echo "Failed: " . mysqli_error($conn);
}

?>