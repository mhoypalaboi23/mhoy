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
					<a href="#" key="home" class="tr">Home</a>
				</li>	

				<li class="active tr" key="about">About Us</li>
			</ol>
			<div class="about">
				<div class="about-title">
					<h1 class="tr" key="about">About Us</h1>
				</div>
				<div class="about-info">
					<p key="izumi-inspiration" class="tr">Izumi is now known to us as the access to the fountain of life; but even before all that, we should tell you about the Izumi Inspiration – the Izumi Man…
					</p>
					<p key="british" class="tr">A British journalist for the Guinness Book of Records was on an assignment to interview Shigechiyo Izumi, the world’s oldest documented living person, a 115-year-old man in remarkably good health.</p>
					<p key="journalist" class="tr">The journalist was amazed by Izumi’s vitality and the fact that he had worked until the age of 105.
					</p>
					<p key="remarkable" class="tr">The journalist realized most of the islands’ inhabitants were physically fit, with long lifespans and low incidences of serious illness. A team of researchers came to the island to answer this question and made some remarkable discoveries. They found the water the islanders drank was different from water found anywhere else in the world.</p>
					<p key="drinking" class="tr">They were drinking from a preserved water source with unique characteristics. Not only does it contain many essential minerals, it is also very alkaline, with a pH between 7 and 8.5.</p>
					<p key="part" class="tr">In other parts of the world, cultures such as the Hunzas of North Pakistan, the Tibetans, Armenians, Azerbajans, and the Titicacas of Peru, all live long and healthy lives, with no degenerative disease. The only source of water for all these cultures is melting glacier water – small-clustered water, with alkaline pH, and very high in antioxidants.</p>
					<p key="developed" class="tr">Izumi since then has developed a range of health and wellness appliances and items that answer most health problems of today’s lifestyle.
					</p>
					<p key="forefront" class="tr">Izumi is and will always be at the forefront of the health and wellness industry. We, at Izumi, have heavily invested on extensive research, the latest in cutting-edge science, and world-class facilities that comply with the highest manufacturing and safety standards to deliver only the best.</p>
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