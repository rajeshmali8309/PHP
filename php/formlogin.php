<?php
include '../connection.php';
$lemail = $_POST['lemail'];
$lpassword = $_POST['lpassword'];

// echo "<pre>";
// print_r($_POST);

$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
	   // echo "<pre>";
	   // print_r($row['password']);
	   // echo "<pre>";
	   // print_r($row['email']);
	if($lemail==$row['email'] && $lpassword==$row['password'])
	{
		  session_start();
		  $_SESSION['userid'] = $row['id'];
		  // echo "<pre>";
		  // print_r($_SESSION['userid']);
		  // exit;
		  header("location:display.php");
	}
	      	
    }

?>