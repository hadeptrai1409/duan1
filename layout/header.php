<?php
session_start();
require_once "./libs/database.php";
require_once "./libs/slider.php";
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Fashion&Beauty a Fashion Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
	<link href="layout/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="layout/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Fashion&Beauty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="layout/css/flexslider.css" type="text/css" media="screen" />
	<script src="layout/js/jquery.min.js"></script>
	<script src="layout/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
		});

	</script>
	<script type="text/javascript" src="layout/js/move-top.js"></script>
	<script type="text/javascript" src="layout/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1200);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>


</head>

<body>
	<!-- banner -->
	<div class="header">
		<div class="container">
			<div class="col-md-3 header-left">
				<div class="logo">
					<h1><a href="<?=ROOT?>index.php">F & B</a></h1>
				</div>

				<div class="head-nav">
					<span class="menu"><img src="images/menu.png" alt="">
						<p class="me"></p>
					</span>
					<div class="clearfix"> </div>
					<ul class="cl-effect-16">
						<li class="active"><a href="<?=ROOT?>index.php" data-hover="TRANG CHỦ">TRANG CHỦ</a></li>
						<li><a href="<?=ROOT?>layout/album.php" data-hover="ALBUM">ALBUM</a></li>
						<li><a href="<?=ROOT?>layout/dichvu.php" data-hover="DỊCH VỤ">DỊCH VỤ</a></li>
						<li><a href="<?=ROOT?>layout/datlich.php" data-hover="ĐẶT LỊCH">ĐẶT LỊCH</a></li>
						<li><a href="#contact" class="scroll" data-hover="LIÊN HỆ">LIÊN HỆ</a></li>
					</ul>
					<!-- script-for-nav -->
					<script>
						$("span.menu").click(function () {
							$(".head-nav ul").slideToggle(300, function () {
								// Animation complete.
							});
						});
					</script>
					<!-- script-for-nav -->

				</div>

				<div class="b-search">
					<form action="layout/search.php" method="GET">
						<input type="text" name="keyword" value="Search" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="">
					</form>
				</div>

			</div>
			<div class="col-md-9 header-right">
				<div class="log-sig">
				<?php if(!isset($_SESSION['username'])) :   ?>
					<li><a href="admin/go/login.php">Login</a></li>
					<li><a href="admin/go/registration.php">Sign up</a></li>
					<?php else :  ?> 
					<p>Xin chào <?=$_SESSION['username']  ?></p> 
					<a class="" href="admin/go/logout.php">Đăng xuất</a>
					<?php endif;  ?>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<div class="banner">
					<div class="header-slider">
						<div class="slider">

							<div class="callbacks_container">
								<ul class="rslides" id="slider">
									<li>
										<img src="layout/images/5.jpg" class="img-responsive" alt="" />

									</li>
									<li>
										<img src="layout/images/3.jpg" class="img-responsive" alt="" />

									</li>
									<li>
										<img src="layout/images/4.jpg" class="img-responsive" alt="" />

									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div class="be-at">
					<div class="beaut">
						<h2>NAILL & BEAUTIFUL</h2>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- banner -->