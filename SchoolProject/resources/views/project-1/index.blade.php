<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=josefin+sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<title></title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="full-body">
	<div class="main-body">
		<div class="Body">
			<img src="{{ asset('img/bgimage.jpg') }}">
			        <div class="container">
                    	  <h5>MOTTO</h5><br>
                    	  <h4>SMP N 1 Cibadak (Cerdas Beretika) Ceria, Empati,<br>Rasional, Damai, Aktif, Sabar, Bersih, Elok, Tulus, iman,<br> Consiste, Amanah. </h4><br>
       	                  <a href="">Contact Us</a>
                   </div>
		</div>
		       <div class="header">

			        <div class="logo">
				         <img src="{{ asset('img/logo11.png') }}">
			        </div>
                    <nav>			          
					<ul class="nav-links">
				           <li><a href="{{ route('index') }}" class="active">Home</a></li>
				           <li><a href="{{ route('gallery') }}">Gallery</a></li>
				           <li><a href="{{ route('teacher') }}">Teachers</a></li>
				           <li><a href="{{ route('about') }}">About</a></li>
				           <li><a href="{{ route('contact') }}">Contact Us</a></li>
				           <li><a href="{{ route('blog') }}">Blogs</a></li>
				           <span><a href="{{ route('registerlogin') }}" class="user-icon"><i class="fas fa-user user-icon"></i></a></span>
			           </ul>
			           <i class="fa-sharp fa-solid fa-bars"></i>
		            </nav>
              </div>
        </div>
<!-----------------------------heading close--------------------------- -->

<!-----------------------------teacher blog start--------------------------- -->
<div class="teacher">
   	  	 <div class="teacher-img">
   	  	 	<img src="{{ asset('img/teacher.jpg') }}">
   	  	 	<div class="teacher-side">
   	  	 	<h4>Sambhtan Kepala Sekolaha <br> SMP Negeri 1 Cibadak</h4>
   	  	 	<h6>Puji dan syukur mari kita panjatkan kehadirat allah SWT. Yang senantiasa dengan<br><br> sifar kasih dan sayangnya banyak memberikan nikmat...</h6><br><br><br>

   	  	 	<a href="#">more...</a>

   	  	 	</div>
   	  	 </div>
</div>
<!-----------------------------teacher blog start--------------------------- -->


<!-----------------------------blog start--------------------------- -->
<div class="blog-box">
	<div class="blog-box1">
	<div class="head">
		<p>Blogs</p>
	</div>
	    <div class="blog1">
	    	<img src="{{ asset('img/home1.jpeg') }}">
	    	<h4>Fasilitas</h4>
	    	<p>Lorem ipsum dolor sit amet adipcing<br><br>aqua lorem ipsum</p>
	    </div>
	    <div class="blog2">
	    	<img src="{{ asset('img/home2.jpg') }}">
	    	<h4>Fasilitas</h4>
	    	<p>Lorem ipsum dolor sit amet adipcing<br><br>aqua lorem ipsum</p>
	    </div>
	    <div class="blog3">
	    	<img src="{{ asset('img/home3.jpg') }}">
	    	<h4>Fasilitas</h4>
	    	<p>Lorem ipsum dolor sit amet adipcing<br><br>aqua lorem ipsum</p>
	    </div>
</div>
</div>


<!-----------------------------blog start End--------------------------- -->

<!-----------------------------Faculty blog start--------------------------- -->
<div class="faculty-box">
	<div class="hdd">
		<h4>Our best Faculties</h4>
		<div class="slider-container">
            <div class="slider">

               <div class="slide">
               	<img src="{{ asset('img/fac1.jpg') }}" alt="Image 1">
               	 <p>Durgesh banjara</p>
               </div>

               <div class="slide">
               	<img src="{{ asset('img/fac2.jpg') }}" alt="Image 2">
               	<p>Harsha chawriya</p>
               </div>

               <div class="slide">
               	<img src="{{ asset('img/fac3.jpg') }}" alt="Image 3">
               	<p>Ravi mali</p>
               </div>

               <div class="slide">
               	<img src="{{ asset('img/fac4.jpg') }}" alt="Image 4">
               	<p>Deepika Parihar</p>
               </div>

               <div class="slide">
               	<img src="{{ asset('img/fac5.jpg') }}" alt="Image 5">
               	<p>Komal solanki</p>
               </div>

               <div class="slide">
               	<img src="{{ asset('img/fac6.jpg') }}" alt="Image 6">
               	<p>Rajesh mali</p>
               </div>

               <div class="slide">
               	<img src="{{ asset('img/fac4.jpg') }}" alt="Image 7">
               	<p>Deepika Parihar</p>
               </div>

               <div class="slide">
               	<img src="{{ asset('img/fac5.jpg') }}" alt="Image 8">
               	<p>Komal solanki</p>
               </div>

               <div class="slide">
               	<img src="{{ asset('img/fac6.jpg') }}" alt="Image 9">
               	<p>Rajesh mali</p>
               </div>

            </div>
               <button class="prev"><</button>
               <button class="next">></button>
        </div>
	</div>
</div>
<!-----------------------------Faculty blog End--------------------------- -->

<!-----------------------------Gallery section start----------------- -->
<div class="Gallery-box">
	<div class="hedd">
		<h4>Gallery</h4>
	</div>
	<div class="gallery">
    <div class="img-box">
        <img src="{{ asset('img/std1.jpg') }}" alt="Image 1">
        <img src="{{ asset('img/std2.jpg') }}">
        <img src="{{ asset('img/std3.jpg') }}">
    </div>
    <div class="img-box">
        <img src="{{ asset('img/std4.jpeg') }}" alt="Image 4">
        <img src="{{ asset('img/std5.jpg') }}" alt="Image 5">
        <img src="{{ asset('img/std6.jpg') }}" alt="Image 6">
    </div>
    <div class="G-btn">
    	<a href="{{ route('gallery') }}">See More</a>
    </div>
</div>
</div>

<!-----------------------------Gallery section End----------------- -->
<!------------------------------Footer start------------------------ -->
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
</div>
</body>
<!-----------------------------Faculty blog javascript start--------------------------- -->
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  const slideWidth = slides[0].offsetWidth + 10; // Width of slide + margin

  let currentSlide = 0;
  const slideCount = slides.length;
  const visibleSlides = 5; // Number of slides to show at a time

  function showSlides() {
    if (currentSlide < 0) {
      currentSlide = slideCount - visibleSlides;
    } else if (currentSlide > slideCount - visibleSlides) {
      currentSlide = 0;
    }
    const offset = -1 * currentSlide * slideWidth;
    slider.style.transform = `translateX(${offset}px)`;
  }

  function slideNext() {
    currentSlide++;
    showSlides();
  }

  function slidePrev() {
    currentSlide--;
    showSlides();
  }

  nextBtn.addEventListener('click', slideNext);
  prevBtn.addEventListener('click', slidePrev);

  // Auto slide every 3 seconds
  setInterval(function() {
    slideNext();
  }, 3000);
});
</script>
<!-----------------------------Faculty blog javascript End--------------------------- -->
</html>