<!-- This is a master template that can be used for all pages -->
<!doctype HTML>
<html>
	<head>
		<!-- Craft a yeald for the title with a default if nothing included in the child blade or child view. -->
		<title> @yield('title', 'Developer\'s Best Friend') </title>
	</head>
	<body>	
		<!-- Blade content placeholder -->
		@yield('contents')
	</body>
</html>