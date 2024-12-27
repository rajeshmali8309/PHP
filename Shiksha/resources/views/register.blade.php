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
            max-width: 900px;
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
        <form action="{{ route('formdata')}}" method="post" enctype= "multipart/form-data">
            
            @csrf

            <label>Name:</label>
            <input type="text" name="name" >
            @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <label>Email:</label>
            <input type="email" name="email" >
            @error('email')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <label>Password:</label>
            <input type="password" name="password" >
            @error('password')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <label>Mobile Number:</label>
            <input type="text" name="phone" >
            @error('phone')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other 
            @error('gender')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <label>Hobbies:</label>
            <input type="checkbox" name="hobbies[]" value="Singing">Singing
            <input type="checkbox" name="hobbies[]" value="Dancing">Dancing
            <input type="checkbox" name="hobbies[]" value="Gaming">Gaming
            <input type="checkbox" name="hobbies[]" value="Coding">Coding  <br><br>
            @error('hobbies')
            <div style="color: red;">{{ $message }}</div>
            @enderror
            
            <label>Date of Birth:</label>
            <input type="date" name="dob" >
            @error('dob')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <label>Time:</label>
            <input type="time" name="time" >  
            @error('time')
            <div style="color: red;">{{ $message }}</div>
            @enderror 

            <label>Volume:</label>
            <input type="range" name="range" min="0" max="100" > 
            @error('range')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <label>Qualification:</label>
            <select name="qualification">
            <option  disabled selected>Select Your Qualification</option>
                <option>BCA</option>
                <option>BBA</option>
                <option>BA</option>
                <option>DIPLOMA</option>
                <option>NURSARY</option>
                <option>BSC</option>
            </select>
            @error('qualification')
            <div style="color: red;">{{ $message }}</div>
            @enderror 

            <label>Profile:</label>
            <input type="file" name="profile"> <br><br>
            @error('profile')
            <div style="color: red;">{{ $message }}</div>
            @enderror
            


            <div style="text-align: center; background-color: green;">
            <input type="submit" value="SIGN UP">
            </div>
        </form>
        <div class="login-link">
            <p>Already have an account?<a href="#">Login Now</a></p>
        </div>
    </div>
</body>
</html>
