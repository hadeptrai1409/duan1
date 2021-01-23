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
require_once "../libs/nhanvien.php";
$service = list_all_service();
$nhanvien = list_all_nhanvien();

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Fashion&Beauty a Fashion Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Fashion&Beauty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<style>
	.okok{
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-gap: 20px;
	}
</style>
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
					<form>
						<input type="text" value="Search" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Search';}">
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
				<div class="banner">
					<div class="header-slider">
						<div class="slider">

							<div class="callbacks_container">
								<ul class="rslides" id="slider">
									<li>
										<img src="images/5.jpg" class="img-responsive" alt="" />

									</li>
									<li>
										<img src="images/3.jpg" class="img-responsive" alt="" />

									</li>
									<li>
										<img src="images/4.jpg" class="img-responsive" alt="" />

									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div class="datlich">
					<h2>NAIL PR_ONE HANOI</h2>
					<span>Beauty and Wellness/Nail Salon </span><br>
					
					
					<div id="demo">

					</div>
				
					<!--end demo-->


				<div class="okok">
					<div class="one">
					<button onload="mydatlich()" onclick="myFunction()" type="button" class="btn btn-success">Làm Tại
						Nhà</button><br>
					<span>Bạn đang thực hiện dịch vụ đặt lịch tại nhà</span>
						<details>
            <summary>Nhấn vào đây để thực hiện đặt lịch</summary>
            <p>
			<form action="../admin/datlich/create-save.php" method="POST" class="needs-validation" novalidate>
							<div class="form-group">
									<label for="pwd">Họ Và Tên:</label>
									<input style="width:100%" type="text" class="form-control" id=""
										placeholder="Nhập Tên" name="name" required>
								</div>	
								<div class="form-group">
									<label for="pwd">Số Điện Thoại:</label>
									<input style="width:100%" class="form-control" type="tel" id="phone" name="phone"
										placeholder="Nhập sổ điện thoại" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
								</div>
								<div class="form-group">
									<label for="uname">Chọn Ngày Giờ:</label>
									<input style="width:100%" type="datetime-local" class="form-control" id=""
										placeholder="Chọn Ngày Giờ" name="ngay_dat" value="<?=$r['ngay_dat']?>" required>
								</div>
							<div class="form-group">
									<label for="">Địa Chỉ làm tại nhà:</label>
									<input style="width:100%" type="text" class="form-control" id=""
										placeholder="Nhập Địa Chỉ làm tại nhà" name="address" required>
								</div>
								<div class="form-group">
									<label for="">Chọn dịch vụ:</label><br>
									<?php foreach ($service as $s) : ?>
									<input name="dichvu" type="checkbox" id="vehicle1" value="<?=$s['name']?>">
									<label name="dichvu" for="dichvu"> <?=$s['name']?></label><br>
									<div id="check"><?=number_format($s['price'])?><span>VNĐ</span> </div>
									<?php  endforeach; ?>
								</div> 
								<div class="form-group">
									<label for="">Chọn Nhân Viên:</label>
									<input name="nhanvien" style="width:100%" type="text" class="form-control" id=""
										placeholder="Chọn Nhân Viên" list="browsers" required>
										
									<datalist id="browsers">
									<?php foreach($nhanvien as $n): ?>
										<option value="<?=$n['fullname']?>">
									<?php endforeach; ?>
									</datalist>
								
								</div>
								<button onclick="ok()" name="btnsubmit" type="submit" class="btn btn-primary">Đặt Lịch</button>
								
							</form>
			</p>
        </details>
					</div>
										
					<div class="two">
					<button onload="myFunction()" onclick="mydatlich()" type="button" class="btn btn-danger">Làm Tại Cửa
						Hàng</button><br>
					<span>Bạn đang thực hiện dịch vụ đặt lịch tại hàng</span>
						<details>
            <summary>Nhấn vào đây để thực hiện đặt lịch</summary>
            <p>
			<form action="../admin/datlich/create-save.php" method="POST" class="needs-validation" novalidate>
								<div class="form-group">
									<label for="">Số Điện Thoại:</label>
									<input style="width:100%" type="tel" class="form-control" id=""
										placeholder="Nhập Số Điện Thoại" name="phone" required>
								</div>
								<div class="form-group">
									<label for="">Họ Và Tên:</label>
									<input style="width:100%" type="text" class="form-control" id=""
										placeholder="Nhập Họ Và Tên" name="name" required>
								</div>
								<div class="form-group">
									<label  for="">Chọn dịch vụ:</label><br>

									<?php foreach ($service as $s) : ?>
									<input type="checkbox" id="vehicle1" name="dichvu" value="<?=$s['name']?>">
									<label for="vehicle1"> <?=$s['name']?></label><br>
									
									<?php  endforeach; ?>

								</div>
						
								<div class="form-group">
									<label for="">Chọn Nhân Viên:</label>
									<input style="width:100%" type="text" class="form-control" id=""
										placeholder="Chọn Nhân Viên" list="browsers" name="nhanvien" required>
									<datalist id="browsers">
									<?php foreach($nhanvien as $n): ?>
												<option value="<?=$n['fullname']?>">
											<?php endforeach; ?>
									</datalist>
								</div>
						<div class="form-group">
							<label for="">Chọn Ngày Giờ:</label>
							<input style="width:100%" type="datetime-local" class="form-control" id=""
								placeholder="Chọn Ngày Giờ" name="time" required>
						</div>
						<button onclick="ok()" type="submit" name="btnsubmit" class="btn btn-primary">Đặt Lịch</button>
						<!-- <input class="btn btn-primary" type="reset"> -->
						</form>
			</p>
        </details>
					</div>
				</div>
				<script>
				
					function ok() {
						alert("Cảm ơn bạn đã đặt lịch ! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất");
					
					}
				
					
				</script>

			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!-- banner -->
	<!-- nuts -->

	<!-- nuts -->
	<!-- fle -->

	<!-- fle -->
	<!-- smooth -->
	<div class="smooth">
		1
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
			<p>Copyrights © 2020 Fashion&Beauty. All rights reserved <a href="http://w3layouts.com/"></a></p>
		</div>
	</div>
	<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span
			id="toTopHover" style="opacity: 0;"> </span></a>

	<!-- footer -->
</body>

</html>