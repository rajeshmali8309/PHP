<?php
  include './connection.php';

  $sql = "SELECT * FROM `mydatabase`";
  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($result);

  	// echo "<pre>";
  	// print_r($row['email']);
  	// exit;

  session_start();
  if (!isset($_SESSION['userid'])) 
     {
     	session_start();
     	$_SESSION['mail'] = $row['email'];
        header("location:login.php");
        exit;
     }

?>