<?php
include './connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$lan = implode(",",$_POST['language']);
$phone = $_POST['number'];
$profile ='';


// img upload part..................


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



$sql = "INSERT INTO `phplaravel`(`name`, `email`, `password` ,`gender`,`language`,`phone`,`profile`) VALUES ('$name' , '$email', '$password' , '$gender', '$lan ' ,'$phone' , '$profile')";


$result = mysqli_query($conn, $sql);

if ($result) {
    header("location:display.php");
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>