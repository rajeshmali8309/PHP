<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=josefin+sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<title></title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<style>
        *{
		    margin: 0;
			padding: 0;
		}
		.header{
	        width: 99%;
        }

        .logo{
            
        }
		.nav-links li{
		    margin: 5px 7px !important;
            text-color: white;
		}
         
        .nav-links li a{
            color: black;
            font-size: 20px;
		}

		.register-page {
            display: flex;
            background-color: white;
            padding: 10px;
        }
        
        .img-div{
        	
        }

        .img-div img{
        	height: 620px;
        	width: 600px;
        }

        .left-div {
        	height: 590px;
        	width: 55%; 
        	margin-top: 10px;
        	background-color: white;           
        }

        .form-box{
        	margin: 10px 0px 0px 30px;
        	height: 100%;
        }

        .form-head{
        	text-align: center;
        	padding-top: 100px;
        }

        .form-head p a{
        	cursor: pointer;
        	color: blue;
        }

        .form-head h3{
            font-size: 26px;
        }

        .form-box input{
        	padding: 10px;
        	margin: 9px 10px 9px 100px;
        	border: 1px solid gray;
        	border-radius: 4px;
        }

        .form-btn{
        	margin-top: 20px;
        }

        .form-btn input{
        	cursor: pointer;
        }

        .form-btn input:hover{
        	background-color: blue;
            color: white;
        }

        .form-btn input{
        	text-decoration: none;
        	background-color: whitesmoke;
        	color: blue;
        	font-size: 20px;
        	border-radius: 5px;
        	padding: 5px 10px 5px 10px;
        }

        .error{
            color: red;
            margin-left: 100px;
        }
        
    </style>
</head>
<body>

<div class="register-page">
    <div class="left-div">
    <form action="{{ route('register-insert') }}" method="post" enctype="multipart/form-data" class="form-box">
        @csrf
       	<div class="form-head">
    		<h3>Only for Teachers Sign Up</h3>
    		<p>Already have an account? <span><a href="{{ route('login-form') }}">Login Now</a></span></p>
    	</div>

    	<input type="name" name="first_name" placeholder="First Name">

    	<input type="name" name="last_name" placeholder="Last Name">
        @error('first_name')
             <div class="error" style="display: inline;">{{ $message }}</div>
        @enderror

        @error('last_name')
             <div class="error" style="display: inline;">{{ $message }}</div>
        @enderror

    	<input type="email" name="email" placeholder="Enter Your Email"style="width: 475px;">
        @error('email')
             <div class="error">{{ $message }}</div>
        @enderror<br>

    	<input type="password" name="password" placeholder="Enter your password"style="width: 475px;">
        @error('password')
             <div class="error">{{ $message }}</div>
        @enderror<br>

    	<input type="tel" name="phone" placeholder="Phone Number">
       

        <label style="padding-left: 30px;">Gender:</label>
        <input style="margin: 10px;" type="radio" name="gender" value="Male">Male
        <input style="margin: 10px;" type="radio" name="gender" value="Female">Female<br>

        @error('phone')
             <div class="error" style="display: inline;">{{ $message }}</div>
        @enderror

        @error('gender')
             <div class="error"  style="display: inline;   margin-left: 53px;">{{ $message }}</div>
        @enderror<br>

        <label for="subjects" style="display: block; margin: 15px 0 0 100px;">SUBJECTS:</label>
        <input style="margin: 10px 10px 10px 100px;" type="checkbox" name="subject[]" value="PHP-Laravel">PHP-Laravel
        <input style="margin: 10px;" type="checkbox" name="subject[]" value="React Js">React Js
        <input style="margin: 10px;" type="checkbox" name="subject[]" value="HTML-CSS">HTML-CSS
        <input style="margin: 10px;" type="checkbox" name="subject[]" value="Javascript">Javascript
        @error('subject')
             <div class="error">{{ $message }}</div>
        @enderror<br>

        <label style="padding-left: 100px;">Upload your joining Later:</label>
        <input style="margin: 10px;" type="file" name="profile" value="">
        @error('profile')
             <div class="error">{{ $message }}</div>
        @enderror<br><br>

                 
         <div class="form-btn">
         	<input type="submit">
         	<input type="reset" name="reset">
         </div>
       </form>
    </div>
    
            <div class="header">

			        <div class="logo">
				         <img src="{{ asset('img/logo11.png') }}">
			        </div>
                    <nav>			          
                    <ul class="nav-links">
				           <li><a href="{{ route('index') }}">Home</a></li>
				           <li><a href="{{ route('gallery') }}">Gallery</a></li>
				           <li><a href="{{ route('teacher') }}">Teachers</a></li>
				           <li><a href="{{ route('about') }}">About</a></li>
				           <li><a href="{{ route('contact') }}">Contact Us</a></li>
				           <li><a href="{{ route('blog') }}">Blogs</a></li>
				           <span><a href="{{ route('registerlogin') }}" class="active" class="user-icon"><i class="fas fa-user user-icon"></i></a></span>
			           </ul>
		            </nav>
            </div>
    <div class="img-div">
        <img src="{{ asset('img/student.jpg') }}">
    </div>
</div>

<!-----------------------------login form--------------------------- -->

</body>
</html>        
<!-----------------------------heading close--------------------------- -->