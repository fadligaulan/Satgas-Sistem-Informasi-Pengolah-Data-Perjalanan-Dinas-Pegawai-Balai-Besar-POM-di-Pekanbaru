<!DOCTYPE html>
<!--
	App by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Info Kajian Islami | Welcome</title>
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/fadli.ico') ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/src/css/bootstrap.css'); ?>">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/src/css/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/src/css/owl.theme.default.min.css'); ?>">
	<!-- Animate.css'); ?> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/src/css/animate.css'); ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/<?php echo base_url('assets/src/css/all.css'); ?>" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/src/css/style.css'); ?>">
</head>
<body>


<div id="page-wrap">


	<!-- ==========================================================================================================
													   HERO
		 ========================================================================================================== -->

	<div id="fh5co-hero-wrapper">
		<nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
			<a class="navbar-brand" href="">App</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-items-center ml-auto mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="$('#fh5co-features').goTo();return false;">Fitur</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('takmir-masjid/insert'); ?>" >Registrasi Takmir</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('masjid/insert'); ?>">Registrasi Masjid</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('auth/login'); ?>">Login</a>
					</li>
				</ul>
				<div class="social-icons-header">
					<a href="https://www.facebook.com/fh5co"><i class="fab fa-facebook-f"></i></a>
					<a href="https://freehtml5.co"><i class="fab fa-instagram"></i></a>
					<a href="https://www.twitter.com/fh5co"><i class="fab fa-twitter"></i></a>
				</div>
			</div>
		</nav>

		<div class="container fh5co-hero-inner">
			<h1 class="animated fadeIn wow" data-wow-delay="0.4s">SELAMAT DATANG DI WEBSITE APLIKASI INFORMASI JADWAL KAJIAN MASJID</h1>
			<p class="animated fadeIn wow" data-wow-delay="0.67s">Aplikasi ini menyediakan jadwal kajian berbasis lokasi yang ada di sekitar anda, dengan menggunakan LBS. </p>
			<button class="btn btn-md download-btn-first wow fadeInLeft animated" data-wow-delay="0.85s" onclick="$('#fh5co-download').goTo();return false;">Download</button>
			<button class="btn btn-md features-btn-first animated fadeInLeft wow" data-wow-delay="0.95s" onclick="$('#fh5co-features').goTo();return false;">Features</button>
			<img class="fh5co-hero-smartphone animated fadeInRight wow" data-wow-delay="1s" src="<?php echo base_url('assets/src/img/phone-image.png'); ?>" alt="Smartphone">
		</div>


	</div> <!-- first section wrapper -->


	<!-- ==========================================================================================================
													 ADVANTAGES
		 ========================================================================================================== -->

	<div class="fh5co-advantages-outer">
		<div class="container">
			<h1 class="second-title"><span class="span-perfect">Keunggulan</span> <span class="span-features">Aplikasi</span></h1>
			<small>Infokajian Islami</small>

			<div class="row fh5co-advantages-grid-columns wow animated fadeIn" data-wow-delay="0.36s">

				<div class="col-sm-4">
					<img class="grid-image" src="<?php echo base_url('assets/src/img/icon-1.png'); ?>" alt="Icon-1">
					<h1 class="grid-title">Usability</h1>
					<p class="grid-desc">Mudah digunakan, setiap fitur dan fungsi mudah di pahami dan bersifat user frendly.</p>
				</div>

				<div class="col-sm-4">
					<img class="grid-image" src="<?php echo base_url('assets/src/img/icon-2.png'); ?>" alt="Icon-2">
					<h1 class="grid-title">Tampilan Menarik</h1>
					<p class="grid-desc">Aplikasi ini memiliki tampilan menarik dan mudah digunakan oleh semua usia.</p>
				</div>

				<div class="col-sm-4">
					<img class="grid-image" src="<?php echo base_url('assets/src/img/icon-3.png'); ?>" alt="Icon-3">
					<h1 class="grid-title">Fitur Aplikasi</h1>
					<p class="grid-desc">Aplikasi ini mempunyai banyak fitur yang memudahkan masyarakat mencari kajian</p>
				</div>


			</div>
		</div>
	</div>


	<!-- ==========================================================================================================
													  SLIDER
		 ========================================================================================================== -->

	<div class="fh5co-slider-outer wow fadeIn" data-wow-delay="0.36s">
		<h1>FITUR APLIKASI</h1>
		<small>Info Kajian Islami</small>
		<div class="container fh5co-slider-inner">

			<div class="owl-carousel owl-theme">

				<div class="item"><img src="<?php echo base_url('assets/src/img/smartphone-2.png'); ?>" alt=""></div>
				<div class="item"><img src="<?php echo base_url('assets/src/img/smartphone-3.png'); ?>" alt=""></div>
				<div class="item"><img src="<?php echo base_url('assets/src/img/smartphone-4.png'); ?>" alt=""></div>
				<div class="item"><img src="<?php echo base_url('assets/src/img/smartphone-5.png'); ?>" alt=""></div>
				<div class="item"><img src="<?php echo base_url('assets/src/img/iphone.png'); ?>" alt=""></div>


			</div>

		</div>
	</div>


	<!-- ==========================================================================================================
													  FEATURES
		 ========================================================================================================== -->

	<div class="curved-bg-div wow animated fadeIn" data-wow-delay="0.15s"></div>
	<div id="fh5co-features" class="fh5co-features-outer">
		<div class="container">

			<div class="row fh5co-features-grid-columns">

				<div class="col-sm-6 in-order-1 wow animated fadeInLeft" data-wow-delay="0.22s">
					<div class="col-sm-image-container">
						<img class="img-float-left" src="<?php echo base_url('assets/src/img/smartphone-1.png'); ?>" alt="smartphone-1">
						<span class="span-new">NEW</span>
						<span class="span-free">Free</span>
					</div>
				</div>

				<div class="col-sm-6 in-order-2 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
					<h1>Menu Jadwal Kajian</h1>
					<p>Menampilkan jadwal kajian secara detail yang terdiri dari poster kajian, nama masjid, contact masjid, nama ustadz, tanggal kajian, waktu kajian, dan penjelasan kajian </p>
					<span class="circle circle-first"><i class="fab fa-instagram"></i></span>
					<span class="circle circle-middle"><i class="fab fa-facebook"></i></span>
					<span class="circle circle-last"><i class="fab fa-twitter"></i></span>
				</div>

				<div class="col-sm-6 in-order-3 sm-6-content wow animated fadeInLeft" data-wow-delay="0.22s">
					<h1>Menu Video Kajian</h1>
					<p>Menampilkan video kajian yang ada di masjid, menu berisi video kajian dan penjelasan seperti nama masjid, nama ustadz, tanggal kajian dan penjelasan </p>
					<span class="circle circle-first"><i class="fas fa-star"></i></span>
					<span class="circle circle-middle"><i class="far fa-star"></i></span>
					<span class="circle circle-last"><i class="far fa-thumbs-up"></i></span>
				</div>

				<div class="col-sm-6 in-order-4 wow animated fadeInRight" data-wow-delay="0.22s">
					<img class="img-float-right" src="<?php echo base_url('assets/src/img/smartphone-2.png'); ?>" alt="smartphone-2">
				</div>

				<div class="col-sm-6 in-order-5 wow animated fadeInLeft" data-wow-delay="0.22s">
					<div class="col-sm-image-container">
						<img class="img-float-left" src="<?php echo base_url('assets/src/img/iphone.png'); ?>" alt="smartphone-3">
						<span class="span-data">DATA</span>
						<span class="span-percent">100%</span>
					</div>
				</div>
				<div class="col-sm-6 in-order-6 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
					<h1>Menu Kajian Streaming</h1>
					<p>Menu ini berisi fitur kajian streaming yang terhubung ke youtube dan dapat di tonton secara online oleh user</p>
					<span class="circle circle-first">95%</span>
					<span class="circle circle-middle"><i class="fas fa-forward"></i></span>
					<span class="circle circle-last"><i class="fab fa-github"></i></span>

				</div>




			</div> <!-- row -->


		</div>
	</div>


	<!-- ==========================================================================================================
													  REVIEWS
		 ========================================================================================================== -->

	<div id="fh5co-reviews" class="fh5co-reviews-outer">
		<h1>What people are saying</h1>
		<small>Reviews</small>
		<div class="container fh5co-reviews-inner">
			<div class="row justify-content-center">
				<div class="col-sm-5 wow fadeIn animated" data-wow-delay="0.25s">
					<img class="float-left" src="<?php echo base_url('assets/src/img/quotes-1.jpg'); ?>" alt="Quote 1">
					<p class="testimonial-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis similique quasi.</p>
					<small class="testimonial-author">John Doe</small>
					<img class="float-right" src="<?php echo base_url('assets/src/img/quotes-2.jpg'); ?>" alt="Quote 2">
				</div>
				<div class="col-sm-5 testimonial-2 wow fadeIn animated" data-wow-delay="0.67s">
					<img class="float-left" src="<?php echo base_url('assets/src/img/quotes-1.jpg'); ?>" alt="Quote 1">
					<p class="testimonial-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis similique quasi.</p>
					<small class="testimonial-author">Someone</small>
					<img class="float-right" src="<?php echo base_url('assets/src/img/quotes-2.jpg'); ?>" alt="Quote 2">
				</div>
			</div>

		</div>
	</div>
	

	<!-- ==========================================================================================================
                                                 BOTTOM
    ========================================================================================================== -->

	<div id="fh5co-download" class="fh5co-bottom-outer">
		<div class="overlay">
			<div class="container fh5co-bottom-inner">
				<div class="row">
					<div class="col-sm-6">
						<h1>How to download the app?</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque suscipit, similique animi saepe, ipsam itaque, tempore minus maxime pariatur error unde fugit tenetur.</p>
						<a class="wow fadeIn animated" data-wow-delay="0.25s" href="#"><img class="app-store-btn" src="<?php echo base_url('assets/src/img/app-store-icon.png'); ?>" alt="App Store Icon"></a>
						<a class="wow fadeIn animated" data-wow-delay="0.67s" href="#"><img class="google-play-btn" src="<?php echo base_url('assets/src/img/google-play-icon.png'); ?>" alt="Google Play Icon"></a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ==========================================================================================================
                                               SECTION 7 - SUB FOOTER
    ========================================================================================================== -->

	<footer class="footer-outer">
		<div class="container footer-inner">

			<div class="footer-three-grid wow fadeIn animated" data-wow-delay="0.66s">
				<div class="column-1-3">
					<h1>App</h1>
				</div>
				<div class="column-2-3">
					<nav class="footer-nav">
						<ul>
							<a href="#" onclick="$('#fh5co-hero-wrapper').goTo();return false;"><li>Home</li></a>
							<a href="#" onclick="$('#fh5co-features').goTo();return false;"><li>Features</li></a>
							<a href="#" onclick="$('#fh5co-reviews').goTo();return false;"><li>Reviews</li></a>
							<a href="#" onclick="$('#fh5co-download').goTo();return false;"><li class="active">Download</li></a>
						</ul>
					</nav>
				</div>
				<div class="column-3-3">
					<div class="social-icons-footer">
						<a href="https://www.facebook.com/fh5co"><i class="fab fa-facebook-f"></i></a>
						<a href="https://freehtml5.co"><i class="fab fa-instagram"></i></a>
						<a href="https://www.twitter.com/fh5co"><i class="fab fa-twitter"></i></a>
					</div>
				</div>
			</div>

			<span class="border-bottom-footer"></span>

			<p class="copyright">&copy; 2018 App. All rights reserved. Design by <a href="https://freehtml5.co" target="_blank">FreeHTML5</a>.</p>

		</div>
	</footer>




</div> <!-- main page wrapper -->
	
	<script src="<?php echo base_url('assets/src/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/src/js/bootstrap.js'); ?>"></script>
	<script src="<?php echo base_url('assets/src/js/owl.carousel.js'); ?>"></script>
	<script src="<?php echo base_url('assets/src/js/wow.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/src/js/main.js'); ?>"></script>
</body>
</html>