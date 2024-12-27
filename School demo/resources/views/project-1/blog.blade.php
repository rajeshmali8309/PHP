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
             padding-right: 63px;
        }
</style>
</head>
<body>
<div class="main-body">
		<div class="Body">
			<img src="{{ asset('img/bgimage.jpg') }}">
			   <div class="img-text">
			   	<h5>Blogs</h5>
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
				           <li><a href="{{ route('contact') }}">Contact Us</a></li>
				           <li><a href="{{ route('blog') }}" class="active">Blogs</a></li>
				           <span><a href="{{ route('registerlogin') }}" class="user-icon"><i class="fas fa-user user-icon"></i></a></span>
			           </ul>
		            </nav>
              </div>
        </div>
<!-----------------------------heading close--------------------------- -->
<!------------------------------Blog part start------------------------ -->
<div class="blog-head">
        <h3>Blogs</h3>
    </div>
    <div class="Blogs">
        <div class="blog">
            <img src="{{ asset('img/blog1.jpg') }}">
            <h5>LIBRARY AREA:</h5>
            <p>When you are well equipped<br> with each and</p>
            <a href="">View More.........</a>

        </div>
        <div class="blog">
            <img src="{{ asset('img/blog2.jpg') }}">
            <h5>Group Discussion</h5>
            <p>Group discussion topics for college students <br>are based on various subject matters such as</p>
            <a href="">View More.........</a>

        </div>
        <div class="blog">
            <img src="{{ asset('img/blog3.jpg') }}">
            <h5>CAREER CENTER:</h5>
            <p>This center will help you to choose <br>right path for reaching success.</p>
            <a href="">View More....</a>

        </div>
    </div>
    <div class="Blogs-1">
        <div class="img">
            <img src="{{ asset('img/blog4.jpg') }}">
        </div>
        <div class="img-content">
            <h5>Shiksha Bank Library -<br>
                Free Education for All :</h5>
            <p>We accept your old books as donations,<br> and maintain a Shiksha Bank Library housing <br>3,0000+ books
                which provides access to <br> education to 10000+ students Read More..</p>
            <a href="#">Read More</a>
        </div>
    </div>
        <div class="Blogs">
        <div class="blog">
            <img src="{{ asset('img/blog1.jpg') }}">
            <h5>LIBRARY AREA:</h5>
            <p>When you are well equipped<br> with each and</p>
            <a href="">View More.........</a>

        </div>
        <div class="blog">
            <img src="{{ asset('img/blog2.jpg') }}">
            <h5>Group Discussion</h5>
            <p>Group discussion topics for college students <br>are based on various subject matters such as</p>
            <a href="">View More.........</a>

        </div>
        <div class="blog">
            <img src="{{ asset('img/blog3.jpg') }}">
            <h5>CAREER CENTER:</h5>
            <p>This center will help you to choose <br>right path for reaching success.</p>
            <a href="">View More....</a>

        </div>
    </div>
    <div class="Blog-1">
        <div class="blogss">
            <img src="{{ asset('img/blog8.jpg') }}">
            <h5>LIBRARY AREA:</h5>
            <p>When you are well equipped<br> with each and</p>
            <a href="">View More.........</a>
        </div>
    </div>
    <div class="Report">
        <div class="college">
            <h4>Recent post</h4>
            <p>Online Exam Registration</p>
           <p class="p1">EXAMINATION</p>
        </div>
<!------------------------------Blog part end------------------------ -->

<!------------------------------Footer start------------------------ -->
@include('layout.footer') <!-- Footer Include -->
<!------------------------------Footer End------------------------ -->

</body>
</html>