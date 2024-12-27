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

        .form-head p span{
        	cursor: pointer;
        	color: blue;
        }

        .form-head h3{
            font-size: 26px;
        }

        .form-box input{
        	padding: 10px;
        	margin: 20px 10px 20px 100px;
        	border: 1px solid gray;
        	border-radius: 4px;
        }

        .form-btn{
        	
        	margin-top: 20px;
        }

        .form-btn input{
        	text-decoration: none;
        	background-color: whitesmoke;
        	color: skyblue;
        	font-size: 20px;
        	border-radius: 5px;
        	padding: 5px 20px 5px 20px;
        }

        /* ---user login page start---*/
        .user-section {
            display: inline-block;
            cursor: pointer;
        }

        .user-icon {
            font-size: 25px;
            color: red;
        }

        .user-icon:hover{
        	color: orange;
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

        .forgot-password {
            text-align: right;
            margin-top: 10px;
        }

/* ---user login page end---*/
        
    </style>
</head>
<body>

<div class="register-page">
    <div class="left-div">
       <form class="form-box">
       	<div class="form-head">
    		<h3>Registration Form</h3>
    		<p>Already have an account? <span onclick="toggleForm('login-form')">Login now</span></p>
    	</div>

    	<input type="name" name="" placeholder="First Name" required>
    	<input type="name" name="" placeholder="Last Name" required>
    	<input type="gmail" name="" placeholder="Enter Your Email"style="width: 475px;" required>
    	<input type="gmail" name="" placeholder="Confirm Email"style="width: 475px;" required>
    	<input type="tel" name="" placeholder="Phone Number">
    	<label style="padding-left: 30px;">Course:</label>
    	<select>
			<option>PHP</option>
			<option>Flutter</option>
			<option>IOS</option>
			<option>ReactJS</option>
		</select><br>
       	<label style="padding-left: 100px;">Gender:</label>
		<input type="radio" name="Gender" value="Male">Male
		<input type="radio" name="Gender" value="Female">Female<br>
         
         <div class="form-btn">
         	<input type="submit" name="submit">
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

<div class="form-container" id="login-form">
    <div class="close-icon" onclick="closeForm('login-form')">X</div>
    <form action="#" method="post">
        <h2 class="frm">Login</h2>
        <label for="login-email">Gmail ID:</label>
        <input type="email" id="login-email" name="login-email" placeholder="Enter your email" required>

        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="login-password" placeholder="Enter your password" required>

        <a href="" type="submit" onclick="submitForm('login-form')"> Login Now</a>

        <p class="forgot-password"><span onclick="toggleForm('forgot-password-form')">Forgot Password?</span></p>
    </form>
</div>

<div class="form-container" id="forgot-password-form">
    <div class="close-icon" onclick="closeForm('forgot-password-form')">X</div>
    <form action="#" method="post">
        <h2 class="frm">Forgot Password</h2>
        <label for="forgot-email">Gmail ID:</label>
        <input type="email" id="forgot-email" name="forgot-email" placeholder="Enter your email" required>
        <a href="" type="submit" onclick="submitForm('forgot-password-form')">Reset Password</a>

        <p>Already have an account? <span onclick="toggleForm('login-form')">Login now</span></p>
    </form>
</div>


<script>
    function toggleForm(formId) {
        // Close other forms before opening the new one
        closeForm('login-form');
        closeForm('forgot-password-form');
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
<!-----------------------------login form end--------------------------- -->
</body>
</html>        
<!-----------------------------heading close--------------------------- -->