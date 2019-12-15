<div class="responsive_menu">
    <ul class="main_menu">
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
        <li><a href="{{ url('/spravy')}}">Správy</a></li>
        <li class="kontakt"><a>Kontakt</a>
            <ul>
                <li><a href="{{ url('/kontakt')}}">OMV</a>
                <li><a href="{{ url('/kontaktfpv')}}">FPV</a></li>
                <li><a href="{{ url('/kontaktfsvaz')}}">FSVaZ</a></li>
                <li><a href="{{ url('/kontaktfss')}}">FSS</a></li>
                <li><a href="{{ url('/kontaktff')}}">FF</a></li>
                <li><a href="{{ url('/kontaktpf')}}">PF</a></li>
            </ul>
        </li>
        @guest
        @else
            <li style="color: white;"><a>{{ Auth::user()->name }}</a>
            <ul>
                    @if(auth()->user()->isAdmin == 1)

                        <li><a href="{{url('admin')}}">Admin rozhranie</a></li>

                    @else
                        <li>
                            <a>Môj profil</a>
                        </li>
                    @endif

                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest

    </ul> <!-- /.main_menu -->
</div> <!-- /.responsive_menu -->

<header class="site-header clearfix" style="z-index: 1000;">
    <div class="container">

        <div class="row">

            <div class="col-lg">

                <div class="pull-left logo">
                    <a href="{{url('/')}}">
                        <img src="images/logo.png" alt="UKF_logo">
                    </a>
                </div>    <!-- /.logo -->

                <div class="main-navigation pull-right">

                    <nav class="main-nav visible-md visible-lg">
                        <ul class="sf-menu">
                            <li class="domov"><a href="{{ url('/')}}">Domov</a></li>
                            <li class="vyzvy"><a href="{{ url('/vyzvy')}}">Výzvy</a>
                            </li>
                            <li class="info"><a>Informácie</a>
                                <ul>
                                    <li class="infopred"><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a>
                                    </li>
                                    <li class="infopocas"><a href="{{ url('/infopocas')}}">Informácie počas mobility</a>
                                    </li>
                                    <li class="infopo"><a href="{{ url('/infopo')}}">Informácie po mobilite</a>
                                    </li>
                                    <li class="univerzity"><a href="{{ url('/univerzity')}}">Partnerské univerzity</a></li>
                                </ul>
                            </li>
                            <li class="spravy"><a href="{{ url('/spravy')}}">Správy</a></li>
                            <li class="kontakt"><a>Kontakt</a>
                                <ul>
                                    <li><a href="{{ url('/kontakt')}}">OMV</a>
                                    <li><a href="{{ url('/kontaktfpv')}}">FPV</a></li>
                                    <li><a href="{{ url('/kontaktfsvaz')}}">FSVaZ</a></li>
                                    <li><a href="{{ url('/kontaktfss')}}">FSS</a></li>
                                    <li><a href="{{ url('/kontaktff')}}">FF</a></li>
                                    <li><a href="{{ url('/kontaktpf')}}">PF</a></li>
                                </ul>
                            </li>
                            @guest
                            @else
                                <li>
                                    <a>
                                        @if (!is_null(Auth::user()->foto))
                                            <img src="{{ \URL::asset(''.Auth::user()->foto.'') }}" height="30"
                                                 width="30" style="border-radius: 50%;">
                                        @else
                                        <img src="{{ \URL::asset('images/avatars/user.png') }}" height="30" width="30" style="border-radius: 50%;">
                                        @endif
                                    </a>
                                    <ul>
                                        <li><a style="cursor: default; color: #28b8ce;"><strong><u>{{ Auth::user()->name }}</u></strong></a></li>

                                        @if(auth()->user()->isAdmin == 1)

                                            <li><a href="{{url('admin')}}">Admin rozhranie</a></li>

                                        @elseif(auth()->user()->roly_idroly == 3)
                                            <li>
                                                <a>Spravovanie výziev</a>
                                            </li>
                                            <li>
                                                <a>Môj profil</a>
                                            </li>
                                        @else {{--pre studenta--}}
                                            <li>
                                                <a>Môj profil</a>
                                            </li>
                                        @endif

                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul> <!-- /.sf-menu -->
                    </nav> <!-- /.main-nav -->

                    <!-- This one in here is responsive menu for tablet and mobiles -->
                    <div class="responsive-navigation visible-sm visible-xs">
                        <a href="#nogo" class="menu-toggle-btn">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div> <!-- /responsive_navigation -->

                </div> <!-- /.main-navigation -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

    </div> <!-- /.container -->
</header> <!-- /.site-header -->