<div class="responsive_menu">
    <ul class="main_menu">
        <li class="domov"><a href="{{ url('/')}}" >Domov</a></li>
        <li class="vyzvy"><a href="{{ url('/vyzvy')}}">Výzvy</a>
        </li>
        <li class="info"><a>Informácie</a>
            <ul>
                <li class="infopred"><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
                <li class="infopocas"><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
                <li class="infopo"><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
            </ul>
        </li>
        <li class="archives"><a href="{{ url('/archives')}}">Archives</a></li>
        <li class="kontakt"><a href="{{ url('/kontakt')}}">Kontakt</a>
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
                            <li class="domov"><a href="{{ url('/')}}">Domov</a></li>
                            <li class="vyzvy"><a href="{{ url('/vyzvy')}}">Výzvy</a>
                            </li>
                            <li class="info"><a>Informácie</a>
                                <ul>
                                    <li class="infopred"><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
                                    <li class="infopocas"><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
                                    <li class="infopo"><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
                                </ul>
                            </li>
                            <li class="archives"><a href="{{ url('/archives')}}">Archives</a></li>
                            <li class="kontakt"><a href="{{ url('/kontakt')}}">Kontakt</a>
                                <ul>
                                    <li><a href="{{ url('/kontaktfpv')}}" >FPV</a></li>
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