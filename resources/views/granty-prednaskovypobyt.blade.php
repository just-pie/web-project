<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>UKF Mobility Prednáškový pobyt</title>
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
        <li class="active"><a href="{{ url('/granty')}}">Granty</a>
            <ul>
                <li><a href="{{ url('/granty-studijnypobyt')}}">Študijné pobyty</a></li>
                <li><a href="{{ url('/granty-staz')}}">Stáže</a></li>
                <li><a href="{{ url('/granty-prednaskovypobyt')}}">Prednáškové pobyty</a></li>
                <li><a href="{{ url('/granty-skolenie')}}">Školenia</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/blog')}}">Blog</a>
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
                            <li><a href="{{url('/')}}">Domov</a></li>
                            <li class="active"><a href="{{ url('/granty')}}">Granty</a>
                                <ul>
                                    <li><a href="{{ url('/granty-studijnypobyt')}}">Študijné pobyty</a></li>
                                    <li><a href="{{ url('/granty-staz')}}">Stáže</a></li>
                                    <li><a href="{{ url('/granty-prednaskovypobyt')}}">Prednáškové pobyty</a></li>
                                    <li><a href="{{ url('/granty-skolenie')}}">Školenia</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/blog')}}">Blog</a>
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

<div class="first-widget parallax" id="portfolioId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Project Slideshow</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Home / Project Slideshow</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row project-single">
        <div class="col-md-8">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="images/includes/projectimage2.jpg" alt="Slide 1"></li>
                    <li><img src="images/includes/projectimage3.jpg" alt="Slide 2"></li>
                    <li><img src="images/includes/projectimage4.jpg" alt="Slide 3"></li>
                </ul>
            </div>

        </div> <!-- /.col-md-8 -->
        <div class="col-md-4">
            <div class="project-info">
                <span class="subtitle">Subtitle Goes here</span>
                <h3 class="project-title">Project Slideshow Post Format</h3>
                <p class="description">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.<br><br>Nam convallis neque nec magna malesuada dictum. Aliquam commodo erat non tellus porta imperdiet sit amet eu lacus.</p>
                <ul class="meta-post">
                    <li><span>Date:</span>February 2084</li>
                    <li><span>Skills:</span>Branding, Illustration</li>
                    <li><span>URL:</span><a href="#">www.company.com</a></li>
                </ul>
            </div> <!-- /.project-info -->
        </div> <!-- /.col-md-4 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<div class="static-info-project">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <p class="larger-text">Interested about hiring us ? Go ahead and talk with us on the <a href="kontakt.blade.php">contact page</a>. We'll be pleased to answer you within a few hours.</p>
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.static-info-project -->

<div class="related-projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2 class="section-title">Related Projects</h2>
                    <p class="section-desc">These are some projects that you may be interested to see.</p>
                </div> <!-- /.section-header -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    <div class="container">
        <div class="row">
            <div class="portfolio-holder">
                <div class="portfolio-post col-sm-6 col-md-4">
                    <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Branding / Identity</span>
                                    <h3 class="portfolio-title"><a href="granty-studijnypobyt.blade.php">Gloss Template</a></h3>
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

                <div class="portfolio-post col-sm-6 col-md-4">
                    <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Identity / Illustration</span>
                                    <h3 class="portfolio-title"><a href="granty-studijnypobyt.blade.php">Ion Template</a></h3>
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

                <div class="portfolio-post col-sm-6 col-md-4">
                    <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">Branding</span>
                                    <h3 class="portfolio-title"><a href="granty-studijnypobyt.blade.php">Freshness</a></h3>
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
</div> <!-- /.related-projects -->

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="footer-nav clearfix">
                    <ul class="footer-menu">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{ url('/granty')}}">Granty</a></li>
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

