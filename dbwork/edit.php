<?php

  include './connection.php';

$id = $_GET['id'];

// echo "<pre>";
//  print_r($id);
//  exit;

$sql = "SELECT * FROM `mydatabase` WHERE `id`= $id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$hobbies = explode(",", $row['hobbies']);

// echo "<pre>";
//  print_r($row);
//  exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding-right: 40px;
            margin: 40px;
        }

        h1 {
            margin-top: 0;
            margin-left: 200px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="password"], input[type="tel"], input[type="date"], input[type="time"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="checkbox"], input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: green;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0275d8;
        }

        .login-link {
            margin-top: 20px;
            text-align: center;
        }

        .login-link a {
            text-decoration: none;
        }        

        .login-link button:hover {
            background-color: #025aa5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        <form action="update.php" method="post" enctype= "multipart/form-data">
            <label>ID:</label>
        	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label>Password:</label>
            <input type="password" name="password" value="<?php echo $row['password']; ?>" required>

            <label>Mobile Number:</label>
            <input type="text" name="mobile" value="<?php echo $row['number']; ?>" required>

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male" 
            <?php 
              if($row['gender']=='Male')
              {
              	echo "checked";
              }
             ?>> Male
            <input type="radio" name="gender" value="Female" 
              <?php 
              if($row['gender']=='Female')
              {
              	echo "checked";
              }
             ?>
            > Female
            <input type="radio" name="gender" value="Other" 
               <?php 
              if($row['gender']=='Other')
              {
              	echo "checked";
              }
             ?>
             > Other 

            <label>Date of Birth:</label>
            <input type="date" name="dob" value="<?php echo $row['DOB']; ?>" >

            <label>Hobbies:</label>
            <input type="checkbox" name="hobbies[]" value="reading"
                  <?php 
                    if (in_array("reading", $hobbies))
                       {
                        echo "checked";
                       } ?>>reading


            <input type="checkbox" name="hobbies[]" value="traveling"
                <?php 
                    if (in_array("traveling", $hobbies))
                       {
                        echo "checked";
                       } ?>>traveling


            <input type="checkbox" name="hobbies[]" value="sports"
                <?php 
                    if (in_array("sports", $hobbies))
                       {
                        echo "checked";
                       } ?>>sports


            <input type="checkbox" name="hobbies[]" value="music"
                <?php 
                    if (in_array("music", $hobbies))
                       {
                        echo "checked";
                       } ?>>music


            <input type="checkbox" name="hobbies[]" value="art"
                <?php 
                    if (in_array("art", $hobbies))
                       {
                        echo "checked";
                       } ?>>art


            <label>Time:</label>
            <input type="time" name="time" value="<?php echo $row['time']; ?>" required>   

            <label>Volume:</label>
            <input type="range" name="range" min="0" max="100" value="<?php echo $row['volume']; ?>"> 

            <label>Qualification:</label>
            <select name="qualification" value="<?php echo $row['qualification']; ?>">
                <option value="BCA"
                <?php 
                   if($row['qualification']=='BCA')
                    {
                      echo "selected";
                    } ?>>BCA</option>

                <option value="BBA"
                <?php 
                   if($row['qualification']=='BBA')
                    {
                      echo "selected";
                    } ?>>BBA</option>

                <option value="BA"
                <?php 
                   if($row['qualification']=='BA')
                    {
                      echo "selected";
                    } ?>>BA</option>

                <option value="DIPLOMA"
                <?php 
                   if($row['qualification']=='DIPLOMA')
                    {
                      echo "selected";
                    } ?>>DIPLOMA</option>

                <option value="NURSARY"
                <?php 
                   if($row['qualification']=='NURSARY')
                    {
                      echo "selected";
                    } ?>>NURSARY</option>

                <option value="BSC"
                <?php 
                   if($row['qualification']=='BSC')
                    {
                      echo "selected";
                    } ?>>BSC</option>

            </select>

            <label>Your Photo:</label>
            <input type="text" name="hprofile" value="<?php echo $row['profile']; ?>">
            <input type="file" name="profile"><br><br>

            <div style="text-align: center; background-color: green;">
            <input type="submit" value="Update your profile">
            </div>
        </form>
    </div>
</body>
</html>