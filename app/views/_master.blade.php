<!-- This is a master template that can be used for all pages -->
<!doctype HTML>
<html>
	<head>
		<!-- Craft a yeald for the title with a default if nothing included in the child blade or child view. -->
		<title> @yield('title', 'Developer\'s Best Friend') </title>
		<link href="<?php echo URL::asset('/styles/normalize.3.0.1.css'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo URL::asset('/styles/styles.css'); ?>" rel="stylesheet" type="text/css">
		<!-- include the pesky fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
		<!-- include scripts -->
		<script src="<?php echo URL::asset('/scripts/vendor/jquery/jQuery-10.1.2.js'); ?>" type="text/javascript"></script> 
		<script src="<?php echo URL::asset('/scripts/client.js'); ?>" type="text/javascript"></script> 
		<script src="<?php echo URL::asset('/scripts/vendor/google-code-prettify/run_prettify.js'); ?>" type="text/javascript"></script> 
	</head>
	<body>	
		<section id="pageWrapper">
			<!-- nvigation -->
			<header class="navigation">
		        <div class="menu-wrapper">
		            <p class="navigation-menu-button" id="js-mobile-menu">MENU</p>
		            <div class="nav">
		                <ul id="navigation-menu">
		                   <li class="nav-link"><a href="/">Home</a></li>
		                   <li class="nav-link"><a href="/text">Text</a></li>
		                   <li class="nav-link"><a href="/user">Users</a></li>		
		                </ul>
		            </div>
		        </div>
		    </header>
			@yield('hero')			 
			@yield('ipsum')
			@yield('ipsum-example')
			@yield('user')
			@yield('user-example')
			<!-- footer -->		
			<footer class="footer">
				<div class="footer-logo">
					 <img src="images/icon/logo@2x.png" alt="logo" width="74" height="79" />
				</div>
				<div class="footer-links">
					<ul class="nav">
					  <li><h3>Content</h3></li>
					  <li class="nav-link"><a href="/">Home</a></li>
		              <li class="nav-link"><a href="/text">Text</a></li>
		              <li class="nav-link"><a href="/user">Users</a></li>
					</ul>
					<ul>
					  <li><h3>Follow me</h3></li>
					  <li><a href="https://www.facebook.com/harrison.destefano">Facebook</a></li>
					  <li><a href="https://twitter.com/whddesign">Twitter</a></li>
					  <li><a href="https://vimeo.com/user25972361">Vimeo</a></li>
					</ul>
					<ul>
					  <li><h3>Recommended</h3></li>
					  <li><a href="https://panic.com/coda/">Coda2</a></li>
					  <li><a href="https://github.com/">Github</a></li>
					  <li><a href="https://about.gitlab.com/">GitLab</a></li>
					  <li><a href="https://owncloud.org/">Owncloud</a></li>
					</ul>
				</div>
				<hr>
				<p>Created by Harrison DeStefano and some really rad resources.</p>
			</footer>
		</section>
		<!-- clide side scripts -->
		<script>
			// load
			$(document).ready( function(){
				// do not clobber 
				DEVELOPERSFRIEND.init();
			});
		</script>
	</body>
</html>