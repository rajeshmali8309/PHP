
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php
session_start();
if (isset($_SESSION['userid'])) 
     {
        header("location:display.php");
        exit;
     }
?>
<body>

<form action="formlogin.php" method="post">
	<label>Email</label>
	<input type="email" name="lemail"><br><br>

	<label>Password</label>
	<input type="Password" name="lpassword"><br><br>

	<input type="submit" value="Login">

</form>

</body>
</html>