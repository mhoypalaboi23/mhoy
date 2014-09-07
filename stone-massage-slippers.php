<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/head-link.php';?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body id='water-body'>
	<!-- header -->
	<?php include 'layout/header.php';?>
	<!-- Your Content -->
	<div id="container">
		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="index.php" key="home" class="tr">Home</a>
				</li>

				<li><a href="health-essential.php" key="water" class="tr">HEALTH Essentials</a></li>
				<li class="active tr" key="alkastream">IZUMI STONE MASSAGE SLIPPERS</li>
			</ol>
			<div class="single-products">
				<div class="product-title">
					<h1 key="water" class="tr">HEALTH ESSENTIALS</h1>
				</div>
				<div class="product-display">
					<div class="col-sm-12 col-md-4">
						<div class="gallery">
							<div class="image-preview">
								<img id="preview" src="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE" />
							</div>
							<!-- Elastislide Carousel -->
							<ul id="carousel" class="elastislide-list">
								<li>
									<a href="#" data-image="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE" data-zoom-image="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE">
										<img src="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE" />
									</a>
								</li>
										<li>
									<a href="#" data-image="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE" data-zoom-image="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE">
										<img src="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE" />
									</a>
								</li>
										<li>
									<a href="#" data-image="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE" data-zoom-image="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE">
										<img src="http://dummyimage.com/600x549/ededed/c0c0c2.jpg&text=NO+IMAGE" />
									</a>
								</li>
							</ul>
							<!-- End Elastislide Carousel -->

							
						</div>

					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="single-product-detail">
						<h1>IZUMI STONE MASSAGE SLIPPERS</h1>
						
						<h2>Description: </h2>
						<p>	Now you can walk and have you feet massaged!</p>
						<h1>Features:</h1>
						<ul>
							<li>Very convenient to use and safe for home health care</li>
							<li>Simple foot massage that uses natural stones to target acupuncture points of our feet</li>
							<li>Infused with natural jade stones and magnetic stones</li>
							<li>Designed based on principles of foot reflexology</li>
							<li>Helps promote blood circulation</li>
							<li>Helps eliminate fatigue</li>
							<li>Helps excrete body wastes and toxins, keeping the body fit</li>
							<li>Helps promote endocrine balance</li>
							<li>Helps relax and activate the tendons, meridian and relax nerves, and muscles</li>
							<li>Helps stimulate cells to produce energy</li>
							<li>Helps improve the quality of sleep and release tension of nerves thereby strengthening immune system</li>
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