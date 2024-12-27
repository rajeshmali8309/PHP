<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <form action="insert.php" method="post" enctype= "multipart/form-data">
   	<label>Name:</label>
 	   <input type="text" name="name" required><br><br>

 	   <label>Email:</label>
 	   <input type="email" name="email" required><br><br>

      <label>Password:</label>
 	   <input type="password" name="password" required><br><br>

 	   <label>Number:</label>
      <input type="number" name="number"> <br><br>

      <label for="tel">Telephone:</label>
      <input type="tel" name="tel"><br><br>
       
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
   
       <input type="file" name="profile"><br><br>
             
      <input type="submit" value="submit">
 </form>
</body>
</html>