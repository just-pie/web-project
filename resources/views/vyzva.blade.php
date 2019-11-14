@include('includes.head', ['title' => 'Výzva'])
<body>


<div class="responsive_menu">
    <ul class="main_menu">
        <li><a href="{{ url('/')}}">Domov</a></li>
        <li class="active"><a href="{{ url('/vyzvy')}}">Výzvy</a>
        </li>
        <li><a href="{{ url('/info')}}">Informácie</a>
            <ul>
                <li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
                <li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
                <li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
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
                        <img src="{{ asset('images/logo.png') }}" alt="UKF_logo">
                    </a>
                </div>	<!-- /.logo -->

                <div class="main-navigation pull-right">

                    <nav class="main-nav visible-md visible-lg">
                        <ul class="sf-menu">
                            <li><a href="{{ url('/')}}">Domov</a></li>
                            <li class="active"><a href="{{ url('/vyzvy')}}">Výzvy</a>
                            </li>
                            <li><a href="{{ url('/info')}}">Informácie</a>
                                <ul>
                                    <li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
                                    <li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
                                    <li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
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
                    <h2 class="page-title">{{$vyzva->nazov}}</h2>
                    <h3 style="color: white">@foreach($vyzva->univerzity as $univerzity)
                            {{$univerzity->nazov}}
                            {{$univerzity->pivot->text}}
                        @endforeach</h3>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Home / Výzvy / Výzva </span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">

        <div class=" blog-posts">
            <div class="row">
                <div class="col-md-12">
                    <div class="post-blog">
                        <div class="blog-image">
                            <a href="info/infopocas.blade.php">
                                <img src="{{asset('images/includes/projekt1.jpg')}}" alt="">
                            </a>
                        </div> <!-- /.blog-image -->
                        <div class="blog-content">
                            <h3></h3>
                            <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                            <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor <a href="info/infopocas.blade.php">Continue Reading...</a></p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                    <div class="post-blog">
                        <div class="blog-image">
                            <a href="info/infopocas.blade.php">
                                <img src="{{asset('images/includes/blog2.jpg')}}" alt="">
                            </a>
                        </div> <!-- /.blog-image -->
                        <div class="blog-content">
                            <span class="meta-date"><a href="#">24 February 2084</a></span>
                            <span class="meta-comments"><a href="#">32 Comments</a></span>
                            <span class="meta-author"><a href="#">Candy Sharp</a></span>
                            <h3><a href="info/infopocas.blade.php">Bird Profile Wellington New Zealand</a></h3>
                            <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                            <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor <a href="info/infopocas.blade.php">Continue Reading...</a></p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                    <div class="post-blog">
                        <div class="blog-image">
                            <a href="info/infopocas.blade.php">
                                <img src="{{asset('images/includes/blog3.jpg')}}" alt="">
                            </a>
                        </div> <!-- /.blog-image -->
                        <div class="blog-content">
                            <span class="meta-date"><a href="#">20 February 2084</a></span>
                            <span class="meta-comments"><a href="#">64 Comments</a></span>
                            <span class="meta-author"><a href="#">Candy Sharp</a></span>
                            <h3><a href="info/infopocas.blade.php">Standard Blog Post Formating Medigo</a></h3>
                            <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                            <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor <a href="info/infopocas.blade.php">Continue Reading...</a></p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                    <div class="post-blog">
                        <div class="blog-image">
                            <a href="info/infopocas.blade.php">
                                <img src="{{asset('images/includes/blog4.jpg')}}" alt="">
                            </a>
                        </div> <!-- /.blog-image -->
                        <div class="blog-content">
                            <span class="meta-date"><a href="#">24 February 2084</a></span>
                            <span class="meta-comments"><a href="#">128 Comments</a></span>
                            <span class="meta-author"><a href="#">Candy Sharp</a></span>
                            <h3><a href="info/infopocas.blade.php">Hochbunker High Definition Photography</a></h3>
                            <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                            <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor <a href="info/infopocas.blade.php">Continue Reading...</a></p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                </div> <!-- /.col-md-12 -->
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
        </div> <!-- /.col-md-8 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>


</body>
</html>