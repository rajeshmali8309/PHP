<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'shiksha';

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("connection failed: " .$conn->connect_error);
}
