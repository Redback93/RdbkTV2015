
<!doctype html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="UTF-8">
	<title>Redback</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/portfolio.css">

	<meta name="description" content="The hand-crafted, scrupulously designed and beatifully implemented portfolio of Redback. Young developer with experience in software, web and mobile development.">
	<meta property="og:title" content="Redback">
	<meta property="og:description" content="The hand-crafted, scrupulously designed and beatifully implemented portfolio of Redback. Young developer with experience in software, web and mobile development.">
	<meta property="og:image" content="{{URL::to('/')}}/img/RBLogo.png">
	<meta property="og:image:secure_url" content="{{URL::to('/')}}/img/RBLogo.png">
</head>
<body>
	<nav>
		<div class="container">
			<div class="col-md-offset-5 nav-logo-container">
				<a href="/"><div class="nav-logo"></div></a>
			</div>
			<ul class="pull-right">
				<li><a href="/#projects">Portfolio</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</div>
	</nav>

	@yield('content')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/portfolio.js"></script>
</body>
</html>
