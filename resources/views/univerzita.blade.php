@include('includes.head', ['title' => 'O univerzite'])
<body>
<div class="responsive_menu">
    <ul class="main_menu">
        <li><a href="{{ url('/')}}">Domov</a></li>
        <li><a href="{{ url('/vyzvy')}}">Výzvy</a>
        </li>
        <li><a href="#">Informácie</a>
            <ul>
                <li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
                <li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
                <li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
            </ul>
        </li>
        <li><a href="{{ url('/spravy')}}">Správy</a></li>
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
                            <li><a href="{{ url('/vyzvy')}}">Výzvy</a>
                            </li>
                            <li><a href="#">Informácie</a>
                                <ul>
                                    <li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
                                    <li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
                                    <li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/spravy')}}">Správy</a></li>
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
                    <h2 class="page-title">{{$univerzita->nazov}}</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Home / Univerzita </span>
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
                                <img src="{{$univerzita->foto}}" alt="{{$univerzita->nazov}}">
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <span class="meta-date">{{$univerzita->nazov}}</span>
                                <span class="meta-comments">{{$univerzita->krajiny->krajina}}</span>
                                <span class="meta-author">{{$univerzita->mesto}}</span>
                            </div> <!-- /.blog-content -->
                            <div class="blog-content">
                                <h2>O univerzite</h2>
                                <p>{{$univerzita->detail}}</p>
                                <h3>Zmluva z univerzitou:</h3>
                                <p>S touto univerzitou má naša univerzita zmluvu od roku {{$univerzita->zmluvaod}} do roku {{$univerzita->zmluvado}}.</p>
                                <h3>Web stránka univerzity:</h3>
                                <p><a href="{{$univerzita->web}}">{{$univerzita->web}}</a></p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

@include('includes.foot')

<!-- Scripts -->
<script src="http://localhost/web_project/public/js/min/plugins.min.js"></script>
<script src="http://localhost/web_project/public/js/min/medigo-custom.min.js"></script>

</body>
</html>