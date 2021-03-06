<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/head-link.php';?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body id="home-body">
	<!-- header -->
	<?php include 'layout/header.php';?>
	<!-- Your Content -->
	<div id="container">
		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="index.php" key="home" class="tr">Home</a>
				</li>

				<li><a href="home-essential.php" key="home-essential" class="tr">Home Essentials</a></li>
				<li class="active tr" key="anti-chlorine">Anti-Chlorine Vita-C Shower Filter</li>
			</ol>
			<div class="single-products">
				<div class="product-title">
					<h1 key="home-essential" class="tr">Home Essentials</h1>
				</div>
				<div class="product-display">
					<div class="col-sm-12 col-md-4">
						<div class="gallery">
							<div class="image-preview">
								<img id="preview" src="assets/img/products/HOME ESSENTIALS/SHOWER-FILTER/Anti-Chlorine-Vita-C-Shower-Filter-0.jpg" />
							</div>
							<!-- Elastislide Carousel -->
							<ul id="carousel" class="elastislide-list">
								<li>
									<a href="#" data-image="assets/img/products/HOME ESSENTIALS/SHOWER-FILTER/Anti-Chlorine-Vita-C-Shower-Filter-0.jpg" data-zoom-image="assets/img/products/HOME ESSENTIALS/SHOWER-FILTER/Anti-Chlorine-Vita-C-Shower-Filter-0.jpg">
										<img src="assets/img/products/HOME ESSENTIALS/SHOWER-FILTER/Anti-Chlorine-Vita-C-Shower-Filter-0.jpg" alt="image04" />
									</a>
								</li>
								<li>
									<a href="#" data-image="assets/img/products/HOME ESSENTIALS/SHOWER-FILTER/Anti-Chlorine-Vita-C-Shower-Filter-1.jpg" data-zoom-image="assets/img/products/HOME ESSENTIALS/SHOWER-FILTER/Anti-Chlorine-Vita-C-Shower-Filter-1.jpg">
										<img src="assets/img/products/HOME ESSENTIALS/SHOWER-FILTER/Anti-Chlorine-Vita-C-Shower-Filter-1.jpg" alt="image05" />
									</a>
								</li>
							</ul>
							<!-- End Elastislide Carousel -->

							
						</div>

					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="single-product-detail">
						<h1 key="anti-chlorine" class="tr">IZUMI ANTI-CHLORINE VITA-C SHOWER</h1>
						<h2 key="description" class="tr">Description: </h2>
						<p key="now-chlorine" class="tr">Now you can enjoy your bath more with Izumi Anti-Chlorine Vita-C Shower Filter that gets rid of chlorine in the water. Chlorine in water dries up the skin and with accumulated high amounts can actually cause cancer.</p>
						<img src="assets/img/poster-3.jpg" alt="" class="pull-right" style="max-width: 300px; margin-left: 14px;">
						<p key="izumi-filter" class="tr">Izumi Anti-Chlorine Vita-C Shower Filter takes out chlorine through its Vita-C gel filter that is equivalent to 3,000 lemons. Its patented triangular holes give off negative ions in the shower. These specialized filters help prevent skin and scalp diseases and conditions such as eczema, psoriasis, skin asthma, falling hair, and dandruff. Healthy skin and hair is a fresh and invigorating shower away!</p>

						<h1 key="benefit" class="tr">BENEFITS</h1>

						<ul>
							<li key="reduce-chlorine" class="tr">Reduces over 98% Chlorine for tap water before it touches your skin</li>
							<li key="reduce-soap" class="tr">Reduces soap film build-up</li>
							<li key="remove-cancer" class="tr">Removes Cancer-causing agent chlorine from the water</li>
							<li key="fight-problem" class="tr">Fights against skin problem such as Psoriasis, Skin Cancer, and Skin Asthma</li>
							<li key="falling-hair" class="tr">Prevents Dandruff build up and Falling Hair</li>
							<li key="save-water" class="tr">Saves 10 to 25% on water from your regular daily bathing</li>
							<li key="no-tools" class="tr">No tools required</li>
							<li key="easy-replace" class="tr">Easy to replace filter cartridge</li>
						</ul>

						<h1 key="features" class="tr">FEATURES</h1>

						<ul>
							<li key="micro-fabric" class="tr">Micro-Fabric filter helps remove contaminants, rust and floating particles</li>
							<li key="aroma-vita" class="tr">Comes with Aroma-Vita C gel filter that lasts up to 6,000 liters</li>
							<li key="anti-bacterial" class="tr">Anti-bacterial ceramic balls help prevents germs in the water</li>
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
			//initiate the plugin and pass the id of the div containing gallery images 

			$(".image-preview img").elevateZoom({
			// constrainType:"height", 
			// constrainSize:274, 
			zoomType: "lens", 
			scrollZoom : true,
			containLensZoom: true, 
			gallery:'carousel', 
			// cursor: 'pointer', 
			galleryActiveClass: "current-img"}); 

			//pass the images to Fancybox 
			$(".preview").bind("click", function(e) { 
			var ez = $('.preview').data('elevateZoom');
			$.fancybox(ez.getGalleryList()); 
			return false; 
			});


		</script>
	</body>
	</html>