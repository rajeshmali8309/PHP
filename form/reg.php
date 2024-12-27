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
        <h1>Registration </h1>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Mobile Number:</label>
            <input type="tel" name="number" required>

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other 

            <label>Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label>Hobbies:</label>
            <input type="checkbox" name="hobbies[]" value="reading"> Reading
            <input type="checkbox" name="hobbies[]" value="traveling"> Traveling
            <input type="checkbox" name="hobbies[]" value="sports"> Sports
            <input type="checkbox" name="hobbies[]" value="music"> Music
            <input type="checkbox" name="hobbies[]" value="art"> Art 

            <label>Your Photo:</label>
            <input type="file" id="file" name="file" required>   

            <label>Time:</label>
            <input type="time" id="time" name="time" required>   

            <label>Range:</label>
            <input type="range" name="range" min="0" max="100"> 

            <label>Qualification:</label>
            <select name="qualification">
                <option>BCA</option>
                <option>BBA</option>
                <option>BA</option>
                <option>DIPLOMA</option>
                <option>NURSARY</option>
                <option>BSC</option>
            </select>
            <div style="text-align: center; background-color: green;">
            <input type="submit" value="SIGN UP">
            </div>
        </form>
        <div class="login-link">
            <p>Already have an account?<a href="login.php">Login Now</a></p>
        </div>
    </div>
</body>
</html>
