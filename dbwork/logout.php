<?php
session_start();
// echo "<pre>";
// print_r($_SESSION['userid']);
// exit;
unset($_SESSION['userid']);
unset($_SESSION['mail']);
unset($_SESSION['search']);


// echo "<pre>";
// print_r($_SESSION['userid']);
// exit;

  if (!isset($_SESSION['mail'])) 
    {
     
     header("location:registration.php");

      if(!isset($_SESSION['userid']))

        {

        header("location:registration.php");
        
     }
  }
     else{
     	echo "session abhi tk set he ";
     }

?>