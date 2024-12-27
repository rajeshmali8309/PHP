<!DOCTYPE html>
<html>
<head>
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

        .information h5{
            font-size: 20px;
        }

        .pagination {
			margin-top: 80px;
			padding-left: 180px;
			}


	</style>
</head>
<body>
<div class="main-body">
		<div class="Body">
			<img src="{{ asset('img/bgimage.jpg') }}">
			   <div class="img-text">
			   	<h5>Our Best Faculties</h5>
			   </div> 

			   	<div class="img-text1">
			   	<p>Data Guru-Guru SMP Nagri Cibadak</p>
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
                        <li><a href="{{ route('teacher') }}"  class="active">Teachers</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('blog') }}">Blogs</a></li>
				        <span><a href="{{ route('registerlogin') }}" class="user-icon"><i class="fas fa-user user-icon"></i></a></span>
		            </ul>
		            </nav>
              </div>
        </div>

        <div class="search-bar">
            <input type="search" placeholder="Search Teacher">
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>

        <hr style="margin: 100px 60px 0px 60px;">
<!-----------------------------heading close--------------------------- -->

<!-----------------------------faculty section start----------------- -->

<div class="main-pic">
            @if($teachersData->isEmpty())
                <p>No Teachers found.</p>
            @else
            @foreach($teachersData as $teacher)
            <div class="pic-1">
                <img src="{{ asset('images/' . $teacher->profile) }}">
                <div class="information">
                    <h5>Name: {{$teacher->name}}</h5>
                    <p>Contact: {{$teacher->Phone}}</p>
                    <p>Address: {{$teacher->address}}</p>
                </div>
            </div>
            @endforeach
            @endif
            
        </div>
    </div>
    <div class="pagination">
		  <a href="#">&laquo;</a>
		  <a href="#" class="action">1</a>
		  <a href="#">2</a>
		  <a href="#">3</a>
		  <a href="#">4</a>
		  <a href="#">5</a>
		  <a href="#">&raquo;</a>
    </div>

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
				<li><a href="{{ route('index') }}">Home</a></li>
				<li><a href="{{ route('gallery') }}">Gallery</a></li>
				<li><a href="{{ route('teacher') }}" class="active">Teachers</a></li>
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

</body>
</html>