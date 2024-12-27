<?php

include '../connection.php';
// echo "<pre>";
// print_r($_FILES);
// exit;
$id = $_POST['n'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$tel = $_POST['tel'];
$gender = $_POST['gender'];
$hobbies = implode(",",$_POST['hobbies']);
$profile ='';


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