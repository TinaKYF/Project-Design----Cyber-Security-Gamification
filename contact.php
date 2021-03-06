<?php
session_start();
require_once('showdetail.php');
$_SESSION['loc'] = "contact.php";
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- Js -->
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/min/waypoints.min.js"></script>
<script src="js/jquery.counterup.js"></script>

<!--<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/google-map-init.js"></script>--->

<script src="js/main.js"></script>

</head>
<body id="top">
<!-- Header Start -->
<header>
<div class="container">
<div class="row">
  <div class="col-md-12">
	<!-- header Nav Start -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.html">
			
		  </a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
			<li><a href="work.php">Game</a></li>
			<!-- <li><a href="#">Support</a></li>
			<li><a href="#">Service</a></li> -->
			<li><a href="contact.php">Contact</a></li>
			<?php
				if(!isset($_SESSION['username'])){
					echo "<li><a href='login.html'>Login</a></li>";
				}else{
					echo "<li><a href='logout.php'>Logout</a></li>";
				}
			?>
		</ul>
		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	  </nav>
	</div>
  </div>
</div>
</header><!-- header close -->

<!-- Slider Start -->
<section id="global-header">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="block">
		  <h1>Drop Us A Note</h1>
		  <p>Don’t just take our word for it. Check out some of our latest work.</p>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- contact form start -->
<section id="contact-form">
  <div class="container">
	<div class="row">
	  <div class="col-md-6 col-sm-12">
		<div class="block">
		  <form>
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Your Name" value="<?php if(isset($_SESSION['name']))echo $_SESSION['name'];?>">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Email Address">
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Subject">
			</div>
		  </form>
		</div>
	  </div>
	  <div class="col-md-6 col-sm-12">
		<div class="block">
		  <form>
			<div class="form-group-2">
			  <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
			</div>
			<button class="btn btn-default" type="submit">Send Message</button>
		  </form>
		</div>
	  </div>
	</div>
	<div id="contact-box" class="row">
	  <div class="col-md-6 col-sm-12">
		<div class="block">
		  <h2>Stop By For A visit</h2>
		  <ul class="address-block">
			<li>
			  <i class="fa fa-map-marker"></i>75,elgar RD
			</li>
			<li>
			  <i class="fa fa-envelope-o"></i>Email: @deakin.edu.au
			</li>
			<li>
			  <i class="fa fa-phone"></i>Phone:
			</li>
		  </ul>

		  <ul class="social-icons">
			<li>
			  <a href="#"><i class="fa fa-google"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-linkedin"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-pinterest"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-dribbble"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-behance"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-twitter"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-facebook"></i></a>
			</li>
		  </ul>
		</div>
	  </div>
	  <div class="col-md-6 col-sm-12">
		<div class="block">
		  <h2>We Also Count In Google Map</h2>
			<div class="google-map">
			  <div id="map"></div>
			</div>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Call to action Start -->
<section id="call-to-action">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="block">
		  <h2>That is end of our page</h2>
		  <p>Click here to find more</p>
		  <a class="btn btn-default btn-call-to-action" href="#top" >go to top</a>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- footer Start -->
<footer>
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="footer-manu">
		  <ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact us</a></li>
			<li><a href="#">How it works</a></li>
			<li><a href="#">Support</a></li>
			<li><a href="#">Terms</a></li>
		  </ul>
		</div>
		<p>Copyright &copy;<a href="#" target="_blank">SIT374</a> - Collect from <a target="_blank">Anywhere</a></p>
	  </div>
	</div>
  </div>
</footer>

</body>
</html>