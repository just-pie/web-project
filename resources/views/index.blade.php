@include('includes.head', ['title' => 'Mobility UKF'])
<body>

@include('includes.nav')

<section id="homeIntro" class="parallax first-widget">
    <div class="parallax-overlay">
        <div class="container home-intro-content">
            <div class="row">
                <div class="col-md-12">
                    <h2>VITAJTE NA STRÁNKE MOBILITY UKF</h2>
                    <p>Na tejto stránke sa dozviete všetko o možnostiach mobilít<br> na Univerzite Konštantína Filozofa
                        v Nitre </p>
                    @if(isset(Auth::user()->email))
                        <div class="alert alert-danger success-block">
                            <strong>Welcome {{ Auth::user()->email }}</strong>
                            <br />
                            <a href="{{ url('/main/logout') }}">Logout</a>
                        </div>
                    @else
                        <a href="{{ route("login") }}" class="large-button white-color">Prihlásenie <i
                                    class="icon-button fa fa-bars"></i></a>
                    @endif
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
                        <i class="fa fa-globe fa-2x"></i>
                    </div> <!-- /.service-icon-wrap -->
                    <div class="service-cnt-wrap">
                        <h3 class="service-title">Erasmus+</h3>
                        <p>Program Európskej Únie, ktorý podporuje aktivity v oblasti vzdelávania, odbornej prípravy,
                            mládeže a športu</p>
                    </div> <!-- /.service-cnt-wrap -->
                </div> <!-- /.service-box-wrap -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <div class="service-box-wrap">
                    <div class="service-icon-wrap">
                        <i class="fa fa-forward fa-2x"></i>
                    </div> <!-- /.service-icon-wrap -->
                    <div class="service-cnt-wrap">
                        <h3 class="service-title">Nahrádza programy</h3>
                        <p>Erasmus, Leonardo da Vinci, Comenius a Grundtvig, Erasmus Mundus, Tempus, Alfa, Edulink a
                            bilaterálne programy a pribudol Šport ako nová aktivita v rámci programu</p>
                    </div> <!-- /.service-cnt-wrap -->
                </div> <!-- /.service-box-wrap -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <div class="service-box-wrap">
                    <div class="service-icon-wrap">
                        <i class="fa fa-file-o fa-2x"></i>
                    </div> <!-- /.service-icon-wrap -->
                    <div class="service-cnt-wrap">
                        <h3 class="service-title">Poskytuje granty</h3>
                        <p>Erasmus+ poskytuje granty pre široké spektrum akcií a aktivít v oblasti v oblasti
                            vzdelávania, odbornej prípravy, mládeže a športu.</p>
                    </div> <!-- /.service-cnt-wrap -->
                </div> <!-- /.service-box-wrap -->
            </div> <!-- /.col-md-4 -->

        </div>

        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="service-box-wrap">
                    <div class="service-icon-wrap">
                        <i class="fa fa-exchange fa-2x"></i>
                    </div> <!-- /.service-icon-wrap -->
                    <div class="service-cnt-wrap">
                        <h3 class="service-title">Dáva príležitosť</h3>
                        <p>Program Erasmus+ dáva príležitosť študentom, žiakom odbornej prípravy, pedagogickým
                            zamestnancom, pracovníkom s mládežou a dobrovoľníkom stráviť obdobie v zahraničí a zlepšiť
                            tak svoje poznatky, zručnosti a zamestnateľnosť.</p>
                    </div> <!-- /.service-cnt-wrap -->
                </div> <!-- /.service-box-wrap -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <div class="service-box-wrap">
                    <div class="service-icon-wrap">
                        <i class="fa fa-folder-open fa-2x"></i>
                    </div> <!-- /.service-icon-wrap -->
                    <div class="service-cnt-wrap">
                        <h3 class="service-title">Je otvorený</h3>
                        <p>Erasmus+ je otvorený širokému spektru organizácií vo všetkých odvetviach sektoroch
                            vzdelávania, odbornej prípravy, mládeže a športu. Akékoľvek slovenské verejné, súkromné
                            alebo neziskové organizácie, aktívne zapojené v týchto oblastiach, môžu požiadať o finančné
                            prostriedky z programu za podmienok zverejnených v príslušnej výzve.</p>
                    </div> <!-- /.service-cnt-wrap -->
                </div> <!-- /.service-box-wrap -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <div class="service-box-wrap">
                    <div class="service-icon-wrap">
                        <i class="fa fa-building-o fa-2x"></i>
                    </div> <!-- /.service-icon-wrap -->
                    <div class="service-cnt-wrap">
                        <h3 class="service-title">Akcie sú centralizované a decentralizované</h3>
                        <p>Decentralizované akcie sú riadené Národnými agentúrami v každej účastníckej krajine programu.
                            Centralizované akcie sú riadené Výkonnou agentúrou pre vzdelávanie, audiovizuálny sektor a
                            kultúru so sídlom v Bruseli (EACEA).</p>
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
                            <h3 class="portfolio-title"><a href="{{ url('/vyzvy')}}">Nemecko</a></h3>
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
                            <h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Compass Template</a>
                            </h3>
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
                            <h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Volton Personal
                                    Site</a></h3>
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
                            <h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Rectangle Design</a>
                            </h3>
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
                            <h3 class="portfolio-title"><a href="{{ url('/project-slideshow')}}">Masonry Gallery</a>
                            </h3>
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
                            <p class="testimonial-description">Thank you for all your good work in creating theme. They
                                have a ‘presence’ which feels right.</p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <span class="testimonial-author">Thomas Teddy - Design Writer</span>
                            <p class="testimonial-description">I love the logo. Particularly how the mark can stand on
                                its own. Nice work! It feels tall and proud and powerful — and I love that. That’s what
                                I was after.</p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <span class="testimonial-author">John Willy - Developer</span>
                            <p class="testimonial-description">You’re pretty awesome to work with. Incredibly organized,
                                easy to communicate with, responsive with next iterations, and beautiful work.</p>
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
                            <a href="{{ url('/blog-single')}}"><img src="images/includes/blogthumb1.jpg" alt=""
                                                                    class="img-circle"></a>
                        </div>
                        <div class="blog-post-content">
                            <h4 class="post-title"><a href="{{ url('/blog-single')}}">Getting Creative With the Google
                                    Maps API</a></h4>
                            <span class="meta-post-date">12 February 2084</span>
                        </div>
                    </div> <!-- /.blog-post -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post clearfix">
                        <div class="thumb-post">
                            <a href="{{ url('/blog-single')}}"><img src="images/includes/blogthumb2.jpg" alt=""
                                                                    class="img-circle"></a>
                        </div>
                        <div class="blog-post-content">
                            <h4 class="post-title"><a href="{{ url('/blog-single')}}">Design Deliverables – easily share
                                    project</a></h4>
                            <span class="meta-post-date">10 February 2084</span>
                        </div>
                    </div> <!-- /.blog-post -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post clearfix">
                        <div class="thumb-post">
                            <a href="{{ url('/blog-single')}}"><img src="images/includes/blogthumb3.jpg" alt=""
                                                                    class="img-circle"></a>
                        </div>
                        <div class="blog-post-content">
                            <h4 class="post-title"><a href="{{ url('/blog-single')}}">Using Templates to Get Your
                                    Clients Thinking</a></h4>
                            <span class="meta-post-date">8 February 2084</span>
                        </div>
                    </div> <!-- /.blog-post -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</section> <!-- /#blogPosts -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".domov").addClass("active");
    });
</script>
<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
@include('includes.foot')
</body>
</html>