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

		.Gallery-box{
			 background-color: whitesmoke;
			 height: 770px;
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

		.Gallery-box .hedd{
			margin-top: 150px;
			padding-top: 30px;
			text-align: center;
			font-size: 20px;
		}

		@media only screen and (max-width: 768px) {
            .full-body{
            	background-color: white;
            	height: 100%;
            	width: 800px;
            }

            .Gallery-box{
				background-color: whitesmoke;
				height: 100%;
				width: 100%;
			}

			.Gallery-box .hedd h4{
            	font-size: 40px;
            }

            .gallery {
			    display: list-item;
			    flex-direction: row;
			    text-align: center;
			}

			.img-box {
			    display: list-item;
			    justify-content: space-between;
			    gap: 25px;
			    margin-left: 125px;
			    margin-right: 400px;
			}

			.img-box img {
			    width: 550px;
			    height: 430px;
			    border-radius: 7px;
			    padding-bottom: 30px;
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
<div class="Gallery-box">
	<div class="hedd">
		<h4>Gallery</h4>
	</div>
	<div class="gallery">
    <div class="img-box">
        <img src="{{ asset('img/std1.jpg') }}" alt="Image 1">
        <img src="{{ asset('img/std2.jpg') }}" alt="Image 2">
        <span class="glbg"><img src="{{ asset('img/std3.jpg') }}" alt="Image 3"></span>
    </div>
    <div class="img-box">
        <img src="{{ asset('img/std4.jpeg') }}" alt="Image 4">
        <img src="{{ asset('img/std5.jpg') }}" alt="Image 5">
        <span class="glbg"><img src="{{ asset('img/std6.jpg') }}" alt="Image 6"></span>
    </div>
    <div class="pagination">
		  <a href="#">&laquo;</a>
		  <a href="#" class="action">1</a>
		  <a href="#">2</a>
		  <a href="#">3</a>
		  <a href="#">&raquo;</a>
    </div>
</div>
</div>

<!-----------------------------Gallery section End----------------- -->

<!------------------------------Footer start------------------------ -->
@include('layout.footer') <!-- Footer Include -->
<!------------------------------Footer End------------------------ -->

</body>
</html>