<!DOCTYPE html>
<html>
<head>
    <?php include 'layout/head-link.php';?>
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
</head>
<body id="water-body">
    <!-- header -->
    <?php include 'layout/header.php';?>
    <!-- Your Content -->
    <div id="container">
        <div class="product container">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>

                <li><a href="#">Water Essentials</a></li>
                <li class="active">Rephresh! Portable Alkaline Flask</li>
            </ol>
            <div class="single-products">
                <div class="product-title">
                    <h1>Water Essentials</h1>
                </div>
                <div class="product-display">
                    <div class="col-sm-12 col-md-4">
                        <div class="gallery">
                            <div class="image-preview">
                                <img id="preview" src="assets/img/products/products-44.jpg" />
                            </div>
                            <!-- Elastislide Carousel -->
                            <ul id="carousel" class="elastislide-list">
                                <li data-preview="assets/img/products/products-44.jpg"><a href="#"><img src="assets/img/products/products-44.jpg" alt="image04" /></a></li>
                                <li data-preview="assets/img/products/products-45.jpg"><a href="#"><img src="assets/img/products/products-45.jpg" alt="image04" /></a></li>
                                <li data-preview="assets/img/products/products-46.jpg"><a href="#"><img src="assets/img/products/products-46.jpg" alt="image04" /></a></li>
                                <li data-preview="assets/img/products/products-47.jpg"><a href="#"><img src="assets/img/products/products-47.jpg" alt="image04" /></a></li>
                                <li data-preview="assets/img/products/products-48.jpg"><a href="#"><img src="assets/img/products/products-48.jpg" alt="image04" /></a></li>.jpg" alt="image04" /></a></li>
                                <li data-preview="assets/img/products/products-52.jpg"><a href="#"><img src="assets/img/products/products-52.jpg" alt="image04" /></a></li>.jpg" alt="image04" /></a></li>
                                
                            </ul>
                            <!-- End Elastislide Carousel -->

                            
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="single-product-detail">
                        <h1>Rephresh! Portable Alkaline Flask</h1>
                        <h2>Description: </h2>
                        <h1>RepHresh is your personal alkaline water maker.</h1>

                        <ul>
                            <li>It is a portable and convenient tumbler that you can bring anywhere</li>
                            <li> Turn ordinary purified or distilled water into alkaline drinking water in just a few minutes</li>
                            <li> It uses the latest technology to replicate the living and healing waters of the Himalayas</li>
                        </ul>
                        <h1>HOW IT WORKS</h1>

                        <p>Inside is the integration of a number of patented high-energy ceramic balls and special rare-earth materials in a compact power flash.</p>
                        <h1>BENEFITS</h1>

                        <p>The produced alkaline water that is of extremely strong physiological function aids in preventing cardiovascular and cerebrovascular diseases and in combating cancer, diabetes, gout, high blood pressure, hypertension, and osteoporosis.</p>
                        <img src="assets/img/poster-9.jpg" alt="">
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