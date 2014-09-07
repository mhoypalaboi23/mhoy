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
				<li class="active tr" key="alkastream">IZUMI BIO-MAT</li>
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
						<h1>IZUMI BIO-MAT BLOOD CIRCULATION MATTRESS</h1>
						<h2>Description: </h2>
						<p>The Izumi  Bio-Mats make use of safe therapeutic infrared heat that delivers true therapeutic sleep, which helps in deep healing of the body.
						The therapeutic effects of Jade, <strong>Germanium Energy Stones</strong>, and <strong>Tourmaline Ceramics</strong> are combined in one powerful Bio-Mat. Ancient eastern medicine has various uses for <strong>Jade</strong> including: transferring positive energy, helping one’s balance, improving immunity to fight disease, and aiding in body detoxification. Germanium Energy Stones help get rid of harmful positive ions generated from mobile phones, electronic equipment, chemicals, acid rain and ultraviolet rays. Tourmaline Ceramics is its own source of electric charge that makes it capable of emitting infrared waves and negative ions.
						This powerful combination aids in the detoxification process of the human body, relieving stress, increasing mental alertness, improving blood circulation and strengthening the immune system.</p>
						<h1>Features:</h1>
						<ul>
							<li>Dual Side Use</li>
							<li>Infused with Jade+Germanium and Tourmaline Ceramics</li>
							<li>Produces therapeutic heat for maximum benefit to the body</li>
							<li>Simple temperature control</li>
							<li>Temperature adjustment based on human body temperature and adaptability</li>
							<li>Powerful 17-Layer Structure</li>
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