<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/head-link.php';?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body>
	<!-- header -->
	<?php include 'layout/header.php';?>
	<!-- Your Content -->
	<div id="container">
		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>

				<li><a href="#">Air Essentials</a></li>
				<li class="active">Pro-Aqua Air and Room Cleaning System</li>
			</ol>
			<div class="single-products">
				<div class="product-title">
					<h1>Air Essentials</h1>
				</div>
				<div class="product-display">
					<div class="col-sm-12 col-md-4">
						<div class="gallery">
							<div class="image-preview">
								<img id="preview" src="assets/img/products/products-4.jpg" />
							</div>
							<!-- Elastislide Carousel -->
							<ul id="carousel" class="elastislide-list">
								<li data-preview="assets/img/products/products-4.jpg"><a href="#"><img src="assets/img/products/products-4.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/products-28.jpg"><a href="#"><img src="assets/img/products/products-28.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/products-29.jpg"><a href="#"><img src="assets/img/products/products-29.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/products-30.jpg"><a href="#"><img src="assets/img/products/products-30.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/products-31.jpg"><a href="#"><img src="assets/img/products/products-31.jpg" alt="image04" /></a></li>
							</ul>
							<!-- End Elastislide Carousel -->

							
						</div>

					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="single-product-detail">
						<h1>Pro-Aqua Air and Room Cleaning System</h1>
						<h2>Description: </h2>
						<img src="assets/img/poster-5.jpg" alt="" class="pull-right" style="margin-left: 14px;">
						<p>Clean air is healthy air! The innovative and aesthetically designed cleaning system uses only water as a	filter, requiring only three liters of water can already clean the entire house. If you have allergies or asthma, The Pro-Aqua cleaning system is safe and can even help to alleviate some symptoms by improving air quality and room climate. It cleans the air and does dry and wet cleaning, air washing and scenting, inhalation, bed and mattress cleaning, carpet and upholstery cleaning, and vacuuming. 
						</p>
						<h1>HOW IT WORKS</h1>

						<p>Position the Pro-Aqua in the room and let it run for a few minutes (time depends on the room size), vacuumed dust particles and odors are trapped in the water.</p>

						<p>The freshly-cleaned air is expelled again through the air exhaust outlet. A few drops of perfumed oil can be added to the water in the tank if desired. Your rooms will be filled with a pleasant fragrance within a few minutes.</p>

						<p>The Pro-Aqua is a multi-talented power house! It can hold up to the toughest applications either commercially or residentially. 100% quality, 100% German engineered and manufactured. Built to last, it is designed to keep you and your family healthy for years.</p>
						<h1>BENEFITS</h1>

						<ul>
							<li>Cleans up to the smallest details of the area</li>
							<li>Not only cleanses the surrounding but it also removes the air impurities that causes odor</li>
							<li>Provides 100% clean air</li>
							<li>Can also remove toughest stains</li>
							<li>Saves you time, effort and money as it gives best results</li>
							<li>Increases dust particles absorption and pushes dirt further down in to the water</li>
							<li>Pro- Aqua washes, deodorizes, santizes, aromatizes,  and medicates the air</li>
						</ul>

						<h1>FEATURES</h1>

						<ul>
							<li>The Water Basin – traps the dirt in the water preventing it to fly back from the air we breathe</li>
							<li>The water can be mixed with few drops of perfumed oil in order to have pleasant fragrance</li>
							<li>It has a wide range of functionality such as wet and dry vacuuming, air purifying, room scenting, carpe cleaning, stain removal, etc.</li>
						</ul>
						<h1>SPECIFICATIONS</h1>
						<ul class="table">
							<li class="table-row row">
								<ul class="table-col"> 
									<li>Type</li>
									<li>PA 03</li>
								</ul>
							</li>
							<li class="table-row row">
								<ul class="table-col"> 
									<li>Voltage</li>
									<li>230V-50HZ</li>
								</ul>
							</li>
							<li class="table-row row">
								<ul class="table-col"> 
									<li>Power Output</li>
									<li>max. 1000 Watts continuous control</li>
								</ul>
							</li>	
							<li class="table-row row">
								<ul class="table-col"> 
									<li>Outer  Dimensions</li>
									<li>approx. 34.9 x 3.5 x 46.6 cm (LxWxH)</li>
								</ul>
							</li>
							<li class="table-row row">
								<ul class="table-col"> 
									<li>Water Capacity</li>
									<li>3.5  liters</li>
								</ul>
							</li>
							<li class="table-row row">
								<ul class="table-col"> 
									<li>Maximum Pressure</li>
									<li>4 Bar</li>
								</ul>
							</li>	
							<li class="table-row row">
								<ul class="table-col"> 
									<li>Pump</li>
									<li>230V-50Hz , 30 Watt</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php include 'layout/footer.php';?>
</div><!-- end of id container -->
<?php include 'layout/script-link.php'; ?>

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


	</body>
	</html>