<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/head-link.php';?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body id="health-body">
	<!-- header -->
	<?php include 'layout/header.php';?>
	<!-- Your Content -->
	<div id="container">
		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>

				<li><a href="#">Health Essentials</a></li>
				<li class="active">Izumi Energy Bracelets</li>
			</ol>
			<div class="single-products">
				<div class="product-title">
					<h1>Health Essentials</h1>
				</div>
				<div class="product-display">
					<div class="col-sm-12 col-md-4">
						<div class="gallery">
							<div class="image-preview">
								<img id="preview" src="assets/img/products/HEALTH-ESSENTIALS/Energy-Bracelet/Energy-Bracelet-1.jpg" />
							</div>
							<!-- Elastislide Carousel -->
							<ul id="carousel" class="elastislide-list">
								<li data-preview="assets/img/products/HEALTH-ESSENTIALS/Energy-Bracelet/Energy-Bracelet-1.jpg"><a href="#"><img src="assets/img/products/HEALTH-ESSENTIALS/Energy-Bracelet/Energy-Bracelet-1.jpg" alt="image04" /></a></li>
								<li data-preview="assets/img/products/HEALTH-ESSENTIALS/Energy-Bracelet/Energy-Bracelet-2.jpg"><a href="#"><img src="assets/img/products/HEALTH-ESSENTIALS/Energy-Bracelet/Energy-Bracelet-2.jpg" alt="image04" /></a></li>
								
							</ul>
							<!-- End Elastislide Carousel -->

							
						</div>

					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="single-product-detail">
						<h1>IZUMI ENERGY BRACELETS</h1>
						<h2>Description: </h2>
						<h2>FIVE of Earth’s Natural Energies</h2>
						<p>Your Izumi Energy Bracelet leads the field in high-technological jewelry, with five types of constant-release energies that benefit the wearer.</p>
						<p><b>Far Infrared (FIR)</b> is the invisible band of energy from the sun’s spectrum that we feel as warmth. Far Infrared technology absorbs energy from all wavelengths, and releases it in the Far Infrared wavelength.</p>
						<p>Izumi Energy Bracelet’s Far Infrared ceramics absorb energy from various sources and release it for gentle warming to help support circulation. They emit a Far Infrared output that is identical to the specific wavelength produced by the sun.</p>
						<p><b>Negative Ions</b> have an invigorating effect on the human body while positive ions have the opposite effect, quite often inducing a feeling of tiredness. Negative ions are created naturally by the energy associated with rolling surf, waterfalls and lightning.</p>
						<p><b>Magnetic technology</b> is used in many performance bracelets favored by professional athletes. All physical and mental activity is controlled by electromagnetic fields produced by electro-chemicals (ions) within the body. Wearing a magnetic bracelet is a non-invasive way of applying beneficial magnetic fields to the body. Izumi improves this technology by providing Unipolar Neodymium Magnets emitting 1000-1200 gauss, which is ideal and safe for continuous wearing.</p>
						<p>Izumi advanced technology jewelry is fashioned from the highest quality Japanese surgical Stainless Steel (316L), extending to the pressure-fit caps to secure both the magnetic and FIR inserts within the Izumi Energy Bracelets.</p>
						<p><b>Germanium Energy</b> is a trace element that is used as a dietary supplement. The germanium has been shown to stimulate the immune system, helping the body to fight disease. There’s nothing like your own immune decency to help you overcome the disease, then such supplements like germanium’s own immune system is triggered to start efforts to do what resist work even harder is the absolute best way to ward off disease.</p>
						<p><b>Tourmaline</b> is the environmental and healthy material, it can purify the blood, remove toxins, reduce fatigue, improve immunity, promote health and longevity.</p>
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