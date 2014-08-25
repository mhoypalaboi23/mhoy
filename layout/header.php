<?php 
echo "
<!-- Pushy Menu -->
<nav class='pushy pushy-left'>
	<ul>
		<li><a href='index.php' key='home' class='tr'>HOME</a></li>
		<li class='divider'></li>	
		<li><a href='about-us.php' key='about' class='tr'>ABOUT US</a></li>
		<li class='divider'></li>	
		<li><a href='water-essential.php' key='water' class='tr'>WATER ESSENTIALS</a></li>
		<li class='divider'></li>		
		<li><a href='kitchen-essential.php' key='kitchen' class='tr'>KITCHEN ESSENTIALS</a></li>
		<li class='divider'></li>	
		<li><a href='air-essential.php' key='air' class='tr'>AIR ESSENTIALS</a></li>
		<li class='divider'></li>	
		<li><a href='home-essential.php' key='home-essential' class='tr'>HOME ESSENTIALS</a></li>
		<li class='divider'></li>	
		<li><a href='health-essential.php' key='health' class='tr'>HEALTH ESSENTIALS</a></li>
		<li><a href='contact-us.php' key='contact' class='tr'>CONTACT US</a></li>
	</ul>
</nav>

<!-- Site Overlay -->
<div class='site-overlay'></div>

<div class='menu-btn visible-xs push'>
	<div class='pull-left'>&#9776; Menu</div>
	<div class='pull-right'>
		<ul>
			<li><a href='www.facebbok.com'><i class='fa fa-facebook'></i></a></li>
				<li><a href='#'><i class='fa fa-twitter'></i></a></li>
				<li><a href='#'><i class='fa fa-instagram'></i></a></li>
				<li><a href='#'><i class='fa fa-youtube'></i></a></li>
			</ul>
		</div>
	</div>

	<header class='push'>
		<div class='head-top'>
			<div class='container'>
				<div class='col-md-6'>
					<div id='google_translate_element'></div><script type='text/javascript'>
					function googleTranslateElementInit() {
						new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,ja', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
					}
				</script><script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
				<div class='info'><i class='fa fa-envelope-o'></i> info@izumijapancorp.com</div>
			</div>
			<div class='col-md-6'>
				<ul class='pull-right'>
					<li><a href='#'><i class='fa fa-facebook'></i></a></li>
					<li><a href='#'><i class='fa fa-twitter'></i></a></li>
					<li><a href='#'><i class='fa fa-instagram'></i></a></li>
					<li><a href='#'><i class='fa fa-youtube'></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class='main-nav container'>
		<div class='col-md-2 logo'>
			<img src='assets/img/logo.png' alt=''>
		</div>
		<div class='col-md-10 nav-wrapper'>
			<!-- Menu Button -->
			<ul class='nav nav-pills hidden-xs hidden-sm'>
				<li class='active' id='home'><a href='index.php'>HOME</a></li>
				<li class='menu-divider'>•</li>
				<li id='about'><a href='about-us.php'>ABOUT US</a></li>
				<li class='menu-divider'>•</li>
				<li class='dropdown'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown'>PRODUCTS <span class='caret'></span></a>
					<ul class='dropdown-menu' role='menu'>
						<li id='water'><a href='water-essential.php'>WATER ESSENTIALS</a></li>
						<li class='divider'></li>		
						<li id='kitchen'><a href='kitchen-essential.php'>KITCHEN ESSENTIALS</a></li>
						<li class='divider'></li>	
						<li id='air'><a href='air-essential.php'>AIR ESSENTIALS</a></li>
						<li class='divider'></li>	
						<li id='home-essential'><a href='home-essential.php'>HOME ESSENTIALS</a></li>
						<li class='divider'></li>	
						<li id='health'><a href='health-essential.php'>HEALTH ESSENTIALS</a></li>
					</ul>
				</li>
				<li class='menu-divider'>•</li>
				<li><a href='contact-us.php' key='contact' class='tr'>CONTACT US</a></li>
			</ul>
		</div>
	</div>
</header>
";
?>