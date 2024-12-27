<?php

include '../connection.php';
session_start();
if (!isset($_SESSION['userid'])) 
     {
        header("location:login.php");
     }
     
// echo "<pre>";
// print_r($_SESSION['userid']);
// exit;
$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn,$sql);

?>
<table  width="50%" style="padding: 5px; margin-left: 200px; border: 20px solid yellowgreen; background-color: white;">
       <tr>
           <th style="background-color: yellowgreen;">ID</th>
            <th style="background-color: yellowgreen;">NAME</th>
             <th style="background-color: yellowgreen;">EMAIL</th>
              <th style="background-color: yellowgreen;">PASSWORD</th>
               <th style="background-color: yellowgreen;">MOBILE NO.</th>
                <th style="background-color: yellowgreen;">TELEPHONE NO.</th>
                 <th style="background-color: yellowgreen;">GENDER</th>
                  <th style="background-color: yellowgreen;">HOBBIES</th>
                   <th style="background-color: yellowgreen;">PROFILE</th>
                    <th colspan="2" style="background-color: yellowgreen;">ACTION</th>
       
      </tr>

   <?php

   while ($row = mysqli_fetch_assoc($result)) {

	   ?> 
	   <tr style="background-color: yellowgreen;">
		    <td><?php echo $row['id']; ?></td>
		     <td><?php echo $row['name']; ?></td>
		      <td><?php echo $row['email']; ?></td>
		       <td><?php echo $row['password']; ?></td>
		        <td><?php echo $row['number']; ?></td>
		         <td><?php echo $row['tel']; ?></td>
		          <td><?php echo $row['gender']; ?></td>
		           <td><?php echo $row['hobbies']; ?></td>
	        <td><img src="upload/<?php echo $row['profile']; ?>" alt="Profile Image" width="50"></td>
            <td><a href="edit.php?id=<?php echo $row['id']; ?>">update</td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</td>

        </tr>

   

    <?php
         }
     ?>

</table>

<div style="margin: 30px 0px 20px 0px; text-align: center; font-size: 20px;">
      <a href="create.php" style="background-color: yellowgreen; border-radius: 10px; text-align: center; padding: 10px; text-decoration: none;">Add another</a>

      <a href="logout.php" style="background-color: yellowgreen; border-radius: 10px; text-align: center; padding: 10px; text-decoration: none;">Log Out</a>
   </div>
  