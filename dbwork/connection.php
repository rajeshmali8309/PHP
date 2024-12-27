<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'database';

$conn = new mysqli($server, $username, $password, $dbname);

// echo "<pre>";
// print_r($conn);

// if ($conn->connect_error) {
// 	die("connection failed: " .$conn->connect_error);
// }
