@include('includes.head', ['title' => 'Výzva'])
<body>
@include('includes.nav')

<div class="first-widget parallax" id="blog">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="page-title">{{$vyzva->nazov}}</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 text-right">
                    <span class="page-location">Home / Výzvy / Výzva </span>
                    @if (Auth::check())
                        @if(auth()->user()->isAdmin == 1 || auth()->user()->roly_idroly == 3)
                            <a class="mainBtn" href="{{action("VyzvyController@editVyzva", ['id' => $vyzva->idvyzvy])}}" role="button" style="color: white">Upraviť výzvu</a>
                        @endif
                    @endif
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">
        <div class="col-md-8 blog-posts">
            <div class="col-md-12">
                <div class="post-blog">
                    <script>document.getElementById("blog").style.backgroundImage = "url('{{$vyzva->foto}}')";</script>
                    <div class="blog-content" align="justify">
                        <h2>Ponuka</h2>
                        <p>{{$vyzva->popis}}</p>
                        <h2>Základné informácie</h2>
                        <p>{{$vyzva->ostatneinfo}}</p>
                    </div> <!-- /.blog-content -->
                </div> <!-- /.post-blog -->
                <div>
                    @if(count($vyzva->univerzity) < 2)
                        <h2>Bližšie o univerzite:</h2>
                        <li><a href="{{action("UniverzityController@showUniverzita", ['id' => $vyzva->univerzity->first()->iduniverzity])}}">{{$vyzva->univerzity->first()->nazov}}</a></li>
                        <br>
                    @else
                        <h2>Zapojené univerzity:</h2>
                        @foreach($vyzva->univerzity as $univerzita)
                            <li><a href="{{action("UniverzityController@showUniverzita", ['id' => $univerzita->iduniverzity])}}">{{$univerzita->nazov}}</a></li>
                        @endforeach
                        <br>
                    @endif
                </div>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.col-md-8 -->
        <div class="col-md-4">
            <div class="sidebar">
                <div class="sidebar-widget">
                    <h5 class="widget-title">Správy účastníkov</h5>
                    <div class="col-md-12">
                        <ul>
                            @foreach($spravy as $sprava)
                                <li><a href="{{action("SpravyController@showSprava", ['id' => $sprava->idspravy])}}">{{$sprava->datum}} / {{$sprava->user->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div> <!-- /.sidebar-widget -->
            </div> <!-- /.sidebar -->
        </div> <!-- /.col-md-4 -->
    </div> <!-- /.row --></br>
</div> <!-- /.container -->

@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('.vyzvy').addClass('active');
    });
</script>
</body>
</html>