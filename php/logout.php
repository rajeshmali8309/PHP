<?php
session_start();
// echo "<pre>";
// print_r($_SESSION['userid']);
// exit;
unset($_SESSION['userid']);


// echo "<pre>";
// print_r($_SESSION['userid']);
// exit;

if (!isset($_SESSION['userid'])) 
     {
        header("location:login.php");
     }
     else{
     	echo "session abhi tk set he ";
     }

?>