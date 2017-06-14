<?php
    include_once 'session.php';
?>
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Turistika</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
                <script src="http://maps.googleapis.com/maps/api/js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
                <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla%7CMontserrat">
                <!--<link rel="stylesheet" href="css/screen.css">-->
                <link rel="stylesheet" href="css/lightbox.css">
	</head>
	<body class="homepage">

		<!-- Header -->
			<header id="header">
				<div class="logo container">
					<div>
						<!--<h1><a href="index.html" id="logo">TXT</a></h1>-->
						<p>TURISTIKA - najboljše destinacije ta HIP</p>
					</div>
				</div>
			</header>

		<!-- Nav -->
			<nav id="nav" class="skel-layers-fixed">
				<ul>
					<li class="current"><a href="index.php">Domov</a></li>	
                                        <li><a href="countries.php">Države</a></li>
                                        <li><a href="destinations.php">Destinacije</a></li>					
                                        <?php 
                                            if (!isset($_SESSION['user_id'])) {
                                                echo '<li><a href="login.php">Prijava</a></li>';
                                                echo '<li><a href="registration.php">Registracija</a></li>';
                                            }
                                            else {
                                                
                                                echo '<li><a href="logout.php">Odjava ('.
                                                        $_SESSION['first_name'].' )</a></li>';
                                            }
                                        ?>
					                                   
										
				</ul>
			</nav>
		
		<!-- Banner -->
			<div id="banner-wrapper">
				<!--<section id="banner">
					<h2>Welcome to TXT by HTML5 UP</h2>
					<p>A free responsive site template built on HTML5, CSS3, skel, and some other stuff</p>
					<a href="#" class="button">Alright let's go</a>
				</section>-->
			</div>

		<!-- Main -->
			<div id="main-wrapper">
				<div id="main" class="container">
					<!--<div class="row 200%">
						<div class="12u">
							
							<!-- Highlight 
								<section class="box highlight">
									<ul class="special">
										<li><a href="#" class="icon fa-search"><span class="label">Magnifier</span></a></li>
										<li><a href="#" class="icon fa-tablet"><span class="label">Tablet</span></a></li>
										<li><a href="#" class="icon fa-flask"><span class="label">Flask</span></a></li>
										<li><a href="#" class="icon fa-cog"><span class="label">Cog?</span></a></li>
									</ul>
									<header>
										<h2>A random assortment of icons in circles</h2>
										<p>And some text that attempts to explain their significance</p>
									</header>
									<p>
										Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper mod quis eget mi. Etiam eu<br />
										ante risus. Aliquam erat volutpat. Aliquam luctus et mattis lectus amet pulvinar. Nam nec turpis consequat.
									</p>
								</section>

						</div>
					</div>-->
					<div class="row 200%">
						<div class="12u">

							<!-- Features -->
								<section class="box features">
									<h2 class="major"><span>Destinacije</span></h2>
									<div>
                                                                            <?php 
                                                                                //preverimo za error
                                                                                if (isset($_SESSION['error'])) {
                                                                                    echo '<div id="error">';
                                                                                    echo $_SESSION['error'];
                                                                                    echo '</div>';
                                                                                    unset($_SESSION['error']);
                                                                                }
                                                                                //preverimo za success
                                                                                if (isset($_SESSION['success'])) {
                                                                                    echo '<div id="success">';
                                                                                    echo $_SESSION['success'];
                                                                                    echo '</div>';
                                                                                    unset($_SESSION['success']);
                                                                                }
                                                                            ?>

                                                                            