<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Izumi</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="assets/css/carousel-with-thumb.css">
	<!-- Pushy CSS -->
	<link rel="stylesheet" href="assets/css/pushy.css">

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	<!-- Modernizr -->
	<script src="assets/js/vendor/modernizr.custom.71422.js"></script>
</head>
<body>
<!-- Pushy Menu -->
	<nav class="pushy pushy-left">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li class="divider"></li>	
			<li><a href="about-us.php">ABOUT US</a></li>
			<li class="divider"></li>	
			<li><a href="water-essential.php">WATER ESSENTIALS</a></li>
			<li class="divider"></li>		
			<li><a href="kitchen-essential.php">KITCHEN ESSENTIALS</a></li>
			<li class="divider"></li>	
			<li><a href="air-essential.php">AIR ESSENTIALS</a></li>
			<li class="divider"></li>	
			<li><a href="home-essential.php">HOME ESSENTIALS</a></li>
			<li class="divider"></li>	
			<li><a href="health-essential.php">HEALTH ESSENTIALS</a></li>
			<li><a href="contact-us.php">CONTACT US</a></li>
		</ul>
	</nav>

	<!-- Site Overlay -->
	<div class="site-overlay"></div>

	<div class="menu-btn visible-xs push">
		<div class="pull-left">&#9776; Menu</div>
		<div class="pull-right">
			<ul>
				<li><a href="www.facebbok.com"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>

	<header class="push">
		<div class="head-top">
			<div class="container">
				<div class="col-md-6">
					<div id="dropdown_cont">
						<select id="dropdown" name="dropdown" class="form-control pull-left">
							<option key="select-lang" class="tr">Select your language</option>
							<option id="en" class="lang">English</option>
							<option id="ja" class="lang tr" key="japanese">Japanese</option>
						</select>
					</div>
					<div class="info"><i class="fa fa-envelope-o"></i> info@izumijapancorp.com</div>
				</div>
				<div class="col-md-6">
					<ul class="pull-right">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-nav container">
			<div class="col-md-2 logo">
				<img src="assets/img/logo.png" alt="">
			</div>
			<div class="col-md-10 nav-wrapper">
				<!-- Menu Button -->
				<ul class="nav nav-pills hidden-xs hidden-sm">
					<li><a href="index.php" key="home" class="tr">HOME</a></li>
					<li class="menu-divider">•</li>
					<li><a href="about-us.php" key="about" class="tr">ABOUT US</a></li>
					<li class="menu-divider">•</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle tr" data-toggle="dropdown" key="products">PRODUCTS <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="water-essential.php" key="water" class="tr">WATER ESSENTIALS</a></li>
							<li class="divider"></li>		
							<li><a href="kitchen-essential.php" key="kitchen" class="tr">KITCHEN ESSENTIALS</a></li>
							<li class="divider"></li>	
							<li class="active"><a href="air-essential.php" key="air" class="tr">AIR ESSENTIALS</a></li>
							<li class="divider"></li>	
							<li><a href="home-essential.php" key="home-essential" class="tr">HOME ESSENTIALS</a></li>
							<li class="divider"></li>	
							<li><a href="health-essential.php" key="health" class="tr">HEALTH ESSENTIALS</a></li>
						</ul>
					</li>
					<li class="menu-divider">•</li>
					<li><a href="contact-us.php" key="contact" class="tr">CONTACT US</a></li>
				</ul>
			</div>
		</div>
		
	</header>
	<!-- Your Content -->
	<div id="container">
		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="#" key="home" class="tr">Home</a>
				</li>

				<li class="active tr" key="air">AIR ESSENTIALS</li>
			</ol>
			<div class="multi-products">
				<div class="product-title">
					<h1 key="air" class="tr">AIR ESSENTIALS</h1>
				</div>
				<div class="product-display">
					<div class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<img src="assets/img/products/products-16.jpg" alt="">
							<div class="caption">
								<h3 key="vakufit" class="tr">Vakufit Hydrocleaning Machine</h3>
								<p key="vaku-detail" class="tr">The affordable hydro cleaning machine is a german technology and manufactured cleaning system that utilizes water filtration technology to clean air and sanitize your home. Vakufit is advanced with water filtration technology that can aid you in extraordinary deep cleaning. It will turn your house into a home. Never settle for less.</p>
								<a href="vakufit-hydrocleaning-machine.php" key="more" class="tr btn btn-primary">More Info</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="thumbnail">
							<img src="assets/img/products/products-4.jpg" alt="">
							<div class="caption">
								<h3 key="pro-aqua" class="tr">Pro-Aqua Air and Room Cleaning System</h3>
								<p key="pro-aqua-detail" class="tr">Clean air is healthy air! The innovative and aesthetically designed cleaning system uses only water as a</p>
								<a href="pro-aqua-air-and-room-cleaning-system.php" key="more" class="tr btn btn-primary">More Info</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		

		<footer>
		<div class="footer container">
			<ul>
				<li><a href="index.php" key="home" class="tr">HOME</a></li>
				<li class="menu-divider">•</li>
				<li><a href="about-us.php" key="about" class="tr">ABOUT US</a></li>
				<li class="menu-divider">•</li>
				<li><a href="water-essential.php" key="water" class="tr">WATER ESSENTIAL</a></li>
				<li class="menu-divider">•</li>
				<li><a href="kitchen-essential.php" key="kitchen" class="tr">KITCHEN ESSENTIAL</a></li>
				<li class="menu-divider">•</li>
				<li><a href="air-essential.php" key="air" class="tr">AIR ESSENTIAL</a></li>
				<li class="menu-divider">•</li>
				<li><a href="home-essential.php" key="home-essential" class="tr">HOME ESSENTIAL</a></li>
				<li class="menu-divider">•</li>
				<li><a href="home-essential.php" key="health" class="tr">HEALTH ESSENTIAL</a></li>
				<li class="menu-divider">•</li>
				<li><a href="contact-us.php" key="contact" class="tr">CONTACT US</a></li>
			</ul>
		</div>
		<hr>
		<div class="footer-img"><img src="assets/img/footer-img.png" alt=""></div>
	</footer>
	</div><!-- end of id container -->

	<!-- script link -->
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/main.js" type="text/javascript"></script>
	<script src="assets/js/carousel-with-thumb.js" type="text/javascript"></script>
	<!-- Pushy JS -->
	<script src="assets/js/pushy.min.js"></script>

</body>
</html>