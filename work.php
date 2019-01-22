<?php
session_start();
$_SESSION['loc'] = "work.php";
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
<script src="js/min/waypoints.min.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/plugins.js"></script>
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
						<!--<li><a href="login.html">Login</a></li>-->
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
					<h1>Just start your learning journey</h1>
					<p>You can find the way to start it. Have fun!</p>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- Portfolio Start -->
<section id="portfolio-work">
	<div class="container" id="all">
		<div class="row">
		  <div class="col-md-12">
			<div class="block">
			  <div class="portfolio-menu">
				<ul>
					<li class="filter" data-filter="all">Everything</li>
					<li class="filter" data-filter=".design">Game</li>
					<li class="filter" data-filter=".Branding">Knowledge</li>
					<!-- <li class="filter" data-filter=".Websites">Websites</li>
					<li class="filter" data-filter=".Graphic">Trail</li>-->
					<li class="filter" data-filter=".Video">About</li>
				</ul>
			  </div>
			  <div class="portfolio-contant">
				<ul id="portfolio-contant-active">

				  <!-- <li class="mix Websites">
					<a href="#">
					  <img src="img/portfolio/work2.jpg" alt="">
					  <div class="overly">
						<div class="position-center">
						  <h2>Tesla Motors</h2>
						  <p>Labore et dolore magna aliqua. Ut enim ad </p>

						</div>
					  </div>
					</a>
				  </li>-->
				  <?php
				  if(!isset($_SESSION['username'])){
					  echo '<li class="mix design">
						<a href="TrialVersion.html">
						  <img src="img/portfolio/work8.jpg" alt="">
						  <div class="overly">
							<div class="position-center">
							  <h2>Trial Game</h2>
							  <p>you can try this one first, have fun!</p>
							</div>
						  </div>
						</a>
					  </li>
					  <li class="mix design" id="game">
						<a href="login2.html">
						  <img src="img/portfolio/work9.jpg" alt="">
						  <div class="overly">
							<div class="position-center">
							  <h2>Click this</h2>
							  <p>&nbsp&nbsp&nbspTo start your safety journey.</p>
							</div>
						  </div>
						</a>
					  </li>';
				  }
				  else{
				      include('conn.php');
                      $score = mysqli_query($db, "SELECT score FROM registration WHERE username=" . $_SESSION['username']);
                      $level = mysqli_query($db, "SELECT level FROM registration WHERE username=" . $_SESSION['username']);
					  echo '<li class="mix design" id="game">';
					  if($level == ""){echo '<a href="EasyScenario.html">';}
					  if($level == "1"){
					     if($score < 80){
					        echo '<a href="EasyScenario.html">';
					        }
					      else{echo '<a href="EasyScenario1.html">';}
					  }
					  if($level == "2"){
                         if($score < 80){
                            echo '<a href="EasyScenario1.html">';
                            }
                          else{echo '<a href="MediumScenario.html">';}
                      }
                      if($level == "3"){
                         if($score < 80){
                            echo '<a href="MediumScenario.html">';
                            }
                          else{echo '<a href="MediumScenario1.html">';}
                      }
                      if($level == "4"){
                         if($score < 80){
                            echo '<a href="MediumScenario1.html">';
                            }
                          else{echo '<a href="MediumScenario2.html">';}
                      }
                      if($level == "5"){
                         if($score < 80){
                            echo '<a href="MediumScenario2.html">';
                            }
                          else{echo '<a href="HardScenario.html">';}
                      }
                      if($level == "6"){echo '<a href="HardScenario.html">';}
						  echo '<img src="img/portfolio/work9.jpg" alt="">
						  <div class="overly">
							<div class="position-center">
							  <h2>Click this</h2>
							  <p>&nbsp&nbsp&nbspTo start your safety journey.</p>

							</div>
						  </div>
						</a>
					  </li>
					  <li class="mix design">
						<a href="TrialVersion.html">
						  <img src="img/portfolio/work8.jpg" alt="">
						  <div class="overly">
							<div class="position-center">
							  <h2>Trial Game</h2>
							  <p>you can try this one first, have fun!</p>
							</div>
						  </div>
						</a>
					  </li>';
				  }
				  ?>
				  <li class="mix Branding">
					    <a href="http://localhost/PhaserPOC/src/index.html">
						  <img src="img/portfolio/work7.jpg" alt="">
						  <div class="overly">
						    <div class="position-center">
							  <h2>Tutorial Game</h2>
							  <p>help you understand how to start this game</p>
						    </div>
						  </div>
					    </a>
				    </li>
				  <li class="mix Video">
					<a href="#">
					  <img src="img/portfolio/work10.jpg" alt="">
					  <div class="overly">
						<div class="position-center">
						  <h2>Other information</h2>
						  <p>There are knowledges about other cyber security threads</p>

						</div>
					  </div>
					</a>
				  </li>
				  <!-- <li class="mix Graphic">
					<a href="#">
					  <img src="img/portfolio/work6.jpg" alt="">
					  <div class="overly">
						<div class="position-center">
						  <h2>Tesla Motors</h2>
						  <p>Labore et dolore magna aliqua. Ut enim ad </p>

						</div>
					  </div>
					</a>
				  </li> -->
				</ul>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</section>

<!-- Clients Logo Section Start -->
<!-- <section id="clients-logo-section">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="block">
		  <div id="clients-logo" class="owl-carousel">
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo1.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo2.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo3.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo4.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo5.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo3.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo2.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo5.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo1.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo4.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo5.png" alt="Features">
			</div>
			<div class="clients-logo-img">
			  <img src="img/clients/clients-logo3.png" alt="Features">
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>-->


<!-- Call to action Start -->
<section id="call-to-action">
  <div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="block">
		  <h2>That is end of our page</h2>
		  <p>Read more about what we do and our philosophy of design.Learn more knowledge and train yourself.</p>
		  <a class="btn btn-default btn-call-to-action" href="#all" >Come to game</a>
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
			  <p>Copyright &copy;<a href="#" target="_blank"></a> - Collect from <a target="_blank">Anywhere</a></p>
			</div>
		</div>
	</div>
</footer>

</body>
</html>
