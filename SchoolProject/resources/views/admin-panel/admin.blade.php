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
            width: 79%;
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
            margin-top: 60px;
            border-left: none;
            border-top: none;
            border-bottom: none;
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
        .add-gallery a{
            text-decoration: none;
            border: 1px solid blue;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
        }

        .add-gallery a:hover{
            background-color: blue;
            color: white;
           
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
            <li><a style=" font-size: 40px; color: blue;" href="{{ route('admin')}}"  class="active">Admin</a></li>
            <li><a href="{{ route('admin-gallery')}}"><i class="fa-regular fa-image"></i> Gallery</a></li>
            <li><a href="{{ route('admin-teacher')}}"><i class="fa-solid fa-user"></i> Teachers</a></li>
            <li><a href="{{ route('admin-about')}}"><i class="fa-solid fa-message"></i> About</a></li>
            <li><a href="{{ route('admin-contact')}}"><i class="fa-solid fa-phone"></i> Contact us</a></li>
            <li><a href="{{ route('admin-blogs')}}"><i class="fa-solid fa-blog"></i> Blogs</a></li>
            <li><a href="{{ route('admin-users')}}"><<i class="fa-solid fa-users"></i> Users</a></li>
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

          <div class="stats">
              <div class="stat-card">
                <h3>750K</h3>
                <p>Sale</p>
              </div>
              <div class="stat-card">
                <h3>7500</h3>
                <p>Cancels</p>
              </div>
              <div class="stat-card"> 
                <h3>7500</h3>
                <p>Total Earned</p>
              </div>
              <div class="stat-card">
                <h3>7500</h3>
                <p>Distribution</p>
              </div>
           </div>
        </div>
    </div>

</body>

</html>