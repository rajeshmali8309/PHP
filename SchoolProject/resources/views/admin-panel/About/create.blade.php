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
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
            margin-left: 260px;
            margin-right: 5px;
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
        
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        form h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        form label {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        form a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: blue;
            font-size: 16px;
            padding: 10px;
            background-color: greenyellow;
            border-radius: 3px;
        }

        form a:hover {
            background-color: yellowgreen;            
        }

        form input::placeholder{
            color: red;
            }
            
        form textarea::placeholder{
            color: red;
            }

       
    </style>
</head>

<body>
    <div class="sidebar">

        <ul>
            <li><a style=" font-size: 40px; color: blue;" href="{{ route('admin')}}">Admin</a></li>
            <li><a href="{{ route('admin-gallery')}}"><i class="fa-regular fa-image"></i> Gallery</a></li>
            <li><a href="{{ route('admin-teacher')}}"><i class="fa-solid fa-user"></i> Teachers</a></li>
            <li><a href="{{ route('admin-about')}}" class="active"><i class="fa-solid fa-message"></i> About</a></li>
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
                        
    
            <form action="{{ route('about-insert') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 class="frm">Add About</h2>
                
                <label for="title">Title:</label>
                <input type="text" name="title" placeholder="@error('title'){{ $message }} @enderror" id="title">
            

                <label for="message">About information:</label>
                <textarea name="information" placeholder="@error('information'){{ $message }} @enderror" id="message" rows="5"></textarea>
    

                <input type="submit" value="Save">
                <a href="{{ route('admin-about') }}">Back...</a>
           </form>              
      
        </div>
   </div>

</body>

</html>