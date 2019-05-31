<!DOCTYPE html>
<html lang="en">
@include('front.inc.head')
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>


	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.blade.php" class="site-logo"><img src="img/logo.png" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	@include('front.inc.nav')
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Contact</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				<div class="contact-info-warp">
					<div class="contact-info">
						<h4>Address</h4>
						<p>40 Baria Street 133/2, NewYork City, US</p>
					</div>
					<div class="contact-info">
						<h4>Phone</h4>
						<p>(+88) 111 555 666</p>
					</div>
					<div class="contact-info">
						<h4>Email</h4>
						<p>infodeercreative@gmail.com</p>
					</div>
					<div class="contact-info">
						<h4>Working time</h4>
						<p>Monday - Friday: 08 AM - 06 PM</p>
					</div>
				</div>
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
			</div>
			<div class="contact-form spad pb-0">
				<div class="section-title text-center">
					<h3>GET IN TOUCH</h3>
					<p>Contact us for best deals and offer</p>
				</div>
				<form class="comment-form --contact">
					<div class="row">
						<div class="col-lg-4">
							<input type="text" placeholder="Your Name">
						</div>
						<div class="col-lg-4">
							<input type="text" placeholder="Your Email">
						</div>
						<div class="col-lg-4">
							<input type="text" placeholder="Subject">
						</div>
						<div class="col-lg-12">
							<textarea placeholder="Message"></textarea>
							<div class="text-center">
								<button class="site-btn">SUBMIT</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>NEWSLETTER</h3>
					<p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn">SUBSCRIBE</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	


	<!-- Footer section -->
    @include('front.inc.footer')
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	
</body>
</html>
