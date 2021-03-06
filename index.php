<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/head-link.php';?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body id="index-body">
	<!-- header -->
	<?php include 'layout/header.php';?>
	<!-- Your Content -->
	<div id="container">
		<!-- main slider carousel -->
		<div class="">
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
				<h1 key="izumi-mean" class="tr">What is IZUMI ALKALINE KANGEN WATER ® ?</h1>
				<p><span>.......................................................................................................................</span></p>
				<p key="izumi-defi" class="tr">Izumi Alkaline Kangen Water is delicious water created from Izumi's innovative water technology. Not only do these devices filter your tap water, but they also produce ionized alkaline and acidic water through electrolysis. These waters can be used for various purposes, including drinking, cooking, beauty, and cleaning.</p>
				<h2 key="device" class="tr">Devices form Izumi produce 5 different types of water These water types have many health benefits</h2>
				<div class="row">
					<div class="col-sm-4 col-md-2">
						<div class="thumbnail">
							<img src="assets/img/water-1.png" alt="">
							<div class="caption">
								<h3 key="s-kangen" class="tr">Strong Alkaline kangen® water</h3>
								<p>PH 10.0</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-2">
						<div class="thumbnail">
							<img src="assets/img/water-2.png" alt="">
							<div class="caption">
								<h3 key="i-kangen" class="tr">IZUMI Alkaline kangen water®</h3>
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
			<div class='row multi-products'>
				<div class='col-md-12'>
					<div class="carousel slide media-carousel" id="media">
						<div class="carousel-inner">
							<div class="item  active">
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<div class="thumb-img"><img src="assets/img/products/HOME ESSENTIALS/SHOWER-FILTER/Anti-Chlorine-Vita-C-Shower-Filter-0.jpg" alt=""></div>
											<div class="caption">
												<h3 key="anti-chlorine" class="tr">Anti-Chlorine Vita-C Shower Filter</h3>
												<p key="anti-chlorine-detail" class="tr">Right after a rigorous physical activity, nothing can be more comforting than a hot shower. Besides, who doesn’t like hot showers especially in the cold mornings? The thing about hot showers though is that the hot water causes our pores to open up, making chlorine very easy to seep through our skin. Chlorine is the cheapest way for water distribution companies to disinfect water. The risk though is that large amounts of chlorine over time can be detrimental to health.</p>
												<a href="anti-chlorine vita-c-shower-filter.php" key="more" class="tr btn btn-primary">More Info</a>
											</div>
										</div>
									</div>  
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<div class="thumb-img"><img src="assets/img/products/KITCHEN-ESSENTIALS/OZONATOR/Izumi-Pro-organic-Food-Sterilizer-0.jpg" alt=""></div>
											<div class="caption">
												<h3 key="antioxidant" class="tr">Izumi Pro-organic Food Sterilizer</h3>
												<p key="antioxidant-detail" class="tr">Enjoy Healthy and Organic Food without the hassle of buying from all-organic farms or searching for expensive organic food in the supermarket.</p>
												<a href="izumi-pro-organic-food-sterilizer.php" key="more" class="tr btn btn-primary">More Info</a>
											</div>
										</div>
									</div>    
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<div class="thumb-img"><img src="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-0.jpg" alt=""></div>
											<div class="caption">
												<h3 key="nutritional" class="tr">Nutritional Cooking System</h3>
												<p key="nutritional-detail" class="tr">The Izumi Nutritional Cooking System is proud to bring you the world’s finest cookware that meets your demands for healthy cooking that’s easy and energy-efficient.</p>
												<a href="izumi-nutritional-cooking-sysytem.php" key="more" class="tr btn btn-primary">More Info</a>
											</div>
										</div>
									</div>  
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<div class="thumb-img"><img src="assets/img/products/AIR-ESSENTIALS/AIR-PURIFICATION/Air-Purification-0.jpg" alt=""></div>
											<div class="caption">
												<h3 key="pro-aqua" class="tr">Air Purification System with Smart Sensor Technology
