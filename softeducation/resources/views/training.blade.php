<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="{{ route('storedata') }}">
        @csrf
        <div class="inputs">
            <lable>name :</label>
            <input type="text" name="name">
        </div>
        <div class="inputs">
            <lable>email :</label>
            <input type="email" name="email">
        </div>
        <div class="inputs">
            <lable>password :</label>
            <input type="text" name="password">
        </div>
        <div class="inputs">
            <lable>phone :</label>
            <input type="text" name="phone">
        </div>
        <div class="inputs">
            <lable>rollno :</label>
            <input type="text" name="rollno">
        </div>

        <div class="inputs">
            <lable>male :</label>
            <input type="radio" name="gender" value="male">
            <lable>female :</label>
            <input type="radio" name="gender" value="female">
        </div>


        <div class="inputs">
            <lable>cricket :</label>
            <input type="checkbox" name="hobbies[]" value="cricket">
            <lable>football :</label>
            <input type="checkbox" name="hobbies[]" value="football">
            <lable>wallyball :</label>
            <input type="checkbox" name="hobbies[]" value="wallyball">
        </div>
        <input type="submit" value="save">
    </form>
</body>
</html>