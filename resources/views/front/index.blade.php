<!DOCTYPE html>
<html lang="en">
@include('front.inc.head')
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
    @include('front.inc.header')
	<!-- header section end-->


	<!-- Header section  -->
    @include('front.inc.nav')
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle">Award Winning UNIVERSITY</div>
								<h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
								<p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
								<div class="site-btn">GET STARTED</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle">Award Winning UNIVERSITY</div>
								<h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
								<p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
								<div class="site-btn">GET STARTED</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Counter section  -->

	</section>



	<!-- Footer section -->
    @include('front.inc.header')
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>
