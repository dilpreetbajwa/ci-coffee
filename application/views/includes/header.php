
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Expresso - Responsive Onepage Cafe Template">
	<meta name="keywords" content="bootWeb, cafe, gallery, personal, developer, designer, onepage, clean, modern, expresso, web">
	<meta name="author" content="Mehul Prajapati">
	<meta name="apple-mobile-web-app-capable" content="yes">

    <title>Expresso - Cafe HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url(); ?>assets/images/favicon.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url(); ?>assets/images/favicon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700%7CCourgette:500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Animation -->
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/vendor/animate/animate.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/vendor/owl-carousel/owl.carousel.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css">
    <!-- Theme CSS -->
    <link id="pagestyle" rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/responsive.css">
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- ========== Body Starts ========== -->
<body id="body">

	<!-- ========== Preloader ========== -->
	<div class="preloader">
		<div class="spinner">
			<div class="rect1"></div>
			<div class="rect2"></div>
			<div class="rect3"></div>
			<div class="rect4"></div>
			<div class="rect5"></div>
		</div>
	</div>
	<!-- ========== End of Preloader ========== -->

	<!-- ========== NavBar ========== -->
	<nav id="nav" class="navbar custom-navbar navbar-fixed-top mob-scroll">
		<div class="container">
			<!-- NAVBAR HEADER -->
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<!-- lOGO TEXT HERE -->
				<a href="index.html" class="navbar-brand"><img src="<?=base_url(); ?>assets/images/logo.png" class="img-responsive" alt="image"> <p>Ex<span class="contrast">press</span>o</p></a>
			</div>
			<!-- NAVIGATION LINKS -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="active">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#service">Service</a></li>
					<li><a href="#gallery">Gallery</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contact">Contact</a></li>
					<?php if($this->session->userdata('dil_session')){ ?>
					<li><a href="<?=base_url();?>admin">Dashboard</a></li>
					<li><a href="<?=base_url();?>logout">Logout</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- ========== End Of NavBar ========== -->