</h3>
												<p key="pro-aqua-detail" class="tr">Air quality easily ranks as among the most influential factors on our health, as evidenced in countries that suffer from high levels of air pollution and over the course of our lives this can have a very harmful effect, and lead to an increased risk of serious diseases.</p>
												<a href="Air-Purification-System-with-Smart-Sensor-Technology.php" key="more" class="tr btn btn-primary">More Info</a>
											</div>
										</div>
									</div>     
								</div>
							</div>
							<div class="item"><div class="row">
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<div class="thumb-img"><img src="assets/img/products/HEALTH-ESSENTIALS/Energy-Bracelet/Energy-Bracelet-1.jpg" alt=""></div>
										<div class="caption">
											<h3 key="izumi-energy" class="tr">IZUMI ENERGY BRACELETS</h3>
											<p key="izumi-energy-detail" class="tr">Your Izumi Energy Bracelet leads the field in high-technological jewelry, with five types of constant-release energies that benefit the wearer.</p>
											<a href="izumi-energy-bracelets.php" key="more" class="tr btn btn-primary">More Info</a>
										</div>
									</div>
								</div>  
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<div class="thumb-img"><img src="assets/img/products/WATER WATER-ESSENTIALS/Bottleless-HoT-&-Cold-Ultrafiltration-Water-Dispenser/Bottleless-HoT-&-Cold-Ultrafiltration-Water-Dispenser-1.jpg" alt=""></div>
										<div class="caption">
											<h3 key="dispenser" class="tr">IZUMI Bottleless Hot &amp; Cold Ultrafiltration Water Dispenser</h3>
											<p key="dispenser-detail">This free-standing dispenser has two water options – hot and cold – ideal to wake up your senses with coffee or quench your thirst with a cool glass of water. It can heat or cool up to 30 gallons per hour and can bring convenience to your home or office.</p>
											<a href="izumi-bottlesless-hot&cold-ultrafiltration-water-dispenser.php" key="more" class="tr btn btn-primary">More Info</a>
										</div>
									</div>
								</div>    
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<div class="thumb-img"><img src="assets/img/products/HEALTH-ESSENTIALS/High-Potential-Therapeutic-Equipment/High-Potential-Therapeutic-Equipment-1.jpg" alt=""></div>
										<div class="caption">
											<h3 key="izumi" class="tr">IZUMI High Potential Therapeutic Equipment</h3>
											<p key="vaku-detail" class="tr">Negative Potential Energy increases the permeability of cell membranes and enhances the composition of ATP, which is responsible for transporting chemical energy within cells for metabolism.</p>
											<a href="IZUMI-High-Potential-Therapeutic-Equipment.php" key="more" class="tr btn btn-primary">More Info</a>
										</div>
									</div>
								</div>  
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<div class="thumb-img"><img src="assets/img/products/WATER WATER-ESSENTIALS/Antioxidant-Alkaline-Water-Ionizer-(Digital)/Antioxidant-Alkaline-Water-Ionizer-(Digital)-1.jpg" alt=""></div>
										<div class="caption">
											<h3 key="alkastream" class="tr">IZUMI Antioxidant Alkaline Water Ionizer (Digital)</h3>
											<p key="alka-detail" class="tr">Live a healthier life by allowing your body to be more balanced. Izumi Antioxidant Alkaline Water Ionizer (Digital) model transforms drinking water into a way to detoxify. It eliminates the need for supplementary antioxidant and is a purer alternative to chemically derived detoxifiers.</p>
											<a href="Antioxidant-Alkaline-Water-Ionizer-(Digital).php" key="more" class="tr btn btn-primary">More Info</a>
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
	<div class="certificates ">
		<div class="certi-logos">
			<img src="assets/img/certificates.png" alt="">
		</div>
		<div class="certificate-btn">
		<div class="">
		<div class="row">
			<div class="col-md-6">
				<a href="contact-us.php"><img src="assets/img/char-1.png" alt=""><span key="invest" class="tr">INVEST IN YOUR HEALTH</span> <i class="fa fa-arrow-circle-right"></i></a>
			</div><!-- 6cols -->
			<div class="col-md-6">
				<a href="contact-us.php"><img src="assets/img/char-2.png" alt=""><span key="invest" class="tr">INVEST IN YOUR HEALTH</span> <i class="fa fa-arrow-circle-right"></i></a>
			</div><!-- 6cols -->
		</div><!-- row -->
			
			
		</div>
	</div>

	<!-- footer -->
	<?php include 'layout/footer.php';?>

</div><!-- end of id container -->
<?php include 'layout/script-link.php'; ?>

</body>
</html>