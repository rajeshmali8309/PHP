<?php

include './connection.php';
session_start();
unset($_SESSION['mail']);

if (!isset($_SESSION['userid'])) 
     {
        header("location:login.php");
     }

// echo "<pre>";
// print_r($_SESSION['userid']);
// exit;
$sql = "SELECT * FROM `mydatabase`";
$result = mysqli_query($conn,$sql);

?>

<div style="margin: 10px; text-align: center; padding: 15px; ">
<form action="searchcheck.php" method="post">
    <input type="text" name="search" placeholder="search data" required style="padding: 10px; border-radius: 5px;">
    <span><input type="submit" value="search" style="cursor: pointer;"></span>
    <a href="showall.php" style="background-color: whitesmoke; border: 1px solid; border-radius: 3px; text-align: center; padding: 5px; text-decoration: none;">Show All data</a>
</form>
</div>

<table style="padding: 5px; border: 10px solid yellowgreen; background-color: white;">
       <tr>
           <th style="background-color: yellowgreen; padding: 10px;">ID</th>
            <th style="background-color: yellowgreen; padding: 10px;">NAME</th>
             <th style="background-color: yellowgreen; padding: 10px;">EMAIL</th>
              <th style="background-color: yellowgreen; padding: 10px;">PASSWORD</th>
               <th style="background-color: yellowgreen; padding: 10px;">NUMBER</th>
                <th style="background-color: yellowgreen; padding: 10px;">GENDER</th>
                 <th style="background-color: yellowgreen; padding: 10px;">Date Of Birthday</th>
                  <th style="background-color: yellowgreen; padding: 10px;">Hobbies</th>
                   <th style="background-color: yellowgreen; padding: 10px;">Time</th>
                    <th style="background-color: yellowgreen; padding: 10px;">Volume</th>
                     <th style="background-color: yellowgreen; padding: 10px;">Qualification</th>
               <th style="background-color: yellowgreen; padding: 10px;">Profile</th>
               <th colspan="2" style="background-color: yellowgreen;">ACTION</th>
       
      </tr>


<?php
if (isset($_SESSION['search'])) 
{
    
     while ($row = mysqli_fetch_assoc($result)) 
     {
       
         if($_SESSION['search']==$row['id'] || $_SESSION['search']==$row['name'] ||$_SESSION['search']==$row['email'] || $_SESSION['search']==$row['number'] || $_SESSION['search']==$row['gender'] || $_SESSION['search']==$row['DOB'] || $_SESSION['search']==$row['hobbies'] ||$_SESSION['search']==$row['time'] || $_SESSION['search']==$row['volume'] ||$_SESSION['search']==$row['qualification'])
                 {

                 ?> 
                   <tr style="background-color: yellowgreen;">
                       <td style="padding: 8px;"><?php echo $row['id']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['name']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['email']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['password']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['number']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['gender']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['DOB']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['hobbies']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['time']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['volume']; ?></td>
                       <td style="padding: 8px;"><?php echo $row['qualification']; ?></td>
                       <td><img src="upload/<?php echo $row['profile']; ?>" alt="Profile Image" width="50"></td>
                       <td style=""><a href="edit.php?id=<?php echo $row['id']; ?>"style="text-decoration: none; color: red; padding: 10px; ">update</td>
                       <td><a href="delete.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color: red; padding: 10px; ">delete</td>
                   </tr>
                 <?php  

                 }

     }
     ?>
     </table>

<div style="margin: 30px 0px 20px 0px; text-align: center; font-size: 20px;">
      <a href="registration.php" style="background-color: yellowgreen; border-radius: 10px; text-align: center; padding: 10px; text-decoration: none;">Add another</a>

      <a href="logout.php" style="background-color: yellowgreen; border-radius: 10px; text-align: center; padding: 10px; text-decoration: none;">Log Out</a>


   </div>
     <?php
     exit;
}
 
?>



   <?php

   while ($row = mysqli_fetch_assoc($result)) {

       ?> 
       <tr style="background-color: yellowgreen;">
            <td style="padding: 8px;"><?php echo $row['id']; ?></td>
             <td style="padding: 8px;"><?php echo $row['name']; ?></td>
              <td style="padding: 8px;"><?php echo $row['email']; ?></td>
               <td style="padding: 8px;"><?php echo $row['password']; ?></td>
                <td style="padding: 8px;"><?php echo $row['number']; ?></td>
                 <td style="padding: 8px;"><?php echo $row['gender']; ?></td>
                  <td style="padding: 8px;"><?php echo $row['DOB']; ?></td>
                   <td style="padding: 8px;"><?php echo $row['hobbies']; ?></td>
                    <td style="padding: 8px;"><?php echo $row['time']; ?></td>
                     <td style="padding: 8px;"><?php echo $row['volume']; ?></td>
                      <td style="padding: 8px;"><?php echo $row['qualification']; ?></td>
                       <td><img src="upload/<?php echo $row['profile']; ?>" alt="Profile Image" width="50"></td>
                  <td style=""><a href="edit.php?id=<?php echo $row['id']; ?>"style="text-decoration: none; color: red; padding: 10px; ">update</td>
                  <td><a href="delete.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color: red; padding: 10px; ">delete</td>

        </tr>

   

    <?php
         }
     ?>

</table>

<div style="margin: 30px 0px 20px 0px; text-align: center; font-size: 20px;">
      <a href="registration.php" style="background-color: yellowgreen; border-radius: 10px; text-align: center; padding: 10px; text-decoration: none;">Add another</a>

      <a href="logout.php" style="background-color: yellowgreen; border-radius: 10px; text-align: center; padding: 10px; text-decoration: none;">Log Out</a>
   </div>
  