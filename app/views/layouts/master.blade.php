<!DOCTYPE html>
<html lang="en">
<head>
	
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/hover.css">

	

    <title>Laravel Blog</title>
    @yield('style')
</head>
<body>
<div class="container">
	@include('layouts.nav')
</div>

	
    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	@yield('scripts')
</body>
</html>