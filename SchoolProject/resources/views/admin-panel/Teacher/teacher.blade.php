<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=josefin+sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link href="{{ asset('adminCSS/adminstyle.css') }}" rel="stylesheet">
    <title>Admin Dashboard teacher</title>
    <style>

        .sidebar {
            width: 250px;
            background-color: #2e2e3e;
            color: #fff;
            padding: 20px;
            height: 100%;
	        position: fixed;
            z-index: 1;
        }
        

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            background-color: lightgray;
            padding: 20px;
            width: 80%;
	        position: fixed;
            margin-left: 230px;
            top: 0px;
        }
       

        .table-container {
            background-color: #fff;
            padding: 5px 8px 1px 5px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-top: 120px;
            margin-left: 260px;
            margin-right: 30px;
        }



        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            width: 70px;
            height: 70px;
            object-fit: cover;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 45px;
            margin-top: 20px;
            border-left: none;
            margin-top: 0px;
            padding-bottom:30px;
            padding-top:30px;
        }
        .actions a {
            text-decoration: none;
            padding: 5px 10px;
            font-size: 14px;
            border: 1px solid transparent;
            border-radius: 5px;
            color: white;
        }
        .actions a.edit {
            background-color: #4CAF50; /* Green */
        }
        .actions a.delete {
            background-color: #f44336; /* Red */
        }
        .actions a:hover {
            opacity: 0.8;
        }

        .add-gallery{
            margin-left: 40px;
            margin-top: 20px;
        }
        .add-gallery span{
            text-decoration: none;
            border: 1px solid blue;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
        }

        .add-gallery span:hover{
            background-color: blue;
            color: white;
           
        }

        .form-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: rgb(85, 91, 255) 0px 0px 0px 3px, rgb(31, 193, 27) 0px 0px 0px 6px, rgb(255, 217, 19) 0px 0px 0px 9px, rgb(255, 156, 85) 0px 0px 0px 12px, rgb(255, 85, 85) 0px 0px 0px 15px;
            z-index: 2;
            width: auto;
            height: auto;
        }

        .frm{
        	text-align: center;
        	color: red;
        	padding-bottom: 15px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container a{
        	text-decoration: none;
        	background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 180px;
        }

        .form-container p {
            margin-top: 15px;
            font-size: 14px;
        }

       

        .form-container span {
            color: #007bff;
            cursor: pointer;
        }

        .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 18px;
        }

        .form-container form span input{
            cursor: pointer;
            color: blue;
        }

        .add-heading{
            text-align: center;
            margin-top: 20px;
            color: green;
            letter-spacing: 3px;
        }
        
    </style>
</head>

<body>
    <div class="sidebar">

        <ul>
            <li><a style=" font-size: 40px; color: blue;" href="{{ route('admin')}}">Admin</a></li>
            <li><a href="{{ route('admin-gallery')}}"><i class="fa-regular fa-image"></i> Gallery</a></li>
            <li><a href="{{ route('admin-teacher')}}" class="active"><i class="fa-solid fa-user"></i> Teachers</a></li>
            <li><a href="{{ route('admin-about')}}"><i class="fa-solid fa-message"></i> About</a></li>
            <li><a href="{{ route('admin-contact')}}"><i class="fa-solid fa-phone"></i> Contact us</a></li>
            <li><a href="{{ route('admin-blogs')}}"><i class="fa-solid fa-blog"></i> Blogs</a></li>
            <li><a href="{{ route('admin-users')}}"><i class="fa-solid fa-users"></i> Users</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="header">
            <h2>Hello, Rajesh 👋</h2>
            <input type="search" name="search" placeholder="search">
            <i class="fa fa-search" aria-hidden="true"></i>
            <img src="{{ asset('img/fac66.jpg') }}" alt="Profile Picture">
        </div>

        <div class="table-container">

        <div class="add-gallery">
            <span onclick="toggleForm('login-form')">Add Teacher</span>
        </div>

        <div class="add-heading">
            <h3>TEACHERS DETAILS</h3>
        </div>

        <table>
        <thead>
            <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        @foreach($requestAll as $value)
        <tbody>
            <tr>
                <td><img src="{{ asset('images/' . $value->profile) }}" alt="Data-Image"></td>
                <td>{{$value->name}}</td>
                <td>{{$value->Phone}}</td>
                <td>{{$value->address}}</td>
                <td colspan="2" class="actions">
                    <a href="{{ route('edit-teacher', $value->id) }}" class="edit">Edit</a>
                    <a href="{{ route('delete-teacher', $value->id) }}" class="delete">Delete</a>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>

        </div>
    </div>

    <!-----------------------------Add gallery Form--------------------------- -->

<div class="form-container" id="login-form">
    <div class="close-icon" onclick="closeForm('login-form')">X</div>
    <form action="{{ route('teacher-insert') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2 class="frm">Add Teacher</h2>
        <label>Name:</label>
        <input type="text" name="name" id="name" required>

        <label>Mobile no:</label>
        <input type="tel" name="Phone" id="phone" required>

        <label>Address:</label>
        <input type="text" name="address" id="phone" required>

        <label>Profile Photo</label>
        <input type="file" name="profile" id="profile" required>

        <span><input type="submit" value="Save"></span>
    </form>
</div>


<script>
    function toggleForm(formId) {
        // Close other forms before opening the new one
        closeForm('login-form');
        document.getElementById(formId).style.display = 'block';
    }

    function closeForm(formId) {
        document.getElementById(formId).style.display = 'none';
    }

    function submitForm(formId) {
        // You can add your form submission logic here
        console.log(`Form ${formId} submitted`);
    }
</script>

</body>

</html>