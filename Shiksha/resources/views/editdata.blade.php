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
        <form action="{{ route('editform') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="id" value="{{ $studentID->id }}">
    
    <label>Name:</label>
    <input type="text" name="name" value="{{ $studentID->name }}" required>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $studentID->email }}" required>

    <label>Password:</label>
    <input type="password" name="password" value="{{ $studentID->password }}" required>

    <label>Mobile Number:</label>
    <input type="text" name="phone" value="{{ $studentID->phone }}" required>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" {{ $studentID->gender == 'Male' ? 'checked' : '' }}> Male
    <input type="radio" name="gender" value="Female" {{ $studentID->gender == 'Female' ? 'checked' : '' }}> Female
    <input type="radio" name="gender" value="Other" {{ $studentID->gender == 'Other' ? 'checked' : '' }}> Other

    <label>Hobbies:</label>
    <input type="checkbox" name="hobbies[]" value="Singing" {{ in_array('Singing', explode(',', $studentID->hobbies)) ? 'checked' : '' }}> Singing
    <input type="checkbox" name="hobbies[]" value="Dancing" {{ in_array('Dancing', explode(',', $studentID->hobbies)) ? 'checked' : '' }}> Dancing
    <input type="checkbox" name="hobbies[]" value="Gaming" {{ in_array('Gaming', explode(',', $studentID->hobbies)) ? 'checked' : '' }}> Gaming
    <input type="checkbox" name="hobbies[]" value="Coding" {{ in_array('Coding', explode(',', $studentID->hobbies)) ? 'checked' : '' }}> Coding

    <label>Date of Birth:</label>
    <input type="date" name="dob" value="{{ $studentID->dob }}" required>

    <label>Time:</label>
    <input type="time" name="time" value="{{ $studentID->time }}" required>

    <label>Volume:</label>
    <input type="range" name="range" min="0" max="100" value="{{ $studentID->range }}">

    <label>Qualification:</label>
    <select name="qualification">
        <option {{ $studentID->qualification == 'BCA' ? 'selected' : '' }}>BCA</option>
        <option {{ $studentID->qualification == 'BBA' ? 'selected' : '' }}>BBA</option>
        <option {{ $studentID->qualification == 'BA' ? 'selected' : '' }}>BA</option>
        <option {{ $studentID->qualification == 'DIPLOMA' ? 'selected' : '' }}>DIPLOMA</option>
        <option {{ $studentID->qualification == 'NURSARY' ? 'selected' : '' }}>NURSARY</option>
        <option {{ $studentID->qualification == 'BSC' ? 'selected' : '' }}>BSC</option>
    </select>

    <label>Profile:</label> 
    <input type="file" name="profile"> <br><br>
    <input type="hidden" name="hidden_profile" value="{{ $studentID->profile }}">
    <div>
      <img src="{{ asset('img/' . $studentID->profile) }}" alt="Profile Image" width="100">
    </div>

    <input type="submit" value="Update">
</form>

        <div class="login-link">
            <p>Already have an account?<a href="#">Login Now</a></p>
        </div>
    </div>
</body>
</html>
