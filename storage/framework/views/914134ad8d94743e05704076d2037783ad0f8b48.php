

<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>OppikLaundry</title>
		<!--meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Laundry" />
		<!--//meta tags ends here-->
		<!--booststrap-->
		<link href="<?php echo e(asset('front/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" media="all">
		<!--//booststrap end-->
		<!-- font-awesome icons -->
		<link href="<?php echo e(asset('front/css/font-awesome.css')); ?>" rel="stylesheet">
		<!-- //font-awesome icons -->
		<!--stylesheets-->
		<!--jquery-css counter time-->
		<link href="<?php echo e(asset('front/css/prettyPhoto.css')); ?>" rel="stylesheet" type="text/css">
		<!--prettyPhoto slider-->
		<!--stylesheets-->
		<link href="<?php echo e(asset('front/css/style.css')); ?>" rel='stylesheet' type='text/css' media="all">
		<!--//stylesheets-->
		<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
	</head>
	<body>
		<div class="header-outs" id="home">
			<div class="header-bar">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="hedder-up">
						<h1><a class="navbar-brand" href="#"><span>OppikLaundry</span></a></h1>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a href="#about" class="nav-link scroll">About</a>
							</li>
							<li class="nav-item">
								<a href="#services" class="nav-link scroll">Service</a>
							</li>
							<li class="nav-item">
									<a href="#price" class="nav-link scroll">Price</a>
							</li>
							<li class="nav-item">
								<a href="#testimonials" class="nav-link scroll">Clients</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo e(url('/login')); ?>" class="nav-link"><i class="fa fa-sign-in"></i> Login</a>
							</li>
						</ul>
					</div>
					</nav>
					<div class="clearfix"> </div>
				</div>
				<!-- //Navigation -->
				<!-- Slideshow 4 -->
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider4">
							<li>
								<div class="slider-img">
									<div class="container">
										<div class="slider-info">
											<h4>Best Place for Laundry & <br>Dry Cleaning</h4>
											<p>Quis autem vel eum iureautem</p>
											<div class="outs_more-buttn">
												<a href="#about" class="scroll">Learn More</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="slider-img ">
									<div class="container">
										<div class="slider-info">
											<h4>Fresh Approach to Your<br>Daily Washing</h4>
											<p>Quis autem vel eum iureautem </p>
											<div class="outs_more-buttn">
												<a href="#about" class="scroll">Learn More</a>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<div class="banner_social">
						<ul class="its_social_list">
							<li><a href="#" class="le_facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
							<li><a href="#" class="le_twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
							<li><a href="#" class="le_dribble"><span class="fa fa-dribbble" aria-hidden="true"></span></a></li>
							<li><a href="#" class="le_vimeo"><span class="fa fa-vimeo" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<!-- This is here just to demonstrate the callbacks -->
			</div>
			<!-- //banner -->
			<!--about -->
			
			<!--//about -->
			<!-- services -->
			<div class="services" id="services">
				<div class="container">
					<h3 class="title clr">We Offer Services</h3>
					<div class="w3ls-services-grids">
						<div class="w3ls-services-left">
							<div class=" row ser-close">
								<div class="col-lg-4 col-md-5 col-sm-6 w3ls-services-left-top ">
									<span class="ser-listed">1.</span>
									<h5>Wash & Fold Laundry </h5>
									<p>Donec neque urna, tempor id est id, gravida molestie </p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 w3ls-services-middle-left img-upper">
									<div class="services-left-img">
										<img src="<?php echo e(asset('front/images/s2.jpg')); ?>" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="w3ls-services-middle-two">
							<div class=" row ser-close">
								<div class="offset-lg-4 offset-md-3 offset-sm-2 col-lg-4 col-md-5 col-sm-6 w3ls-services-left-top ">
									<span class="ser-listed">2.</span>
									<h5>Soft Dry Cleaning</h5>
									<p>Donec neque urna, tempor id est id, gravida molestie </p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 services-mid-img img-upper">
									<div class="services-left-img">
										<img src="<?php echo e(asset('front/images/s1.jpg')); ?>" alt="" >
									</div>
								</div>
							</div>
						</div>
						<div class=" w3ls-services-right">
							<div class=" row ser-close">
								<div class="col-lg-4 col-md-5 col-sm-6 w3ls-services-left-top">
									<span class="ser-listed">3.</span>
									<h5>Drop off Laundry</h5>
									<p>Donec neque urna, tempor id est id, gravida molestie</p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 w3ls-services-middle-right img-upper">
									<div class="services-left-img">
										<img src="<?php echo e(asset('front/images/s3.jpg')); ?>" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //services -->
			<!--portfolio -->
        
			<!--end portfolio-area -->
			<!--team -->
			<section class="team" id="team">
				<div class="container">
					<h3 class="title clr">Meet Our Team</h3>
					<div class="row pt-md">
						<div class="col-lg-3 col-md-6 col-sm-6 profile">
							<div class="bodr-img">
								<div class="img-box">
									<img src="<?php echo e(asset('front/images/t1.jpg')); ?>" alt="">
									<ul class="text-center">
										<li><h4>Marrie Doi</h4></li>
										<li><h6>Dry Cleaning</h6></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 profile">
							<div class="img-box">
								<img src="<?php echo e(asset('front/images/t3.jpg')); ?>" alt="">
								<ul class="text-center">
									<li><h4>Max Will</h4></li>
									<li><h6>Dry Cleaning</h6></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 profile">
							<div class="img-box">
								<div class="team-list-img">
									<img src="<?php echo e(asset('front/images/t4.jpg')); ?>" alt="">
								</div>
								<ul class="text-center">
									<li><h4>Kent Kelly</h4></li>
									<li><h6>Dry Cleaning</h6></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 profile">
							<div class="img-box">
								<img src="<?php echo e(asset('front/images/t5.jpg')); ?>" alt="">
								<ul class="text-center">
									<li><h4>Sunny Doi</h4></li>
									<li><h6>Dry Cleaning</h6></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row pt-md">
						<div class="col-lg-3 col-md-6 col-sm-6 profile">
							<div class="bodr-img">
								<div class="img-box">
									<img src="<?php echo e(asset('front/images/t6.jpg')); ?>" alt="">
									<ul class="text-center">
										<li><h4>Rox Will</h4></li>
										<li><h6>Dry Cleaning</h6></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 profile">
							<div class="img-box">
								<img src="<?php echo e(asset('front/images/t5.jpg')); ?>" alt="">
								<ul class="text-center">
									<li><h4>Sam Doi</h4></li>
									<li><h6>Dry Cleaning</h6></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 profile">
							<div class="img-box">
								<div class="team-list-img">
									<img src="<?php echo e(asset('front/images/t2.jpg')); ?>" alt="">
								</div>
								<ul class="text-center">
									<li><h4>Kent Kelly</h4></li>
									<li><h6>Dry Cleaning</h6></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 profile">
							<div class="img-box">
								<img src="<?php echo e(asset('front/images/t1.jpg')); ?>" alt="">
								<ul class="text-center">
									<li><h4>Rose Will</h4></li>
									<li><h6>Dry Cleaning</h6></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
			<!--//team -->
			<!--Price-tags -->
			<div class="price-table" id="price">
				<div class="container">
					<h3 class="title clr">Prices & Plans</h3>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 price-agile-list">
							<div class="pricing text-center">
								<div class="pricing-top">
									<p><sup>$</sup><em>55</em>/mo</p>
									<span>Basic</span>
								</div>
								<ul>
									<li>2 jeans</li>
									<li>4 T-shirts</li>
									<li>1 shirt & top</li>
									<li>3 shorts</li>
									<li>More..</li>
								</ul>
								<div class="btn"><a href="#contact" class="scroll">Order Now</a></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 price-agile-list">
							<div class="pricing text-center">
								<div class="pricing-top">
									<p><sup>$</sup><em>60</em>/mo</p>
									<span>Gold</span>
								</div>
								<ul>
									<li>2 jeans</li>
									<li>4 T-shirts</li>
									<li>1 shirt & top</li>
									<li>3 shorts</li>
									<li>More..</li>
								</ul>
								<div class="btn"><a href="#contact" class="scroll">Order Now</a></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 price-agile-list">
							<div class="pricing text-center">
								<div class="pricing-top">
									<p><sup>$</sup><em>80</em>/mo</p>
									<span>Dimond</span>
								</div>
								<ul>
									<li>2 jeans</li>
									<li>4 T-shirts</li>
									<li>1 shirt & top</li>
									<li>3 shorts</li>
									<li>More..</li>
								</ul>
								<div class="btn"><a href="#contact" class="scroll">Order Now</a></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 price-agile-list">
							<div class="pricing text-center">
								<div class="pricing-top">
									<p><sup>$</sup><em>95</em>/mo</p>
									<span>Pro</span>
								</div>
								<ul>
									<li>2 jeans</li>
									<li>4 T-shirts</li>
									<li>1 shirt & top</li>
									<li>3 shorts</li>
									<li>More..</li>
								</ul>
								<div class="btn"><a href="#contact" class="scroll">Order Now</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//Price-tags -->
			<!--testimonials -->
			<div class="testimonials" id="testimonials">
				<div class="container">
					<h3 class="title ">What Says Clients</h3>
					<div class="row client-agile-says">
						<div class="col-lg-4 col-md-6 col-sm-6 item-clents">
							<div class="gap-one">
								<div class="client-text">
									<div class="clt-syas-agile">
										<h5>lois kent</h5>
										<p>Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus suscipit</p>
									</div>
									<div class="img-text">
										<img src="images/c1.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 item-clents">
							<div class="gap-two">
								<div class="client-text ">
									<div class="clt-syas-agile">
										<h5>Milly will</h5>
										<p>Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus suscipit</p>
									</div>
									<div class="img-text">
										<img src="images/c3.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 item-clents ">
							<div class="gap-three">
								<div class="client-text ">
									<div class="clt-syas-agile">
										<h5>lilly rose</h5>
										<p>Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus suscipit </p>
									</div>
									<div class="img-text">
										<img src="images/c2.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 item-clents ">
							<div class="gap-four">
								<div class="client-text ">
									<div class="clt-syas-agile">
										<h5>Kelly son</h5>
										<p>Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus suscipit </p>
									</div>
									<div class="img-text">
										<img src="images/c1.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 item-clents">
							<div class="gap-five">
								<div class="client-text ">
									<div class="clt-syas-agile">
										<h5>Sara kent</h5>
										<p>Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus suscipit</p>
									</div>
									<div class="img-text">
										<img src="images/c2.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 item-clents">
							<div class="gap-six">
								<div class="client-text">
									<div class="clt-syas-agile ">
										<h5>Rose will</h5>
										<p>Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus suscipit</p>
									</div>
									<div class="img-text">
										<img src="images/c3.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//testimonials -->
			<!-- contact -->
			
			<div class="contact-map">
				<div class="map-grid">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1485918622416!2d107.53959401413668!3d-6.872792995033468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e45faaaaaaab%3A0x1f91cb3ecafbb91b!2sMasjid+Agung+Kota+Cimahi!5e0!3m2!1sid!2sid!4v1528150944404" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<!-- //contact-->
			<!-- footer-->
			<footer>
				<div class="container">
					<div class="agileits-contact-addrss">
						<div class="row top-gap">
							<div class="col-md-7 header-side">
								<p>© 2018 OppikLaundry. All Rights Reserved</p>
							</div>
							<div class="col-md-5 header-side">
								<div class="buttom-social-grids">
									<ul>
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-rss"></span></a></li>
										<li><a href="#"><span class="fa fa-vk"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!--//footer-->
			<!--js working-->
			<script src='<?php echo e(asset("front/js/jquery-2.2.3.min.js")); ?>'></script>
			<!--//js working-->
			<!--responsiveslides banner-->
			<script src="<?php echo e(asset('front/js/responsiveslides.min.js')); ?>"></script>
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
					// Slideshow 4
					$("#slider4").responsiveSlides({
						auto: true,
						pager:true,
						nav: false,
						speed: 900,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			<!--// responsiveslides banner-->	  
			<!-- OnScroll-Number-Increase-JavaScript -->
			<script src="<?php echo e(asset('front/js/jquery.waypoints.min.js')); ?>"></script>
			<script src="<?php echo e(asset('front/js/jquery.countup.js')); ?>"></script>
			<script>
				$('.counter').countUp();
			</script>
			<!-- //OnScroll-Number-Increase-JavaScript -->
			<!-- start-smoth-scrolling -->
			<script src="<?php echo e(asset('front/js/move-top.js')); ?>"></script>
			<script src="<?php echo e(asset('front/js/easing.js')); ?>"></script>
			<script>
				jQuery(document).ready(function ($) {
					$(".scroll").click(function (event) {
						event.preventDefault();
						$('html,body').animate({
							scrollTop: $(this.hash).offset().top
						}, 1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
			<!-- for-bottom-to-top smooth scrolling -->
			<script>
				$(document).ready(function () {
					$().UItoTop({
						easingType: 'easeOutQuart'
					});
				});
			</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			<!-- //for-bottom-to-top smooth scrolling -->
			<!--bootstrap working-->
			<script src="<?php echo e(asset('front/js/bootstrap.min.js')); ?>"></script>
			<!-- //bootstrap working-->
				<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
			<script src="<?php echo e(asset('front/js/jquery-1.7.2.js')); ?>"></script>
			<script src="<?php echo e(asset('front/js/jquery.quicksand.js')); ?>"></script>
			<script src="<?php echo e(asset('front/js/script.js')); ?>"></script>
			<script src="<?php echo e(asset('front/js/jquery.prettyPhoto.js')); ?>" ></script>
			<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
		</body>
	</html>