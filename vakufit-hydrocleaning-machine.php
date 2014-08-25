<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/head-link.php';?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body id="air-body">
	<!-- header -->
	<?php include 'layout/header.php';?>	<!-- Your Content -->
	<div id="container">
		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>

				<li><a href="#">Air Essentials</a></li>
				<li class="active">Vakufit Hydrocleaning Machine</li>
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
						<h1>Vakufit Hydrocleaning Machine</h1>
						<h2>Description: </h2>
						<p>The affordable hydro cleaning machine is a german technology and manufactured cleaning system that utilizes water filtration technology to clean air and sanitize your home. Vakufit is advanced with water filtration technology that can aid you in extraordinary deep cleaning. It will turn your house into a home. Never settle for less.</p>
						<h1>WHY ORDINARY CLEANING IS NEVER ENOUGH</h1>

						<p>Vakufit Air and Room Cleaning System is such a great help for allergy sufferers, especially small children. Many allergens, including excrement of dust mites, pollen, fungus spores, and numerous micro-organisms are  hidden in dust. With Vakufit, now you can vacuum with peace of mind. These particulates stay in water are disposed off forever!</p>


						<h1>HOW IT WORKS</h1>

						<p>Air is drawn inside Vakufit via special suction mechanism. Dust particles that cause allergic reactions are bound into the water so only pure. clean, and healthful air is released by Vakufit!</p>
						<h1>BENEFITS</h1>

						<ul>
							<li>Powerful cleaner and sanitizing system: releases powerful negative ions and keeps dust mies and various airborne bacteria particles away</li>
							<li>Air freshener: ionized air that is clean and fresh comes out</li>
							<li>Eco-friendly: uses natural water and is safe to dispose off and does not release any harmful materials in the environment</li>
						</ul>
						<h1>FEATURES</h1>
						<img src="assets/img/poster-6.jpg" alt="" style="max-width: 300px; margin-top: 20px;">

						<ul>
							<li>Comes with 5 accessories</li>
							<li>Perfumed oil can be added to the water for fragrance</li>
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