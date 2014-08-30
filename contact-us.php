<!DOCTYPE html>
<html>
<head>
	<?php include 'layout/head-link.php';?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

</head>
<body id="contact-body">
	<!-- header -->
	<?php include 'layout/header.php';?>
	<!-- Your Content -->
	<div id="container">

		<div class="product container">
			<ol class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>

				<li class="active">Contact Us</li>
			</ol>
			<div class="contact ">
				<div class="contact-title">
					<h1>Contact Us</h1>
				</div>
				<div class="contact-info container">
					<h1>Want Us to Get Back to You?</h1>
					<div class="contact-form col-md-6 col-xs-12">
						<h1>Fill the form below</h1>
						<form role="form">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input class="form-control" type="email" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
									<input class="form-control" type="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-leaf"></i></div>
									<input class="form-control" type="email" placeholder="Subject">
								</div>
							</div>
							<textarea class="form-control" rows="3" placeholder="Message"></textarea>
							<button type="submit" class="btn btn-primary">send massage</button>
						</form>

					</div>
					<div class="contact-map col-md-6 col-xs-12">
						<h1>Contact us Here:</h1>
						<p><i class="fa fa-envelope-o"></i> info@izumijapancorp.com</p>
						<img src="assets/img/map.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		
	<!-- footer -->
	<?php include 'layout/footer.php';?>
</div><!-- end of id container -->
<?php include 'layout/script-link.php'; ?>

</body>
</html>