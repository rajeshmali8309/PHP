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

        .pagination {
			margin-top: 80px;
			padding-left: 535px;
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
            <div class="pic-1">
                <img src="{{ asset('img/fac11.jpg') }}">
                <div class="information">
                    <h5>Name :Deepika Rathod</h5>
                    <p>Mobile.no:9435204067</p>
                    <p>Address:-Rajkot</p>
                </div>
            </div>
            <div class="pic-1">
                <img src="{{ asset('img/fac22.jpg') }}">
                <div class="information">
                    <h5>Name :Durgesh Banjara</h5>
                    <p>Mobile.no:9435203067</p>
                    <p>Address:-Navrangpura</p>
                </div>
            </div>
            <div class="pic-1">
                <img src="{{ asset('img/fac33.jpg') }}">
                <div class="information">
                    <h5>Name :Suman Banajara</h5>
                    <p>Mobile.no:9425134067</p>
                    <p>Address:-Mandar,Aburoad</p>
                </div>
            </div>
            <div class="pic-1">
                <img src="{{ asset('img/fac44.jpg') }}">
                <div class="information">
                    <h5>Name :Harsha Chawariya</h5>
                    <p>Mobile.no:9435204067</p>
                    <p>Address:-Manpur,Aburoad</p>
                </div>
            </div>
            <div class="pic-1">
                <img src="{{ asset('img/fac55.jpg') }}">
                <div class="information">
                    <h5>Name :Rajesh Mali</h5>
                    <p>Mobile.no:9435204057</p>
                    <p>Address:-Aburoad</p>
                </div>
            </div>
            <div class="pic-1">
                <img src="{{ asset('img/fac66.jpg') }}">
                <div class="information">
                    <h5>Name :Ravi Mali</h5>
                    <p>Mobile.no:9235204167</p>
                    <p>Address:-Mungthala</p>
                </div>

            </div>
            <div class="pic-1">
                <img src="{{ asset('img/fac77.jpg') }}">
                <div class="information">
                    <h5>Name :Rizzu Bhuna</h5>
                    <p>Mobile.no:6435244567</p>
                    <p>Address:-Shivaji Colony</p>
                </div>
            </div>
            <div class="pic-1">
                <img src="{{ asset('img/fac88.jpg') }}">
                <div class="information">
                    <h5>Name :Kajal Agarval</h5>
                    <p>Mobile.no:9433201467</p>
                    <p>Address:-Jaipur</p>
                </div>
            </div>
            <div class="pic-1">
                <img src="{{ asset('img/fac99.jpg') }}">
                <div class="information">
                    <h5>Name :Lalit Kumar</h5>
                    <p>Mobile.no:9435204067</p>
                    <p>Address:-Khadat</p>
                </div>
            </div>
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
@include('layout.footer') <!-- Footer Include -->
<!------------------------------Footer End------------------------ -->

</body>
</html>