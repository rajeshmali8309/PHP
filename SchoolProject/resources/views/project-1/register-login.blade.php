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
        .form-head2{
        	text-align: center;
        	padding-top: 50px;
        }

        .form-head p a{
        	cursor: pointer;
        	color: blue;
        }

        .form-head h3{
            font-size: 26px;
        }

		.form-head h4{
            font-size: 20px;
			color: yellowgreen;
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

		form input{
            width: 475px;
		}

        
    </style>
</head>
<body>
<div class="register-page">
    <div class="left-div">
    <form action="{{ route('check-teacherlogin') }}" method="post" enctype="multipart/form-data" class="form-box">
        @csrf
       	<div class="form-head">
    		<h3>Only for Teachers Login</h3>
    		<p>For New Registeration:- <span><a href="{{ route('registerlogin') }}">Sign Up</a></span></p><br>

			@if(session('success'))
              <h4>{{ session('success') }}<h4>
           @endif
    	</div>

        <div class="form-head2">
    		<h4>Enter Write Details for Login</h4>
    	</div>

    	<input type="email" name="email" placeholder="Enter Your Email" required>

        
    	<input type="password" name="password" placeholder="Enter your password" required>

    	
                 
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