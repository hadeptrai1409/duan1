<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
require_once "../config/config.php";
require_once "../libs/service.php";
require_once "../libs/slider.php";
$service = list_all_service();
$slider = list_all_slider();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Fashion&Beauty a Fashion Category Flat Bootstarp Responsive Website Template | Fashion :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion&Beauty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
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
  <script type="text/javascript" src="js/move-top.js"></script>
       <script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
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
			<span class="menu"><img src="images/menu.png" alt=""></span>
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
								$( "span.menu" ).click(function() {
								  $( ".head-nav ul" ).slideToggle(300, function() {
									// Animation complete.
								  });
								});
							</script>
						<!-- script-for-nav --> 

		</div>
		
		<div class="b-search">
				<form>
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</form>
			</div>
			
	</div>
	<div class="col-md-9 header-right">
			<div class="log-sig">
			<?php if(!isset($_SESSION['username'])) :   ?>
					<li><a href="../admin/go/login.php">Login</a></li>
					<li><a href="../admin/go/registration.php">Sign up</a></li>
					<?php else :  ?> 
					<p>Xin chào <?=$_SESSION['username']  ?>
					<a class="" href="../admin/go/logout.php">Đăng xuất</a>
				</p> 
					
					<?php endif;  ?>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		<div class="banner-1">	
			
		</div>
	</div>
			<div class="clearfix"> </div>
	</div>
</div>
<!-- banner -->
<div class="fashion">
		<div class="container">
		<h3>Các dịch vụ tại store</h3>
		<?php foreach ($service as $s) :?>
			<div class="col-md-3 fashio-left">
				<img src="../images/<?=$s['image']?>" alt=" " class="img-gido">
				<h4  style="text-align: center; margin-bottom: 10px; " ><?=$s['name']?></h4>
				<h4 style="text-align: center;" ><?=number_format($s['price'])?><span>VNĐ</span></h4>

				<p><?=$s['description']?> </p>
			</div>
			<?php endforeach ; ?>
				
				<div class="clearfix"> </div>
		 </div>
	</div>
<!-- related -->
<div class="related">
	<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -228px; display: block; ">			
		<?php foreach($slider as $slide) :?>			
		<li class="nbs-flexisel-item" style="width: 340px; height: 340px;">
			<div style="width: 340px; height: 340px"  class="sliderfig-grid">
				<img width="340px" height="340px" src="../images/<?=$slide['image']?>"  alt=" " class="img-responsive">
			</div>
		</li>
		<?php endforeach ;?>

	
					
					
					</ul>
					<div class="nbs-flexisel-nav-left" style="top: 27.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 27.5px;"></div></div></div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>

</div>
<!-- related -->
<div class="co-ntact">
	<div class="container">
	<h3>Liên hệ</h3>
				  <form method="post" action="contact-post.html">
					<div class="to">
                     	<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					 	<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
					</div>
					<div class="text">
	                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                   <div class="form-submit">
			           <input name="submit" type="submit" id="submit" value="Submit"><br>
			           </div>
	                </div>
	                <div class="clearfix"></div>
                   </form>
			     
	</div>
</div>
<!-- map -->
<div class="map">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.01063674702!2d105.75155939927177!3d21.027630661857824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454bab9b67e93%3A0xbbe16aced529963f!2zTeG7uSDEkMOsbmgsIE5hbSBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1595302078970!5m2!1svi!2s"
		width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
		tabindex="0"></iframe>
</div>
<!-- map -->

<!-- footer -->
<div class="footer">
	<div class="container">
		<p>Copyrights © 2020 Fashion&Beauty. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>

<!-- footer -->
</body>
</html>