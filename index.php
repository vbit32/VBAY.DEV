<!DOCTYPE html>
<html>

<head>
	<title>Alena - Free Photography Portfolio HTML Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="author">
	<meta name="keywords" content="keywords">
	<meta name="description" content="description">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/vendor.css">
	<link rel="stylesheet" type="text/css" href="fonts/icomoon.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>

<body>

	<div class="nav nav-overlay">
		<div id="menu-btn-close" class="menu-btn menu-btn-close"><span></span></div>
		<div class="nav__content">
			<ul class="nav__list">
				<li class="nav__list-item active-nav"><a href="index.html" class="hover-target">Home</a></li>
				<li class="nav__list-item"><a href="about.html" class="hover-target">About <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="contact.html" class="hover-target">Contact <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="portfolio.html" class="hover-target">Portfolio <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="blog.html" class="hover-target">Blog <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="single.html" class="hover-target">Single <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
				<li class="nav__list-item"><a href="styles.html" class="hover-target">Styles <span class="badge bg-primary text-white fs-6">PRO</span></a></li>
			</ul>
		</div>
	</div>

	<header id="header" class="fixed-top">
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg py-4">
					<div class="navbar-brand">
						<a href="index.html">
							<img src="images/logo.svg" alt="logo">
						</a>
					</div>

					<div class="navbar-collapse collapse justify-content-end me-5" id="slide-navbar-collapse">
						<ul id="slide-down" class="navbar-nav gap-4">
							<li><a href="#billboard" class="nav-link active">Home</a></li>
							<li><a href="#about" class="nav-link">About me</a></li>
							<li><a href="#portfolio" class="nav-link">Portfolio</a></li>
							<li><a href="#blog" class="nav-link">Blog</a></li>
							<li><a href="#contact" class="nav-link">Contact</a></li>
							<li><a class="btn btn-outline-dark rounded-pill" href="https://templatesjungle.gumroad.com/l/alena-portfolio-html-template" target="_blank"><strong>Get PRO</strong></a></li>
						</ul>
					</div>

					<div class="social-links">
						<ul class="list-unstyled d-flex m-0 gap-2">
							<li>
								<a href="#"><i class="icon icon-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-youtube"></i></a>
							</li>
						</ul>
					</div><!--social-links-->

					<div id="menu-btn" class="menu-btn"><span></span></div>

				</nav>
			</div>
		</div>
	</header>

	<div id="billboard">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				</div>
				<div class="col-md-6">
					<figure class="bannerimg position-relative">
						<div class="text-content" data-aos="fade-in">
							<h1 class="display-1">Photographer & Film Maker</h1>
							<h4 class="py-3">Los Angeles, USA</h4>
							<a href="#" class="btn btn-dark px-5 py-3">Hire me</a>
						</div>
						<img src="images/manga_header.svg" class="img-fluid" alt="photographer">
					</figure>
				</div>
			</div>
		</div>
	</div><!--billboard-->

	<section id="about" class="personal-info my-2 py-2 my-md-5 py-md-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<figure data-aos="zoom-in-left">
						<img src="images/photographer.jpg" class="img-fluid" alt="photographer">
					</figure>
				</div>
				<div class="col-md-6">
					<div class="text-content m-2 p-2 m-md-5 p-md-5" data-aos="zoom-in-right">
						<div class="section-header">
							<h2 class="section-title">About Me</h2>
						</div><!--section-header-->
		
						<div class="description">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
								been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
								galley of type and scrambled it to make a type specimen book.</p>
							<p>Nec eget condimentum etiam leo. Morbi at eget fusce feugiat volutpat et volutpat malesuada.
								Suspendisse nisi, quam neque in leo sollicitudin. Quam neque in leo consectetur.</p>
						</div>
		
						<div class="btn-left">
							<a href="#" class="btn btn-dark px-5 py-3">View My Works</a>
						</div>
		
					</div><!--text-content-->
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio" id="portfolio">
		<div class="container-fluid">
			<div class="row">

				<div class="section-header text-center">
					<h2 class="section-title">Portfolio</h2>
					<p>These are actual works of <a href="https://www.pexels.com/@cottonbro/" target="_blank">cottonbro studio</a></p>
				</div><!--section-header-->

				<div id="filters" class="button-group d-flex gap-4 justify-content-center py-5">
					<a href="#" class="text-decoration-none text-uppercase is-checked" data-filter=".fashion">Fashion</a>
					<a href="#" class="text-decoration-none text-uppercase" data-filter=".portrait">Portrait</a>
					<a href="#" class="text-decoration-none text-uppercase" data-filter=".urban">Urban</a>
					<a href="#" class="text-decoration-none text-uppercase" data-filter=".events">Events</a>
				  </div>

			</div>
		  
			<div class="grid p-0 clearfix row row-cols-2 row-cols-md-3 row-cols-lg-5">
				<div class="col mb-4 portfolio-item fashion urban">
					<a href="images/portfolio-item1.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 1."><img src="images/portfolio-thumb-1.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item fashion portrait events">
					<a href="images/portfolio-item2.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 2."><img src="images/portfolio-thumb-2.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item portrait fashion">
					<a href="images/portfolio-item3.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 3."><img src="images/portfolio-thumb-3.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item fashion">
					<a href="images/portfolio-item4.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 4."><img src="images/portfolio-thumb-4.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item urban events">
					<a href="images/portfolio-item5.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 5."><img src="images/portfolio-thumb-5.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item urban">
					<a href="images/portfolio-item6.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 6."><img src="images/portfolio-thumb-6.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item urban portrait">
					<a href="images/portfolio-item7.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 7."><img src="images/portfolio-thumb-7.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item portrait events">
					<a href="images/portfolio-item8.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 8."><img src="images/portfolio-thumb-8.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item events urban fashion">
					<a href="images/portfolio-item9.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item 9."><img src="images/portfolio-thumb-9.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item events portrait fashion">
					<a href="images/portfolio-item10.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 0."><img src="images/portfolio-thumb-10.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item fashion">
					<a href="images/portfolio-item11.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 1."><img src="images/portfolio-thumb-11.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item portrait events">
					<a href="images/portfolio-item12.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 2."><img src="images/portfolio-thumb-12.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item portrait urban">
					<a href="images/portfolio-item13.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 3."><img src="images/portfolio-thumb-13.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item portrait">
					<a href="images/portfolio-item14.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 4."><img src="images/portfolio-thumb-14.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item fashion portrait urban">
					<a href="images/portfolio-item15.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 5."><img src="images/portfolio-thumb-15.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item urban fashion">
					<a href="images/portfolio-item16.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 6."><img src="images/portfolio-thumb-16.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item events urban fashion">
					<a href="images/portfolio-item17.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 7."><img src="images/portfolio-thumb-17.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
				<div class="col mb-4 portfolio-item events portrait fashion">
					<a href="images/portfolio-item18.jpg" class="image-link" title="Sample Caption goes here for Portfolio Item1 8."><img src="images/portfolio-thumb-18.jpg" class="img-fluid" alt="portfolio"></a>
				</div>
			</div>

		</div>
	</section>

	<section id="blog" class="latest-blogs my-2 py-2 my-md-5 py-md-5">
		<div class="container">

			<div class="section-header my-5">
				<h2 class="section-title">Blog</h2>
			</div><!--section-header-->

			<div class="row mb-5 pb-5">
				<div class="col-md-6">
					<div class="post-content mb-5">
						<div class="meta-tags text-uppercase text-gray d-flex gap-3 fs-6 mb-3 align-items-center">
							<span class="meta-date">Jan.30.2020</span>
							<span>ᐧ</span>
							<span class="meta-category"><a href="#">Trends</a></span>
						</div>
						<h3 class="post-title mb-3"><a href="single-blog.html">Why The Trend Of Minimalism?</a></h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
							has been the industry's standard dummy text ever.</p>
					</div>
				</div><!--post-item-->

				<div class="col-md-6">
					<div class="post-content mb-5">
						<div class="meta-tags text-uppercase text-gray d-flex gap-3 fs-6 mb-3 align-items-center">
							<span class="meta-date">Jan.30.2020</span>
							<span>ᐧ</span>
							<span class="meta-category"><a href="#">Trends</a></span>
						</div>
						<h3 class="post-title mb-3"><a href="single-blog.html">Simple Tips & Tricks Of Photography</a>
						</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
							has been the industry's standard dummy text ever.</p>
					</div>
				</div><!--post-item-->

				<div class="col-md-6">
					<div class="post-content mb-5">
						<div class="meta-tags text-uppercase text-gray d-flex gap-3 fs-6 mb-3 align-items-center">
							<span class="meta-date">Jan.30.2020</span>
							<span>ᐧ</span>
							<span class="meta-category"><a href="#">Collections</a></span>
						</div>
						<h3 class="post-title mb-3"><a href="single-blog.html">World's Top Photograph Collections</a>
						</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
							has been the industry's standard dummy text ever.</p>
					</div>
				</div><!--post-item-->

				<div class="col-md-6">
					<div class="post-content mb-5">
						<div class="meta-tags text-uppercase text-gray d-flex gap-3 fs-6 mb-3 align-items-center">
							<span class="meta-date">Jan.30.2020</span>
							<span>ᐧ</span>
							<span class="meta-category"><a href="#">Portraits</a></span>
						</div>
						<h3 class="post-title mb-3"><a href="single-blog.html">How To Get Model Look Portraits</a></h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
							has been the industry's standard dummy text ever.</p>
					</div>
				</div><!--post-item-->

			</div><!--post-content-->

			<div class="btn-left">
				<a href="#" class="btn btn-dark px-5 py-3">View All Blog</a>
			</div>

		</div>
	</section>

	<section id="contact" class="contact-detail my-5 bg-secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-6 detail-content">
					<div class="text-content mt-5 pt-5">

						<div class="section-header">
							<h2 class="section-title">Contact Me</h2>
						</div><!--section-header-->

						<p>I would love to get suggestions from you.</p>

						<form id="form" class="form-group">
							<div class="text-input row">
								<div class="col-md-6 mb-3">
									<input type="text" name="name" class="form-control bg-transparent border-0 border-bottom" placeholder="Your name">
								</div>
								<div class="col-md-6 mb-3">
									<input type="text" name="E-mail" class="form-control bg-transparent border-0 border-bottom" placeholder="Your E-mail Address">
								</div>
								<div class="col-md-12 mb-3">
									<textarea placeholder="Your Message" class="form-control bg-transparent border-0 border-bottom" placeholder="Message" rows="6"></textarea>
								</div>
							</div><!--text-input-->
						</form>

						<div class="btn-left">
							<a href="#" class="btn btn-dark px-5 py-3">Send It</a>
						</div>

					</div><!--text-content-->
				</div>
				<div class="col-md-6">
					<figure class="contact-image">
						<img src="images/contactimg.png" alt="contact">
					</figure>
				</div>

			</div>
		</div>
	</section>

	<footer id="footer" class="mt-5 pt-5">
		<div class="container">

			<div class="row">

				<div class="footer-menu col-md-4">
					<h3 class="widget-title">Get In Touch</h3>
					<ul class="list-unstyled">
						<li><a href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a></li>
						<li>(355)-202-234-0457</li>
					</ul>
				</div>

				<div class="footer-menu col-md-4">
					<h3 class="widget-title">where’s my office?</h3>
					<ul class="list-unstyled" id="footer-menu">
						<li>2489 Locust Court, Los Angeles</li>
						<li>3927 Red Maple Drive, Los Angeles</li>
					</ul>
				</div>

				<div class="footer-menu social-links col-md-4">
					<h3 class="widget-title">My social links</h3>
					<ul class="list-unstyled d-flex gap-3">
						<li><a href="#"><i class="icon icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon icon-instagram"></i></a></li>
					</ul>
				</div>

			</div><!--footer-content-->
		</div>
	</footer>

	<div class="footer-bottom py-5 mt-5 border-top">
		<div class="container">
			<div class="copyright">
				<p>© 2023 Alena Miller. HTML Template by <a href="http://www.templatesjungle.com/">TemplatesJungle</a></p>
			</div>
		</div>
	</div>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

</html>