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
        .full-body{
            	background-color: white;
            	height: 100%;
            	width: 100%;
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

		.gallery-container {
            max-width: 900px;
            margin: 100px auto;
            padding: 20px;
        }

        .gallery-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .gallery-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.12);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
			backgroud-color: yellowgreen;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .gallery-item h2 {
            font-size: 1.25rem;
            text-align: center;
            padding: 10px 0;
            color: #555;
        }

        .gallery-item p {
            font-size: 0.9rem;
            padding: 0 10px 10px;
            color: #666;
            text-align: center;
        }

		@media (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: 1fr;
             }
        }

		@media only screen and (max-width: 768px) {
            .full-body{
            	background-color: white;
            	height: 100%;
            	width: 800px;
            }

		  	.gallery-grid {
                grid-template-columns: repeat(2, 1fr);
              }

			.pagination {
				padding-left: 0px;
				font-size: 50px;
				padding-bottom: 20px;
				
			}

			.pagination a {
				padding: 8px 25px;
				}

			.colm img{
				height: 200px;
				width: 170px;
			}
			.colm p{
				font-size: 45px;
			}

			.colm h3{
				font-size: 50px;
				margin-bottom: 30px;
			}

			.colm ul li a{
				font-size: 45px;
			}

			.colm h4{
				font-size: 45px;
				padding-bottom: 20px;
			}

			.social-icons .fab{
				font-size: 40px;
				padding: 15px;
				margin-bottom: 20px;
			}

			.row p{
				font-size: 35px;
			}

        }

@media only screen (min-width: 769px) and (max-width: 1024px) {
             .nav-links{
			 	margin-left: 700px;
			 }

			 .header nav{
			 	position: absolute;
			 	top:49px;
			 }

			 .nav-links ul{
			 	position: absolute;
			 	top: 0;
			 	right: 10;
			 }

			.nav-links li{
				list-style: none;
				display: inline-block;
				margin: 5px 15px;
			}

}

	</style>
</head>
<body>
	<div class="full-body">
	<div class="main-body">
		       <div class="header">

			        <div class="logo">
				         <img src="{{ asset('img/logo11.png') }}">
			        </div>
                    <nav>			          
					<ul class="nav-links">
						<li><a href="{{ route('index') }}">Home</a></li>
						<li><a href="{{ route('gallery') }}" class="active">Gallery</a></li>
						<li><a href="{{ route('teacher') }}">Teachers</a></li>
						<li><a href="{{ route('about') }}">About</a></li>
						<li><a href="{{ route('contact') }}">Contact Us</a></li>
						<li><a href="{{ route('blog') }}">Blogs</a></li>
					 <span><a href="{{ route('registerlogin') }}" class="user-icon"><i class="fas fa-user user-icon"></i></a></span>
			       </ul>
		            </nav>
              </div>
        </div>
<!-----------------------------heading close--------------------------- -->
	<!-----------------------------Gallery section start----------------- -->
	<div class="gallery-container">
        <h1 class="gallery-title">Gallery</h1>
        <div class="gallery-grid">
            @if($galleries->isEmpty())
                <p>No galleries found.</p>
            @else
                @foreach($galleries as $gallery)
                    <div class="gallery-item">
                        <img src="{{ asset('images/' . $gallery->profile) }}" alt="{{ $gallery->title }}">
                        <h2>{{ $gallery->title }}</h2>
                        <p>{{ $gallery->description }}</p>
                    </div>
                @endforeach
            @endif
        </div>

		<div class="pagination">
		  <a href="#">&laquo;</a>
		  <a href="#" class="action">1</a>
		  <a href="#">2</a>
		  <a href="#">3</a>
		  <a href="#">&raquo;</a>
    </div>
    </div>


<!-----------------------------Gallery section End----------------- -->
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
				<li><a href="{{ route('gallery') }}" class="active">Gallery</a></li>
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
</body>
</html>