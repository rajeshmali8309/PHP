<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=josefin+sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<title></title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<style type="text/css">
        .Body{
        	position: relative;
        }

		.Body img{
		    height: 400px;
		}

		.header{
	         background-color: black;
	         width: 100%;
	         position: fixed;
	         z-index: 1;
        }

        .header nav{
 	         position: fixed;
        }

        .img-text h5{
             padding-right: 45px;
        }
</style>
</head>
<body>
<div class="main-body">
		<div class="Body">
			<img src="{{ asset('img/bgimage.jpg') }}">
			   <div class="img-text">
			   	<h5>Contact Us</h5>
			   </div> 

			   	<div class="img-text1">
			   	<p>Data Guru-Guru SMP Nagri 1 Cibadak</p>
			   </div> 
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
				           <li><a href="{{ route('contact') }}" class="active">Contact Us</a></li>
				           <li><a href="{{ route('blog') }}">Blogs</a></li>
				           <span><a href="{{ route('registerlogin') }}" class="user-icon"><i class="fas fa-user user-icon"></i></a></span>
		            </ul>
		            </nav>
              </div>
        </div>
<!-----------------------------heading close--------------------------- -->
<!---------------------------- Contact Start--------------------------- -->
    <div class="contact-heading">
    	    <p>CONTACT</p>
    	    <h2>Contact For Any Query</h2>
    </div>

	<form class="contact-page" action="{{ route('contact-insert') }}" method="post" enctype="multipart/form-data">
	    @csrf
    	   	  <input type="text" name="name" placeholder="Enter Your Name" required>
    	   	  <input type="email" name="email" placeholder="Enter Your Email" required> 

    	   	  <div class="contact-subject">
    	   	  <input type="subject" name="subject" placeholder="Add Subject" required> 
    	   	  </div>  

    	   	  <div class="contact-msg">
    	   	  	<textarea name="query" rows="12" cols="94" oninput="text" placeholder="Write Query"></textarea>
    	   	  </div> 
            <div class="s-btn">
            	<input type="submit" name="">
            </div>
    </form>

    <div class="location">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14686.356814252105!2d72.55101063974459!3d23.0388507629445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f521640d4b%3A0x6853ee97a9a2996b!2sNavrangpura%2C%20Ahmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1721950845619!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
<!---------------------------- Contact End--------------------------- -->


<!------------------------------Footer start------------------------ -->
<div class="footer">
	<div class="row">
		<div class="colm">
			<img src="{{ asset('img/logo11.png') }}">
			<p class="colo">Sonela,Reodar<br>Sirohi (Raj.307513)</p>
		</div>
		
		<div class="colm">
			<h3 class="cl" style="letter-spacing: 2px; padding-bottom: 8px;">Useful links</h3>
			<ul>
				<li><a href="{{ route('index') }}" class="active">Home</a></li>
				<li><a href="{{ route('gallery') }}">Gallery</a></li>
				<li><a href="{{ route('teacher') }}">Teachers</a></li>
				<li><a href="{{ route('about') }}">About</a></li>
				<li><a href="{{ route('contact') }}">Contact Us</a></li>
				<li><a href="{{ route('blog') }}">Blogs</a></li>
			    <span><a href="{{ route('registerlogin') }}" class="user-icon"><i class="fas fa-user user-icon"></i></a></span>
			 </ul>
		</div>

		<div class="colm">
			<h3 class="cl" style="letter-spacing: 2px; padding-bottom: 8px">Address</h3>
			<p class="colo">Mandar</p>
			<p class="colo">Reodar, Sirohi</p>
			<p class="colo">Rajasthan, PIN 307513, India</p>
			<p class="email-id" style="color: blue;">rajeshmali35545@gmail.com</p>
			<h4 style="color: blue;">+91 - 8302803362</h4>
		</div>

		<div class="colm">
			<h3 class="cl" style="letter-spacing: 2px; padding-bottom: 8px">Newsletter</h3>
			<div class="social-icons">
				<a href="https://www.facebook.com/profile.php?id=100057215265438&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/_rajeshmali8309?igsh=MWg0aGdpZ2xkZnhkag=="><i class="fab fa-instagram"></i></a>
				<a href="https://www.linkedin.com/in/rajesh-kumar-54b1612b0?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i></a>
				<a href="https://wa.me/qr/VSFIMGPZ6EOLH1"><i class="fab fa-whatsapp"></i></a>
			</div>
		</div>
    </div>
    <hr style="width: 100%;">
    <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50" style="margin-top: 10px; color: black;">&copy; <a href="#">Domain</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right" style="margin-top: 10px;">
                <p class="m-0 text-white-50" style="color: black;">Designed by- <a href="https://www.instagram.com/_rajeshmali8309?igsh=MWg0aGdpZ2xkZnhkag==" style="letter-spacing: 4px; color: yellowgreen;">Rajesh Mali</a>
                </p>
            </div>
        </div>
</div>
<!------------------------------Footer End------------------------ -->
