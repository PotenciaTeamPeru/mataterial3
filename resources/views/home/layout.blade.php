<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Dup</title>
	<!-- STYLE -->
		@include('home.partials.style')
	<!-- STYLE -->
</head>
	<body class="dup-body">
		<div class="dup-body-wrap">
			<!-- HEADER -->
			@include('home.partials.header')
			<!-- HEADER -->
			<!-- SECTIONS -->
			@yield ('content')
			<!-- SECTIONS -->
			<!-- FOOTER -->
			@include('home.partials.footer')
			<!-- FOOTER -->
		</div>
	<!-- SCRIPTS -->
		@include('home.partials.scripts')
	<!-- SCRIPTS -->
	</body>
</html>
