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
    
        .actions a.delete {
            background-color: #f44336; /* Red */
        }
        .actions a:hover {
            opacity: 0.8;
        }

        .add-contact{
            text-align: center;
            margin-top: 20px;
        }

        .add-contact h3{
            color: green;
            letter-spacing: 3px; 
            margin-bottom: 10px;           
        }

        .add-contact a{
            text-decoration: none;
            border: 1px solid blue;
            padding: 5px;
            border-radius: 5px; 
            background-color: blue;
            color: white;           
        }

        .add-contact a:hover{
            color: red;           
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
    </style>
</head>

<body>
    <div class="sidebar">

        <ul>
            <li><a style=" font-size: 40px; color: blue;" href="{{ route('admin')}}">Admin</a></li>
            <li><a href="{{ route('admin-gallery')}}"><i class="fa-regular fa-image"></i> Gallery</a></li>
            <li><a href="{{ route('admin-teacher')}}"><i class="fa-solid fa-user"></i> Teachers</a></li>
            <li><a href="{{ route('admin-about')}}"><i class="fa-solid fa-message"></i> About</a></li>
            <li><a href="{{ route('admin-contact')}}"><i class="fa-solid fa-phone"></i> Contact us</a></li>
            <li><a href="{{ route('admin-blogs')}}"><i class="fa-solid fa-blog"></i> Blogs</a></li>
            <li><a href="{{ route('admin-users')}}" class="active"><i class="fa-solid fa-users"></i> Users</a></li>
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

        <div class="add-contact">
            <h3>Faculties Registration Details</h3>
            <a href="{{ route('Users-logout') }}" class="delete">LogOut</a>
        </div>

        <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th>
				<th>Password</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Subjects</th>
                <th>Joining Later</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach($Allusers as $value)
        <tbody>
            <tr>
                <td>{{$value->first_name}}</td>
                <td>{{$value->last_name}}</td>
                <td>{{$value->email}}</td>
				<td>{{$value->password}}</td>
                <td>{{$value->phone}}</td>
				<td>{{$value->gender}}</td>
                <td>{{$value->subject}}</td>
				<td>{{$value->profile}}</td>
                <td class="actions">
                    <a href="{{ route('delete-register', $value->id) }}" class="delete">Delete</a>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>

        </div>
    </div>


</body>

</html>