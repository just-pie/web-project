<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Výzvy</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
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
            <li><a href="{{ url('/')}}">Home</a></li>
            <li class="active"><a href="{{ url('/vyzvy')}}">Výzvy</a>
            </li>
            <li><a href="{{ url('/blog')}}">Informácie</a>
                <ul>
                    <li><a href="{{ url('/blog')}}">Blog Standard</a></li>
                    <li><a href="{{ url('/blog-single')}}">Blog Single</a></li>
                    <li><a href="#">visit templatemo</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/archives')}}">Recenzie</a></li>
            <li class="active"><a href="{{ url('/kontakt')}}">Kontakt</a>
                <ul>
                    <li><a href="{{ url('/kontaktfpv')}}">FPV</a></li>
                    <li><a href="{{ url('/kontaktfsvaz')}}">FSVaZ</a></li>
                    <li><a href="{{ url('/kontaktfss')}}">FSS</a></li>
                    <li><a href="{{ url('/kontaktff')}}">FF</a></li>
                    <li><a href="{{ url('/kontaktpf')}}">PF</a></li>
                </ul>
            </li>
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
                                <li><a href="{{url('/')}}">Domov</a></li>
                                <li class="active"><a href="{{ url('/vyzvy')}}">Výzvy</a>
                                </li>
                                <li><a href="{{ url('/blog')}}">Blog</a>
                                    <ul>
                                        <li><a href="{{ url('/blog')}}">Blog Standard</a></li>
                                        <li><a href="{{ url('/blog-single')}}">Blog Single</a></li>
                                        <li><a href="#">visit templatemo</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/archives')}}">Archives</a></li>
                                <li class="active"><a href="{{ url('/kontakt')}}">Kontakt</a>
                                    <ul>
                                        <li><a href="{{ url('/kontaktfpv')}}">FPV</a></li>
                                        <li><a href="{{ url('/kontaktfsvaz')}}">FSVaZ</a></li>
                                        <li><a href="{{ url('/kontaktfss')}}">FSS</a></li>
                                        <li><a href="{{ url('/kontaktff')}}">FF</a></li>
                                        <li><a href="{{ url('/kontaktpf')}}">PF</a></li>
                                    </ul>
                                </li>
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

	<div class="first-widget parallax" id="portfolio">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Naše výzvy</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Domov / Výzvy</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<ul id="filters" class="mixitup-controls">
					<li class="filter" data-filter="all">Všetko</li>
					<li class="filter" data-filter="studijne">Študijné pobyty</li>
					<li class="filter" data-filter="staze">Stáže</li>
					<li class="filter" data-filter="prednaskove">Prednáškové pobyty</li>
					<li class="filter" data-filter="skolenia">Školenia</li>
				</ul>
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	<div class="container">
		<div class="row">
			<div class="portfolio-holder" id="Grid">
				<div class="portfolio-post col-sm-6 col-md-4 mix studijne">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Nemecko</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">University Passau</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/projekt1.jpg" title="University Passau">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/includes/projekt1.jpg" alt="Visual Admin">
					</div>
				</div> <!-- /.col-md-4 -->

				<div class="portfolio-post col-sm-6 col-md-4 mix studijne">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Branding</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">Compass Template</a></h3>
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
				</div> <!-- /.col-md-4 -->

				<div class="portfolio-post col-sm-6 col-md-4 mix staze">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Illustration</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">Awesome Theme</a></h3>
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
				</div> <!-- /.col-md-4 -->

				<div class="portfolio-post col-sm-6 col-md-4 mix staze">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Illustration</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">Volton Personal Site</a></h3>
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
				</div> <!-- /.col-md-4 -->

				<div class="portfolio-post col-sm-6 col-md-4 mix skolenia">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Business</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">Rectangle Design</a></h3>
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
				</div> <!-- /.col-md-4 -->

				<div class="portfolio-post col-sm-6 col-md-4 mix prednaskove">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Branding</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">Masonry Gallery</a></h3>
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
				</div> <!-- /.col-md-4 -->

				<div class="portfolio-post col-sm-6 col-md-4 mix prednaskove">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Branding / Identity</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">Gloss Template</a></h3>
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
				</div> <!-- /.col-md-4 -->

				<div class="portfolio-post col-sm-6 col-md-4 mix staze">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Identity / Illustration</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">Ion Template</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/project8.jpg" title="Ion Template">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/includes/project8.jpg" alt="Ion Template">
					</div>
				</div> <!-- /.col-md-4 -->

				<div class="portfolio-post col-sm-6 col-md-4 mix skolenia">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Branding</span>
                                    <h3 class="portfolio-title"><a href="vyzvy.blade.php">Freshness</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/project9.jpg" title="Freshness">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="images/includes/project9.jpg" alt="Freshness">
					</div>
				</div> <!-- /.col-md-4 -->
				
			</div> <!-- /.portfolio-holder -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="pages">
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#">13</a></li>
				</ul>
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li><a href="{{url('/')}}">Domov</a></li>
							<li><a href="{{ url('/vyzvy')}}">Výzvy</a></li>
							<li><a href="{{ url('/blog')}}">Blog Posts</a></li>
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
