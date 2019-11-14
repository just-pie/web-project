@include('includes.head', ['title' => 'Výzvy'])
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
                        <img src="images/logo.png" alt="UKF_logo">
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
            @foreach($vyzvy as $vyzva)
                    <div class="portfolio-post col-sm-6 col-md-4 mix studijne">
                            <div class="thumb-post">
                                <div class="overlay-inner"><img src="{{$vyzva->univerzity->first()->foto}}" alt="Visual Admin">
                                    <div class="portfolio-infos">
                                        <h3 style="color: white">{{$vyzva->nazov}}</h3>
                                    </div>

                                </div>
                                <div class="overlay">
                                    <div class="overlay-inner">
                                        <div class="portfolio-infos">
                                            <span class="meta-category">{{$vyzva->nazov}}</span>
                                            <h3 class="portfolio-title">{{$vyzva->univerzity->first()->nazov}}</h3>
                                        </div>
                                        <div class="portfolio-expand">
                                            <a class="fancybox" href="{{action("VyzvyController@showVyzva", ['id' => $vyzva->idvyzvy])}}" title="Bližšie informácie">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div> <!-- /.col-md-4 -->
                @endforeach
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

@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>


</body>
</html>
