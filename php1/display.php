<?php
include './connection.php';

$sql ="SELECT * FROM `phplaravel`";
$result = mysqli_query($conn,$sql);


    ?>
    <div class="btn">
      <a href="create1.php">Add another</a>
    </div>

    <table border="1" width="50%">
       <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>Gender</th>
        <th>LANGUAGE</th>
        <th>PHONE</th>
        <th>PASSWORD</th>
        <th>PROFILE</th>
        <th colspan="2">ACTION</th>
       
      </tr>
      
      <?php
      
      while($row = mysqli_fetch_assoc($result))
      {
        
        ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
           <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['language']; ?></td>
            <td><?php echo $row['phone']; ?></td>
           <td><?php echo $row['password']; ?></td>
            <td><img src="upload/<?php echo $row['profile']; ?>" alt="Profile Image" width="50"></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>">update</td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</td>
         
            
            
      </tr>
  

    <?php

 
}
?>
</table>