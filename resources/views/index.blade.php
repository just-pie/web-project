<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Mobility UKF</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="Matus Orlicek">
    <!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->
    
	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/blue-scheme.css">
	
	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="images/favicon2.ico" type="image/x-icon" />

</head>
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li class="active"><a href="{{ url('/')}}">Domov</a></li>
			<li><a href="{{ url('/granty')}}">Granty</a>
				<ul>
					<li><a href="{{ url('/granty-studijnypobyt')}}">Študijné pobyty</a></li>
					<li><a href="{{ url('/granty-staz')}}">Stáže</a></li>
					<li><a href="{{ url('/granty-prednaskovypobyt')}}">Prednáškové pobyty</a></li>
					<li><a href="{{ url('/granty-skolenie')}}">Školenia</a></li>
				</ul>
			</li>
            <li><a href="{{ url('/blog')}}">Informácie</a>
				<ul>
					<li><a href="{{ url('/blog')}}">Blog Standard</a></li>
					<li><a href="{{ url('/blog-single')}}">Blog Single</a></li>
                    <li><a href="#">visit templatemo</a></li>
				</ul>
            </li>
            <li><a href="{{ url('/archives')}}">Archives</a></li>
            <li><a href="{{ url('/kontakt')}}">Kontakt</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="{{url('/')}}">
							<img src="images/logo.png" alt="UKF_logo">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li class="active"><a href="{{ url('/')}}">Domov</a></li>
								<li><a href="{{ url('/granty')}}">Granty</a>
									<ul>
										<li><a href="{{ url('/granty-studijnypobyt')}}">Študijné pobyty</a></li>
										<li><a href="{{ url('/granty-staz')}}">Stáže</a></li>
										<li><a href="{{ url('/granty-prednaskovypobyt')}}">Prednáškové pobyty</a></li>
										<li><a href="{{ url('/granty-skolenie')}}">Školenia</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/blog')}}">Informácie</a>
									<ul>
										<li><a href="{{ url('/blog')}}">Blog Standard</a></li>
										<li><a href="{{ url('/blog-single')}}">Blog Single</a></li>
										<li><a href="#">visit templatemo</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/archives')}}">Archives</a></li>
								<li><a href="{{ url('/kontakt')}}">Kontakt</a></li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	<section id="homeIntro" class="parallax first-widget">
	    <div class="parallax-overlay">
		    <div class="container home-intro-content">
		        <div class="row">
		        	<div class="col-md-12">
		        		<h2>VITAJTE NA STRÁNKE MOBILITY UKF</h2>
		        		<p>Na tejto stránke sa dozviete všetko o možnostiach mobilít<br> na Univerzite Konštantína Filozofa v Nitre </p>
		        		<a href="#" class="large-button white-color">Prihlásenie <i class="icon-button fa fa-bars"></i></a>
		        	</div> <!-- /.col-md-12 -->
		        </div> <!-- /.row -->
		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#homeIntro -->

	<section class="light-content services">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-umbrella fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Easy Theme Colors</h3>
							<p>There are 4 color themes (blue, green, red, orange) and this one is blue.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-mobile-phone fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Change Icons</h3>
							<p>Check <a rel="nofollow" href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a> for your suitable icons. Example: &lt;i class=&quot;fa fa-download&quot;&gt;&lt;/i&gt;</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-pencil-square-o fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Pixel Perfect Design</h3>
							<p>Based on a 12 column grid system, with every pixel snapped.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

			</div>

			<div class="row">
				
				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-code fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Valid HTML5</h3>
							<p>We offer validated html files and well commented code on our themes.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-eye-slash fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Retina Ready</h3>
							<p>Incredibly clean design provides you powerful way to grow your business.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-suitcase fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Special Thanks</h3>
							<p>Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_blank">Unsplash</a> for images used in this template.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.services -->

	<section class="dark-content portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title">VYBRANÉ MOBILITY</h2>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		
		<div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Dashboard Template</span>
								<h3 class="portfolio-title"><a href="{{ url('/granty')}}">Nemecko</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/projekt1.jpg" title="University Passau">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/projekt1.jpg" alt="University Passau">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Mobile Ready</span>
								<h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Compass Template</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project2.jpg" title="Compass Template">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project2.jpg" alt="Compass Template">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Responsive Design</span>
								<h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Awesome Theme</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project3.jpg" title="Awesome Theme">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project3.jpg" alt="Awesome Theme">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Portfolio</span>
								<h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Volton Personal Site</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project4.jpg" title="Volton Personal Site">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project4.jpg" alt="Volton Personal Site">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Green</span>
								<h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Rectangle Design</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project5.jpg" title="Rectangle Design">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project5.jpg" alt="Rectangle Design">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Portfolio</span>
								<h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Masonry Gallery</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project6.jpg" title="Masonry Gallery">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project6.jpg" alt="Masonry Gallery">
				</div>
			</div> <!-- /.item -->
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">Branding / Identity</span>
								<h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Gloss Template</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="images/includes/project7.jpg" title="Gloss Template">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project7.jpg" alt="Gloss Template">
				</div>
			</div> <!-- /.item -->
		</div> <!-- /#owl-demo -->
	</section> <!-- /.portfolio-holder -->

	<section class="testimonials-widget">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bxslider">
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">Andy Colin - Architect</span>
								<p class="testimonial-description">Thank you for all your good work in creating theme. They have a ‘presence’ which feels right.</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">Thomas Teddy - Design Writer</span>
								<p class="testimonial-description">I love the logo. Particularly how the mark can stand on its own. Nice work! It feels tall and proud and powerful — and I love that. That’s what I was after.</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">John Willy - Developer</span>
								<p class="testimonial-description">You’re pretty awesome to work with. Incredibly organized, easy to communicate with, responsive with next iterations, and beautiful work.</p>
							</div>
						</div>
					</div> <!-- /.bxslider -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.testimonials-widget -->
	
	<section id="blogPosts" class="parallax">
	    <div class="parallax-overlay">
		    <div class="container">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="section-header">
							<h2 class="section-title">Nedávno pridané výzvy</h2>
							<p class="section-desc">Pozrite si najnovšie možnosti kam vyraziť.</p>
						</div> <!-- /.section-header -->
		        	</div> <!-- /.col-md-12 -->
		        </div> <!-- /.row -->
		        <div class="row latest-posts">
		        	<div class="col-md-4 col-sm-6">
		        		<div class="blog-post clearfix">
		        			<div class="thumb-post">
		        				<a href="{{ url('/blog-single')}}"><img src="images/includes/blogthumb1.jpg" alt="" class="img-circle"></a>
		        			</div>
		        			<div class="blog-post-content">
		        				<h4 class="post-title"><a href="{{ url('/blog-single')}}">Getting Creative With the Google Maps API</a></h4>
		        				<span class="meta-post-date">12 February 2084</span>
		        			</div>
		        		</div> <!-- /.blog-post -->
		        	</div> <!-- /.col-md-4 -->
		        	<div class="col-md-4 col-sm-6">
		        		<div class="blog-post clearfix">
		        			<div class="thumb-post">
		        				<a href="{{ url('/blog-single')}}"><img src="images/includes/blogthumb2.jpg" alt="" class="img-circle"></a>
		        			</div>
		        			<div class="blog-post-content">
		        				<h4 class="post-title"><a href="{{ url('/blog-single')}}">Design Deliverables – easily share project</a></h4>
		        				<span class="meta-post-date">10 February 2084</span>
		        			</div>
		        		</div> <!-- /.blog-post -->
		        	</div> <!-- /.col-md-4 -->
		        	<div class="col-md-4 col-sm-6">
		        		<div class="blog-post clearfix">
		        			<div class="thumb-post">
		        				<a href="{{ url('/blog-single')}}"><img src="images/includes/blogthumb3.jpg" alt="" class="img-circle"></a>
		        			</div>
		        			<div class="blog-post-content">
		        				<h4 class="post-title"><a href="{{ url('/blog-single')}}">Using Templates to Get Your Clients Thinking</a></h4>
		        				<span class="meta-post-date">8 February 2084</span>
		        			</div>
		        		</div> <!-- /.blog-post -->
		        	</div> <!-- /.col-md-4 -->
		        </div> <!-- /.row -->
		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#blogPosts -->

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li><a href="{{url('/')}}">Domov</a></li>
							<li><a href="{{ url('/granty')}}">Granty</a></li>
							<li><a href="{{ url('/blog')}}">Informácie</a></li>
							<li><a href="{{ url('/archives')}}">Shortcodes</a></li>
							<li><a href="{{ url('/kontakt')}}">Kontakt</a></li>
						</ul> <!-- /.footer-menu -->
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text">Copyright &copy; 2019 UKF
                    | Tímový projekt: TP04</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>

</body>
</html>