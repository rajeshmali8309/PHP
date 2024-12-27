

<?php

include '../connection.php';

$id = $_GET['id'];

// echo "<pre>";
//  print_r($id);
//  exit;

$sql = "SELECT * FROM `student` WHERE `id`= $id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

// echo "<pre>";
//  print_r($row);
//  exit;
?>

<form action="update.php" method="post" enctype= "multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

   	<label>Name:</label>
 	   <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

 	   <label>Email:</label>
 	   <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

      <label>Password:</label>
 	   <input type="password" name="password" value="<?php echo $row['password']; ?>"><br><br>

 	   <label>Number:</label>
      <input type="number" name="number" value="<?php echo $row['number']; ?>"> <br><br>

      <label for="tel">Telephone:</label>
      <input type="tel" name="tel" value="<?php echo $row['tel']; ?>"><br><br>
       
      <label>Gender:-</label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female <br><br>

		 <label>Hobbies:</label><br>
       <input type="checkbox" name="hobbies[]" value="Cricket">
       <label>Cricket</label><br>
       <input type="checkbox" name="hobbies[]" value="Reading Books">
       <label>Reading Books</label><br>
       <input type="checkbox" name="hobbies[]" value="Dancing">
       <label for="dancing">Dancing</label><br><br>
   
       <input type="file" name="profile" value="<?php echo $row['profile']; ?>"><br><br>

       <input type="submit" value="submit">

 </form>