<!DOCTYPE html>
<html>
<head>
<title>@yield('title') | Cinema</title>
@include('layouts.header')
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
		<div class="main">
			@include('layouts.menu')
			@include('layouts.nav')
			@yield('content')	
			@include('layouts.footer')	
		</div>
	</div>
	<div class="clearfix"></div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>