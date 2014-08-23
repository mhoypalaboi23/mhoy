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
	<link rel="stylesheet" href="assets/css/elastislide.css">
	<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/custom.css" />
	<!-- Pushy CSS -->
	<link rel="stylesheet" href="assets/css/pushy.css">

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	<!-- Modernizr -->
	<script src="assets/js/vendor/modernizr.custom.71422.js"></script>
	<script src="assets/js/modernizr.custom.17475.js"></script>
	<!-- elastislide js -->
	<script type="text/javascript" src="assets/js/elastislide/jquerypp.custom.js"></script>
	<script type="text/javascript" src="assets/js/elastislide/jquery.elastislide.js"></script>
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
							<li class="active"><a href="water-essential.php" key="water" class="tr">WATER ESSENTIALS</a></li>
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
		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="#" key="home" class="tr">Home</a>
				</li>

				<li><a href="#" key="water" class="tr">Water Essentials</a></li>
				<li class="active tr" key="alkastream">alkaStream AOK Non-Electric Alkaline Ionizer</li>
			</ol>
			<div class="single-products">
				<div class="product-title">
					<h1 key="water" class="tr">Water Essentials</h1>
				</div>
				<div class="product-display">
					<div class="col-sm-12 col-md-4">
						<div class="gallery">
							<div class="image-preview">
								<img id="preview" src="assets/img/products/products-17.jpg" />
							</div>
							<!-- Elastislide Carousel -->
							<ul id="carousel" class="elastislide-list">
								<li data-preview="assets/img/products/products-17.jpg"><a href="#"><img src="assets/img/products/products-17.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/products-32.jpg"><a href="#"><img src="assets/img/products/products-32.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/products-33.jpg"><a href="#"><img src="assets/img/products/products-33.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/products-34.jpg"><a href="#"><img src="assets/img/products/products-34.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/products-35.jpg"><a href="#"><img src="assets/img/products/products-35.jpg" alt="image04" /></a></li>
							</ul>
							<!-- End Elastislide Carousel -->

							
						</div>

					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="single-product-detail">
						<h1 key="alkastream" class="tr">alkaStream AOK Non-Electric Alkaline Ionizer</h1>
						<h2 key="description" class="tr">Description: </h2>
						<div class="row" style="margin-left: 0; margin-right: 0;">
							<img src="assets/img/poster-7.jpg" alt="" class="pull-right" style="margin-left: 14px; max-width: 150px;">
							<p key="alka-detail" class="tr">The alkaStream AOK Non-Electric Alkaline Water Ionizer is comprised of 8 filter layers that deliver the cleanest possible water out of your tap. Unlike many water filters on the market, alkaStream AOK keeps all of the healthy minerals in, so your body receives all the proper nourishment that our body needs.</p>
							<p>It is a mineral alkaline water ionizer, which converts the regular tap water into alkaline and ionized water by the excellent 8 layer filter system and gives you pH level 9 that is not just efficient but also gives the best result that is expected from a pure water.</p>
						</div>
						<div class="row" style="padding-left: 15px;" style="margin-left: 0; margin-right: 0;">
							
							<p>The <b>alkaStream</b> AOK is attached to the faucet with diverter valve that still gives you the option to do your chores using the regular tap water without the hassle. Only need to twist it up for alkaline water production and twist it back down for the regular chlorinated water.</p>
							<h1>FILTERS</h1>

							<p>Excellent 8 layer filter with Ion Exchange Resins, KDF, Activated Granular Carbon, Anion Minerals, FIR Energy Beads and so on.</p>
							<p>alkaStream AOK’s unique water is created through 8 layers of filtration and energising media working synergistically. The process is based on scientifically proven research by Dr. Hidemitsu Hayashi, Director of the Water Institute of <i>Japan</i>.</p>
							<img src="assets/img/poster-8.jpg" alt="" style="margin-right: 14px; max-width: 150px;">
							<div>
								<p>For a full breakdown of each layer and their functions please read below:</p>

								<p><b>8. Neodymium Magnenetic Field</b> to stabilize the IONIC charge and reduced molecular size.</p>

								<p><b>7. Catalytic Carbon and KDF</b> to improve final taste and remove unwanted non-beneficial trace elements.</p>

								<p><b>6. Trace Minerals and Far Infrared</b> ceramics adds more than 70 beneficial trace elements.</p>

								<p><b>5. Energizing Media</b> creates anti-oxidants and reduces the size of water molecules thereby increasing hydration.</p>

								<p><b>4. KDF and Magnesium in an activated carbon media</b> removes heavy metals such as lead and mercury and creates free hydrogen.</p>

								<p><b>3. Catalytic Carbon</b> reduces organic contaminants, colour, odour, taste, pesticides, THMs, chlorine and VOCs.</p>

								<p><b>2. Ion Exchange Media</b> (NSF approved) reduces hard water and neutralizes fluoride. NSF is a non-profit organization which promotes and supports research and education in the sciences.
								</p>
								<p><b>1. Ceramic Filter Membrane</b> stops all sediment and bacteria over 0.2 microns in size.</p>
							</div>
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

<script type="text/javascript" src="assets/js/jquerypp.custom.js"></script>
<script type="text/javascript" src="assets/js/jquery.elastislide.js"></script>
<script type="text/javascript">

			// example how to integrate with a previewer

			var current = 0,
			$preview = $( '#preview' ),
			$carouselEl = $( '#carousel' ),
			$carouselItems = $carouselEl.children(),
			carousel = $carouselEl.elastislide( {
				current : current,
				minItems : 4,
				onClick : function( el, pos, evt ) {

					changeImage( el, pos );
					evt.preventDefault();

				},
				onReady : function() {

					changeImage( $carouselItems.eq( current ), current );

				}
			} );

			function changeImage( el, pos ) {

				$preview.attr( 'src', el.data( 'preview' ) );
				$carouselItems.removeClass( 'current-img' );
				el.addClass( 'current-img' );
				carousel.setCurrent( pos );

			}

		</script>

		<!-- script link -->
		<script src="assets/js/bootstrap.js" type="text/javascript"></script>
		<script src="assets/js/main.js" type="text/javascript"></script>
		<script src="assets/js/carousel-with-thumb.js" type="text/javascript"></script>
		<!-- Pushy JS -->
		<script src="assets/js/pushy.min.js"></script>



	</body>
	</html>