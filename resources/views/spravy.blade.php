@include('includes.head', ['title' => 'Účastnícke správy'])
<body>

@include('includes.nav')

<div class="first-widget parallax" id="messageId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="page-title">Účastnícke správy</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 text-right">
                    <span class="page-location">Domov / Správy</span>
                    @guest
                        <a class="mainBtn" href="{{ url("/login") }}" role="button"
                           style="color: white;">Prihlásiť sa</a>
                    @endguest
                    @if (Auth::check())
                        @if(auth()->user()->roly_idroly == 2)
                            <a class="mainBtn" href="{{ url("/addsprava") }}" role="button"
                               style="color: white;">Pridať správu</a>
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
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <p>Na tomto mieste sa budú zobrazovať účastnícke správy jednotlivých študentov</p>
                        <h3 class="archive-title">Posledných 10 správ</h3>
                        <ul class="archive-list">
                            @foreach($spravy as $sprava)
                                <li>
                                    <a href="{{action("SpravyController@showSprava", ['id' => $sprava->idspravy])}}">{{$sprava->datum}}
                                        / {{$sprava->user->name}} / {{$sprava->vyzvy->nazov}}</a></li>
                            @endforeach
                        </ul>
                        </br>
                    </div>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->
        <div class="col-md-4">
            <div class="sidebar">
                <div class="sidebar-widget">
                    <h5 class="widget-title">Dokumenty na stiahnutie</h5>
                    <div class="col-md-12">
                        <ul>
                            <li><a href="{{ \URL::asset('docs/sablona_spravy.pdf') }}" download>Vzor účastníckej
                                    správy</a></li>
                        </ul>
                    </div>
                </div> <!-- /.sidebar-widget -->
            </div> <!-- /.sidebar -->
        </div> <!-- /.col-md-4 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".spravy").addClass("active");
    });
</script>

@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>


</body>
</html>