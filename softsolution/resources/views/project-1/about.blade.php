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
            height: 600px;
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
        .container{
            margin: 110px 260px 110px 260px;
        }

        .container h4{
            margin: 120px;
        }

        .info{
            border: 1px solid gray;
            margin: 40px 200px 40px 200px;
            height: 300px;
            background-color: whitesmoke;
        }

        .info div{
            background-color: blue;
            color: white;
            text-align: center;
        }
        .info p{
            padding: 20px;
            font-size: 20px;
            text-align-last: center;
        }
    </style>
</head>
<body>
    <div class="main-body">
        <div class="Body">
            <img src="{{ asset('img/bgimage.jpg') }}">
                    <div class="container">
                          <h4 style="text-align-last: center;">SMP N 1 Cibadak (Cerdas Beretika) Ceria, Empation,<br>Rasional, Domain, Aktif, Sabar ASN, Bersih,Elok Tulus,<br> Consiste, Amanah.<br></h4>
                   </div>
        </div>
               <div class="header">

                    <div class="logo">
                         <img src="{{ asset('img/logo11.png') }}">
                    </div>
                    <nav>                     
                    <ul class="nav-links">
				           <li><a href="index">Home</a></li>
				           <li><a href="gallery">Gallery</a></li>
				           <li><a href="teacher">Teachers</a></li>
				           <li><a href="about" class="active">About</a></li>
				           <li><a href="contact">Contact Us</a></li>
				           <li><a href="blog">Blogs</a></li>
				           <span><a href="registerlogin" class="user-icon"><i class="fas fa-user user-icon"></i></a></span>
			           </ul>
                    </nav>
              </div>
        </div>

        <div class="info">
            <div>
                <h4>Information</h4>
            </div>
            <p>World where technology is rapidly transforming how we live and work, Softs Solution Service stands as a beacon of innovation and practicality. Our inception was driven by a powerful ambition: to seamlessly bridge the gap between the vast potential of technology and its tangible, accessible applications. This vision has catapulted us into the forefront of the IT industry, where we continue to break new ground every day.</p>

            <p>Education forms the backbone of our services. In a world hungry for skilled IT professionals, we have curated a suite of comprehensive IT training courses. These courses are meticulously designed to equip learners with the skills and knowledge required to excel in today’s tech-driven marketplace. Our course offerings include:</p>
            
        </div>
<!-----------------------------heading close--------------------------- -->
<!------------------------------Footer start------------------------ -->
<div class="footer">
    <div class="row">
        <div class="colm">
            <img src="{{ asset('img/logo11.png') }}">
            <p class="colo">Sonela,Reodar<br>Sirohi (Raj.307513)</p>
        </div>
        
        <div class="colm">
            <h3 class="cl" style="letter-spacing: 2px; padding-bottom: 8px;">Useful links</h3>
            <ul class="nav-links">
				           <li><a href="{{ route('index') }}">Home</a></li>
				           <li><a href="{{ route('gallery') }}">Gallery</a></li>
				           <li><a href="{{ route('teacher') }}">Teachers</a></li>
				           <li><a href="{{ route('about') }}" class="active">About</a></li>
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