<?php
session_start();
unset($_SESSION['search']);


// echo "<pre>";
// print_r($_SESSION['userid']);
// exit;

  if (!isset($_SESSION['search'])) 
    {
     
     header("location:display.php");
  }