<?php
include './connection.php';

$id = $_GET['id'];

$sql="DELETE FROM `phplaravel` WHERE  id = $id";


$result = mysqli_query($conn, $sql);
if ($result) {
    header("location:display.php");
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>