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