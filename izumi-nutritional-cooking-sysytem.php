<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/head-link.php';?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body id="kitchen-body">
	<!-- header -->
	<?php include 'layout/header.php';?>
	<!-- Your Content -->
	<div id="container">
		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li><a href="kitchen-essential.php">Kitchen Essentials</a></li>
				<li class="active">Izumi Nutritional Cooking System</li>
			</ol>
			<div class="single-products">
				<div class="product-title">
					<h1>Kitchen Essentials</h1>
				</div>
				<div class="product-display">
					<div class="col-sm-12 col-md-4">
						<div class="gallery">
							<div class="image-preview">
								<img id="preview" src="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-0.jpg" />
							</div>
							<!-- Elastislide Carousel -->
							<ul id="carousel" class="elastislide-list">
								<li>
									<a href="#" data-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-0.jpg" data-zoom-imag="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-0.jpg">
										<img src="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-0.jpg" alt="image04" />
									</a>
								</li>
								<li>
									<a href="#" data-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-1.jpg" data-zoom-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-1.jpg">
									<img src="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-1.jpg" alt="image04" />
									</a>
								</li>
								<li>
									<a href="#" data-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-2.jpg" data-zoom-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-2.jpg">
										<img src="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-2.jpg" alt="image04" />
									</a>
								</li>
								<li>
									<a href="#" data-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-3.jpg" data-zoom-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-3.jpg">
										<img src="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-3.jpg" alt="image04" />
									</a>
								</li>
								<li>
									<a href="#" data-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-4.jpg" data-zoom-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-4.jpg">
										<img src="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-4.jpg" alt="image04" />
									</a>
								</li>
								<li>
									<a href="#" data-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-5.jpg" data-zoom-image="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-5.jpg">
										<img src="assets/img/products/KITCHEN-ESSENTIALS/COOKWARE/Nutritional-Cooking-System-5.jpg" alt="image04" />
									</a>
								</li>
							</ul>
							<!-- End Elastislide Carousel -->

							
						</div>

					</div>
				</div>
				<div class="col-sm-12 col-md-8">
					<div class="single-product-detail">
						<h1>Izumi Nutritional Cooking System</h1>
						<h2>Description: </h2>
						<p>The Izumi Home Essentials is proud to bring you the world’s finest cookware – the Nutritional Cooking System that meets your demands for healthy cooking that is easy and energy-efficient. It uses the Vapor-Seal Technology that does not require water and oil to cook food. Also, the flavor, vitamins and minerals in food are all retained.</p>
						<p>Nature supplies all the nutrition necessary for good health but improper preparation can destroy it!</p>
						<p>1)    Peeled Away</p>

						<p>2)    Boiled Away</p>

						<p>3)    Drained Away</p>
						<p>“Healthy cooking is more than food selection. It is also how you prepare food.”</p>
						<p><b>-American Heart Association</b></p>
						<h1>BENEFITS</h1>

						<ul>
							<li>Maintain the natural nutrient contents of all your ingredients such as meat, fish and vegetables</li>
							<li>It is easy to use and energy-efficient</li>
							<li>Multi-purpose cookware can be used for the following purposes: food storage from stove top to freezer or baking in the oven</li>
							<li>Limited Lifetime Warranty</li>
						</ul>
						<h1>FEATURES</h1>
						<ul>
							<li>Greaseless, Waterless Cooking: Makes use of the Vapor Seal Technology that locks in the natural juice and moisture to cook food
							</li>
							<li>Premium Surgical Stainless Steel Advantage: Surgical Stainless Steel won’t react with food or alter flavors</li>

							<li>Even Heat Distribution: Encapsulated base heats quickly and spreads heat evenly, cooking food more effectively</li>

							<li>Drip-Free Pouring: Rims of cookware are tapered to make pouring clean and easy</li>

							<li>Versatile Performance: Safe to put in oven safe to 550⁰F. From cooking on stovetop, in oven, or under broiler to freezer for easy food storage</li>
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