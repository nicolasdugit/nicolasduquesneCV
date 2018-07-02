<!DOCTYPE HTML>
<html lang="<?= $language ?>">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120928202-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-120928202-1');
	</script>

	<title><?= $title ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<meta name="description" content="<?= $description ?>" >
	<meta name="keywords" content="<?= $keywords ?>" >
	<meta name="author" content="Nicolas Duquesne" >

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="<?= $title ?>" >
	<meta property="og:image" content="public/images/logo80px.png">
	<meta property="og:url" content="<?= $url ?>" >
	<meta property="og:site_name" content="Nicolas Duquesne Développeur Web">
	<meta property="og:description" content="<?= $description ?>" >
	<meta name="twitter:title" content="<?= $title ?> ">
	<meta name="twitter:image" content="public/images/llogo80px.png" >
	<meta name="twitter:url" content="<?= $url ?>" >
	<meta name="twitter:card" content="summary" >


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
	
</head>
<body>
	<?= $content ?>

	<?php include('view/en/includes/footerSection.php') ?>	

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