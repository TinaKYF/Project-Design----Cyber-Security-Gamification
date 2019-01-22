<?php
session_start();
$_SESSION['loc'] = "index.php";
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
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
<body>

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
			  <!-- <img src="img/logo.png" alt="Logo"> -->
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
				<!-- <li><a href="login.html">Login</a></li> -->
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	  </div>
	</div>
  </div>
</header><!-- header close -->
	
<!-- Slider Start -->
<section id="slider">
  <div class="container">
	<div class="row">
	  <div class="col-md-10 col-md-offset-2">
		<div class="block">
		  <h1 class="animated fadeInUp">Cyber Security Gamification</h1>
		  <p class="animated fadeInUp">You can learn many cyber security threads </br> and you can gain training in our gamification system </p>
		</div>
	  </div>
	</div>
  </div>
</section>
<!-- Wrapper Start -->
<section id="intro">
  <div class="container">
	<div class="row">
	  <div class="col-md-7 col-sm-12">
		<div class="block">
		  <div class="section-title">
			<h2>About You</h2>
			<p>You are a staff of a business, and you have initial budget for the business’s cyber protection. The attacker (AI) will attack your business in kinds of ways and these ways have different switches which need to be defended from your choices.</p>
		  </div>
		  <p>Actually, if you can protect your business by keep away from the attacks with the budget you have, you will be the winner.</p>
		</div>
	  </div><!-- .col-md-7 close -->
	  <div class="col-md-5 col-sm-12">
		<div class="block">
		  <img src="img/wrapper-img.gif" alt="Img">
		</div>
	  </div><!-- .col-md-5 close -->
	</div>
  </div>
</section>

<section id="feature">
<div class="container">
  <div class="row">
	<div class="col-md-6 col-md-offset-6">
	  <h2>THE GREAT SYSTEM FOR SAFETY</h2>
	  <p>The game has different scenarios for various types of business, so there are 3 degrees set as easy, normal and hard modes. And easy mode is the first will be implemented, which is used for small business protection from common cyber attacks. For examples, junk mails and weak passwords etc.</p>
	  <p>Normal mode and hard mode are designed for medium business and large business, they contain more attack ways and protection means. And the audience are almost managers of a big company or an individual business. Like hackers employed by competitors, it is a high-level attack in some way.</p>
	  <p>Each mode has its features and easy mode is more suitable for the great majority. The other two will be used more professionally.</p>
	  <a href="work.html" class="btn btn-view-works">View Games</a>
	</div>
  </div>
</div>
</section>
	
<!-- Service Start -->
<section id="service">
  <div class="container">
	<div class="row">
	  <div class="section-title">
		<h2>WHAT WE WILL SUPPLY</h2>
		<p>At first, players get money set by different modes and the game will start. Players will receive attacks from attackers (AI) in random, and choose switches of the protection ways within different cost from the budget. Like password, it has weak passwords as only simple numbers, normal passwords and strong passwords contain capital letters and lowercases, symbols.</p>
		<p>And in different parts, players might defend successfully or not, they could gain money or lose budget from the results of attacks. The winner standard is that the final budget should be larger than initial budget.</p>
	  </div>
	</div>
  </div>
</section>
<div class="tlinks">Collect from <a href="#" >anywhere</a></div>
<!-- Call to action Start -->
<section id="call-to-action">

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
		<p>Copyright &copy; 2016.<a href="#" target="_blank" title="sit374">SIT374</a></p>
	  </div>
	</div>
  </div>
</footer>
		
</body>
</html>