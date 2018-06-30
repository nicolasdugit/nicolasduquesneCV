<!DOCTYPE HTML>
<html lang="fr_FR">
<head>
	<title><?= $title ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<meta name="description" content="<?= $description ?>" />
	<meta name="keywords" content="<?= $keywords ?>" />
	<meta name="author" content="Nicolas Duquesne" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="<?= $title ?>"/>
	<meta property="og:image" content="public/images/logo80px.png"/>
	<meta property="og:url" content="http://www.nicolasduquesne.com"/>
	<meta property="og:site_name" content="Nicolas Duquesne Développeur Web"/>
	<meta property="og:description" content="<?= $description ?>"/>
	<meta name="twitter:title" content="<?= $title ?>" />
	<meta name="twitter:image" content="public/images/llogo80px.png" />
	<meta name="twitter:url" content="http://www.nicolasduquesne.com" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="public/images/logo80px.png">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	<link href="public/css/bootstrap.css" rel="stylesheet">
	<link href="public/css/ionicons.css" rel="stylesheet">
	<link href="public/css/fluidbox.min.css" rel="stylesheet">
	
	<!-- Stylesheets des differents templates -->
	<link href="public/css/business-styles.css" rel="stylesheet">
	<link href="public/css/business-responsive.css" rel="stylesheet">
	<!-- <link href="public/css/boxed-styles.css" rel="stylesheet"> -->
	<!-- <link href="public/css/boxed-responsive.css" rel="stylesheet"> -->
	<!-- <link href="public/css/portfolio-styles.css" rel="stylesheet"> -->
	<!-- <link href="public/css/portfolio-responsive.css" rel="stylesheet"> -->
	
</head>
<body>
	<?= $content ?>

	<?php include('view/includes/footerSection.php') ?>	

	<!-- SCIPTS -->
	<script src="public/js/jquery-3.2.1.min.js"></script>
	<script src="public/js/tether.min.js"></script>
	<script src="public/js/bootstrap.js"></script>
	<script src="public/js/isotope.pkgd.min.js"></script>
	<script src="public/js/jquery.waypoints.min.js"></script>
	<script src="public/js/progressbar.min.js"></script>
	<script src="public/js/jquery.fluidbox.min.js"></script>
	<script src="public/js/scripts.js"></script>
	
</body>
</html>