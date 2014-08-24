<!DOCTYPE html>
<html lang="fr">
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
	<script src="assets/js/langpack/nonDynamic.js" charset="utf-8" type="text/javascript"></script>

	<script type="text/javascript">
    // Create language switcher instance and set default language to en
	window.lang = new Lang('en');
    </script>

    <script type="text/javascript">
	var lang = new Lang('en');
	lang.dynamic('th', 'assets/js/langpack/th.json');
</script>
</head>
<body>
	<!-- Pushy Menu -->
	<nav class="pushy pushy-left">
		<ul>
			<li><a href="index.php" key="home" class="tr">HOME</a></li>
			<li class="divider"></li>	
			<li><a href="about-us.php" key="about" class="tr">ABOUT US</a></li>
			<li class="divider"></li>	
			<li><a href="water-essential.php" key="water" class="tr">WATER ESSENTIALS</a></li>
			<li class="divider"></li>		
			<li><a href="kitchen-essential.php" key="kitchen" class="tr">KITCHEN ESSENTIALS</a></li>
			<li class="divider"></li>	
			<li><a href="air-essential.php" key="air" class="tr">AIR ESSENTIALS</a></li>
			<li class="divider"></li>	
			<li><a href="home-essential.php" key="home-essential" class="tr">HOME ESSENTIALS</a></li>
			<li class="divider"></li>	
			<li><a href="health-essential.php" key="health" class="tr">HEALTH ESSENTIALS</a></li>
			<li><a href="contact-us.php" key="contact" class="tr">CONTACT US</a></li>
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
					<li class="active"><a href="index.php" key="home" class="tr">HOME</a></li>
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
							<li><a href="air-essential.php" key="air" class="tr">AIR ESSENTIALS</a></li>
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
		<!-- main slider carousel -->
		<div class="row">
			<div id="slider">

				<div id="carousel-bounding-box">
					<div id="myCarousel" class="carousel slide">
						<!-- main slider carousel items -->
						<div class="carousel-inner">
							<div class=" item active" data-slide-number="0">
								<img src="assets/img/slider/slider-1.jpg" class="img-responsive">
							</div>
							<div class="item" data-slide-number="1">
								<img src="assets/img/slider/slider-2.jpg" class="img-responsive">
							</div>
							<div class="item" data-slide-number="2">
								<img src="assets/img/slider/slider-3.jpg" class="img-responsive">
							</div>
							<div class="item" data-slide-number="3">
								<img src="assets/img/slider/slider-4.jpg" class="img-responsive">
							</div>
							<div class="item" data-slide-number="4">
								<img src="assets/img/slider/slider-5.jpg" class="img-responsive">
							</div>
						</div>

						<!-- main slider carousel nav controls --> 
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
					</div>
				</div>
				<!-- thumb navigation carousel -->
				<div id="slider-thumbs">
					<!-- thumb navigation carousel items -->
					<ul class="list-inline">
						<li data-slide-number="0"> <a id="carousel-selector-0" class="selected">
							<img src="assets/img/slider/slider-1.jpg" class="img-responsive">
						</a></li>
						<li data-slide-number="1"> <a id="carousel-selector-1">
							<img src="assets/img/slider/slider-2.jpg" class="img-responsive">
						</a></li>
						<li data-slide-number="2"> <a id="carousel-selector-2">
							<img src="assets/img/slider/slider-3.jpg" class="img-responsive">
						</a></li>
						<li data-slide-number="3"> <a id="carousel-selector-3">
							<img src="assets/img/slider/slider-4.jpg" class="img-responsive">
						</a></li>
						<li data-slide-number="4"> <a id="carousel-selector-4">
							<img src="assets/img/slider/slider-5.jpg" class="img-responsive">
						</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!--/main slider carousel-->
		<div class="about container">
			<div class="arrow_box"><h1 key="about" class="tr">About Us</h1></div>
			<p key="izumi-intro" class="tr">Izumi is now known to us as the access to the fountain of life; but even before all that, we should tell you about the Izumi Inspiration – the Izumi Man. A British journalist for the Guinness Book of Records was on an assignment to interview Shigechiyo Izumi, the world’s oldest documented living person, a 115-year-old man in remarkably good health. The journalist was amazed by Izumi’s vitality and the fact that he had worked until the age of 105.</p>
			<a href="about-us.php" key="read-more" class="tr">Read More</a>
		</div>
		<div class="ikw ">
			<div class="container">
				<h1 key="izumi-mean" class="tr">What is IZUMI KANGEN WATER ® ?</h1>
				<p><span>.......................................................................................................................</span></p>
				<p key="izumi-defi" class="tr">Izumi Kangen Water is delicious water created from enagics innovative water technology. Not only do these devices filter your tap water, but they also produce ionized alkaline and acidic water through electrolysis. These waters can be used for various purposes, including drinking, cooking, beauty, and cleaning</p>
				<h2 key="device" class="tr">Devices form Izumi produce 5 different types of water These water types have many health benefits</h2>
				<div class="row">
					<div class="col-sm-4 col-md-2">
						<div class="thumbnail">
							<img src="assets/img/water-1.png" alt="">
							<div class="caption">
								<h3 key="s-kangen" class="tr">Strong kangen® water</h3>
								<p>PH 10.0</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-2">
						<div class="thumbnail">
							<img src="assets/img/water-2.png" alt="">
							<div class="caption">
								<h3 key="i-kangen" class="tr">IZUMI kangen water®</h3>
								<p>ph 8.5 - 9.5</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-2">
						<div class="thumbnail">
							<img src="assets/img/water-3.png" alt="">
							<div class="caption">
								<h3 key="n-water" class="tr">Natural Water</h3>
								<p>ph 7.0</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-2">
						<div class="thumbnail">
							<img src="assets/img/water-4.png" alt="">
							<div class="caption">
								<h3 key="b-water" class="tr">Beauty Water</h3>
								<p>PH 4.0 - 6.0</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-2">
						<div class="thumbnail">
							<img src="assets/img/water-5.png" alt="">
							<div class="caption">
								<h3 key="s-acidic" class="tr">Strong Acidic Water</h3>
								<p>ph s.5</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="products">
				<div class="arrow_box"><h1 key="featured" class="tr">Featured Products</h1></div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<div class="carousel slide media-carousel" id="media">
						<div class="carousel-inner">
							<div class="item  active">
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<div class="thumb-img"><img src="assets/img/products/products-8.jpg" alt=""></div>
											<div class="caption">
												<h3 key="anti-chlorine" class="tr">Anti-Chlorine Vita-C Shower Filter</h3>
												<p key="anti-chlorine-detail" class="tr">Right after a rigorous physical activity, nothing can be more comforting than a hot shower. Besides, who doesn’t like hot showers especially in the cold mornings? The thing about hot showers though is that the hot water causes our pores to open up, making chlorine very easy to seep through our skin. Chlorine is the cheapest way for water distribution companies to disinfect water. The risk though is that large amounts of chlorine over time can be detrimental to health.</p>
												<a href="anti-chlorine vita-c-shower-filter.php" key="more" class="tr btn btn-primary">More Info</a>
											</div>
										</div>
									</div>  
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<div class="thumb-img"><img src="assets/img/products/products-2.jpg" alt=""></div>
											<div class="caption">
												<h3 key="antioxidant" class="tr">Antioxidant Alkaline Water Ionizer (Digital)</h3>
												<p key="antioxidant-detail" class="tr">Enjoy Healthy and Organic Food without the hassle of buying from all-organic farms or searching for expensive organic food in the supermarket.</p>
												<a href="izumi-pro-organic-food-sterilizer.php" key="more" class="tr btn btn-primary">More Info</a>
											</div>
										</div>
									</div>    
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<div class="thumb-img"><img src="assets/img/products/products-13.jpg" alt=""></div>
											<div class="caption">
												<h3 key="nutritional" class="tr">Nutritional Cooking System</h3>
												<p key="nutritional-detail" class="tr">The Izumi Nutritional Cooking System is proud to bring you the world’s finest cookware that meets your demands for healthy cooking that’s easy and energy-efficient.</p>
												<a href="izumi-nutritional-cooking-sysytem.php" key="more" class="tr btn btn-primary">More Info</a>
											</div>
										</div>
									</div>  
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<div class="thumb-img"><img src="assets/img/products/products-4.jpg" alt=""></div>
											<div class="caption">
												<h3 key="pro-aqua" class="tr">PRO-AQUA AIR AND ROOM CLEANING SYSTEM</h3>
												<p key="pro-aqua-detail" class="tr">Clean air is healthy air! The innovative and aesthetically designed cleaning system uses only water as a filter, requiring only three liters of water can already clean the entire house. If you have allergies or asthma, The Pro-Aqua cleaning system is safe and can even help to alleviate some symptoms by improving air quality and room climate. It cleans the air and does dry and wet cleaning, air washing and scenting, inhalation, bed and mattress cleaning, carpet and upholstery cleaning, and vacuuming. </p>
												<a href="pro-aqua-air-and-room-cleaning-system.php" key="more" class="tr btn btn-primary">More Info</a>
											</div>
										</div>
									</div>     
								</div>
							</div>
							<div class="item"><div class="row">
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<div class="thumb-img"><img src="assets/img/products/products-14.jpg" alt=""></div>
										<div class="caption">
											<h3 key="izumi-energy" class="tr">IZUMI ENERGY BRACELETS</h3>
											<p key="izumi-energy-detail" class="tr">Your Izumi Energy Bracelet leads the field in high-technological jewelry, with five types of constant-release energies that benefit the wearer.</p>
											<a href="izumi-energy-bracelets.php" key="more" class="tr btn btn-primary">More Info</a>
										</div>
									</div>
								</div>  
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<div class="thumb-img"><img src="assets/img/products/products-15.jpg" alt=""></div>
										<div class="caption">
											<h3 key="dispenser" class="tr">IZUMI Bottleless Hot &amp; Cold Ultrafiltration Water Dispenser</h3>
											<p key="dispenser-detail">This free-standing dispenser has two water options – hot and cold – ideal to wake up your senses with coffee or quench your thirst with a cool glass of water. It can heat or cool up to 30 gallons per hour and can bring convenience to your home or office.</p>
											<a href="izumi-bottlesless-hot&cold-ultrafiltration-water-dispenser.php" key="more" class="tr btn btn-primary">More Info</a>
										</div>
									</div>
								</div>    
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<div class="thumb-img"><img src="assets/img/products/products-16.jpg" alt=""></div>
										<div class="caption">
											<h3 key="vakufit" class="tr">VAKUFIT HYDROCLEANING MACHINE</h3>
											<p key="vaku-detail" class="tr">Vakufit Air and Room Cleaning System is such a great help for allergy sufferers, especially small children. Many allergens, including excrement of dust mites, pollen, fungus spores, and numerous micro-organisms are  hidden in dust. With Vakufit, now you can vacuum with peace of mind. These particulates stay in water are disposed off forever!</p>
											<a href="vakufit-hydrocleaning-machine.php" key="more" class="tr btn btn-primary">More Info</a>
										</div>
									</div>
								</div>  
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<div class="thumb-img"><img src="assets/img/products/products-17.jpg" alt=""></div>
										<div class="caption">
											<h3 key="alkastream" class="tr">alkaStream AOK NON-ELECTRIC ALKALINE IONIZER</h3>
											<p key="alka-detail" class="tr">The alkaStream AOK Non-Electric Alkaline Water Ionizer is comprised of 8 filter layers that deliver the cleanest possible water out of your tap. Unlike many water filters on the market, alkaStream AOK keeps all of the healthy minerals in, so your body receives all the proper nourishment that our body needs.</p>
											<a href="alkastream-aok-none-electric-alkaline-ionizer.php" key="more" class="tr btn btn-primary">More Info</a>
										</div>
									</div>
								</div>     
							</div>
						</div>
					</div>
					<a data-slide="prev" href="#media" class="left carousel-control"><i class="fa fa-angle-left"></i></a>
					<a data-slide="next" href="#media" class="right carousel-control"><i class="fa fa-angle-right"></i></a>
				</div>                          
			</div>
		</div>
	</div>
	<div class="certificates row">
		<div class="certi-logos">
			<img src="assets/img/certificates.png" alt="">
		</div>
		<div class="certificate-btn">
			<a href="contact-us.php"><img src="assets/img/char-1.png" alt=""><span key="invest" class="tr">INVEST IN YOUR HEALTH</span> <i class="fa fa-arrow-circle-right"></i></a>
			<a href="contact-us.php"><img src="assets/img/char-2.png" alt=""><span key="invest" class="tr">INVEST IN YOUR HEALTH</span> <i class="fa fa-arrow-circle-right"></i></a>
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
<script src="assets/js/jquery-cookie.js"></script>
<script src="assets/js/jquery-lang.js"></script>

</body>
</html>