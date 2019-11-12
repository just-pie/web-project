<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Medigo Blue, free responsive template</title>
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
			<li><a href="{{ url('/')}}">Domov</a></li>
			<li><a href="{{ url('/vyzvy')}}">Výzvy</a>
			</li>
			<li><a href="{{ url('/blog')}}">Blog</a>
				<ul>
					<li><a href="{{ url('/blog')}}">Blog Standard</a></li>
					<li><a href="{{ url('/blog-single')}}">Blog Single</a></li>
					<li><a href="#">visit templatemo</a></li>
				</ul>
			</li>
			<li><a href="{{ url('/archives')}}">Archives</a></li>
			<li><a href="{{ url('/kontakt')}}">Kontakt</a>
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
								<li class="active"><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{ url('/vyzvy')}}">Výzvy</a>
								</li>
								<li><a href="{{ url('/blog')}}">Blog</a>
									<ul>
										<li><a href="{{ url('/blog')}}">Blog Standard</a></li>
										<li><a href="{{ url('/blog-single')}}">Blog Single</a></li>
										<li><a href="#">visit templatemo</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/archives')}}">Archives</a></li>
								<li><a href="{{ url('/kontakt')}}">Kontakt</a>
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

	<div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Archives</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Archives</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">

			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="archive-wrapper">
							<p>Feel free to download templates from templatemo.com website. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, excepturi ullam officia debitis blanditiis eos omnis asperiores eaque mollitia consequatur in aspernatur delectus ab accusantium itaque dolores alias provident veritatis repellendus culpa nemo vel accusamus!</p>
							<h3 class="archive-title">Latest 10 Posts</h3>
							<ul class="archive-list">
                                <li><a href="blog-single.blade.php">Aenean eleifend est a ligula dictum, a dapibus est mollis.</a></li>
                                <li><a href="blog-single.blade.php">Proin ut sem ut lectus fringilla varius.</a></li>
                                <li><a href="blog-single.blade.php">Nulla sit amet mi ac neque lobortis consectetur.</a></li>
                                <li><a href="blog-single.blade.php">Sed hendrerit erat eget volutpat feugiat.</a></li>
                                <li><a href="blog-single.blade.php">Aenean eu mauris quis magna pretium dictum a a metus.</a></li>
                                <li><a href="blog-single.blade.php">Nunc posuere felis sit amet lectus cursus feugiat.</a></li>
                                <li><a href="blog-single.blade.php">Maecenas ultricies augue pellentesque justo lacinia pulvinar.</a></li>
                                <li><a href="blog-single.blade.php">Phasellus ac odio fermentum, feugiat nunc et, porttitor sapien.</a></li>
                                <li><a href="blog-single.blade.php">Suspendisse a nisl nec nisl sagittis dictum.</a></li>
                                <li><a href="blog-single.blade.php">Morbi aliquet purus vitae dolor commodo dictum.</a></li>
                            </ul>
                            <h3 class="archive-title">Archives by Month:</h3>
                            <ul class="archive-list">
                                <li><a href="#">January 2084</a></li>
                                <li><a href="#">December 2083</a></li>
                                <li><a href="#">November 2083</a></li>
                                <li><a href="#">October 2083</a></li>
                                <li><a href="#">September 2083</a></li>
                                <li><a href="#">August 2083</a></li>
                                <li><a href="#">July 2083</a></li>
                            </ul>
                            <h3 class="archive-title">Archives by Categories:</h3>
                            <ul class="archive-list">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Famliy</a></li>
                                <li><a href="#">Government</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Student Achievements</a></li>
                                <li><a href="#">Tech &amp; Engineering</a></li>
                            </ul>
						</div>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h5 class="widget-title">Recent Posts</h5>
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb1.jpg" alt=""></a>
							</div>
							<div class="content">
								<span>24 February 2084</span>
								<h4><a href="#">Standard Post Formating Medigo</a></h4>
							</div>
						</div> <!-- /.last-post -->
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb2.jpg" alt=""></a>
							</div>
							<div class="content">
								<span>24 February 2084</span>
								<h4><a href="#">Standard Post Formating Medigo</a></h4>
							</div>
						</div> <!-- /.last-post -->
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb3.jpg" alt=""></a>
							</div>
							<div class="content">
								<span>24 February 2084</span>
								<h4><a href="#">Standard Post Formating Medigo</a></h4>
							</div>
						</div> <!-- /.last-post -->
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Categories</h5>
						<div class="row categories">
							<div class="col-md-6">
								<ul>
									<li><a href="#">Standard</a></li>
									<li><a href="#">Audio</a></li>
									<li><a href="#">Video</a></li>
									<li><a href="#">Branding</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<li><a href="#">iOS Design</a></li>
									<li><a href="#">Business</a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Flickr Feed</h5>
						<ul id="flickr-feed" class="thumbs"></ul>
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Text Widget</h5>
						<p class="light-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient… </p>
					</div> <!-- /.sidebar-widget -->
				</div> <!-- /.sidebar -->
			</div> <!-- /.col-md-4 -->

		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	

	<div class="container">
		
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