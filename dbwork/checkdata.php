<?php
include './connection.php';
session_start(); // Start the session to store the error message

$mail = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM `mydatabase` WHERE email = '$mail'"; // Query specific email
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    
    // Check if the password matches
    if ($pass == $row['password']) {
        $_SESSION['userid'] = $row['id'];
        header("location:display.php");
        exit();
    } else {
        // Wrong password
        $_SESSION['error'] = "Wrong email or password"; // Set error message in session
        header("location:login.php");
        exit();
    }
} else {
    // Email not found
    $_SESSION['error'] = "Wrong email or password"; // Set error message in session
    header("location:login.php");
    exit();
}
?>
