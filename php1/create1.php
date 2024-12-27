<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
     
    <form action="insert1.php" method="post" enctype="multipart/form-data" >
        <label>Name:</label>
        <input type="text" name="name">
        <br><br>
        <label>email:</label>
        <input type="email" name="email">
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male">
        <label>male:</label>
        <input type="radio" name="gender" value="female">
        <label>female:</label>
        <br><br>
        <label>Language:</label>
        <input type="checkbox" name="language[]" value="c">
        <label>c</label>
        <input type="checkbox" name="language[]" value="c++">
        <label>c++</label>
        <input type="checkbox" name="language[]" value="php">
        <label>php</label>
        <br><br>
         <label>Phone no :</labal>
         <input type="tel" name="number">
        <br><br>
        <input type="file" name="profile"><br><br>
        <input type="submit" name="submit">
        <br><br>
    </form>
    
</body>
</html>