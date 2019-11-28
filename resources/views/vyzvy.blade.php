@include('includes.head', ['title' => 'Výzvy'])
<body>

@include('includes.nav')

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
                @if(count($vyzva->univerzity) < 2)
                    <div class="portfolio-post col-sm-6 col-md-4 mix studijne">
                        <div class="thumb-post">
                            <div class="overlay-inner"><img src="{{$vyzva->univerzity->first()['foto']}}" alt="{{$vyzva->nazov}}">
                                <div class="portfolio-infos">
                                    <h3 style="color: white">{{$vyzva->nazov}}</h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="portfolio-infos">
                                        <span class="meta-category">{{$vyzva->oblasti->nazov}}</span>
                                        <h3 class="portfolio-title">{{$vyzva->univerzity->first()['nazov']}}</h3>
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
                @else
                    <div class="portfolio-post col-sm-6 col-md-4 mix studijne">
                        <div class="thumb-post">
                            <div class="overlay-inner"><img src="{{$vyzva->foto}}" alt="{{$vyzva->nazov}}">
                                <div class="portfolio-infos">
                                    <h3 style="color: white">{{$vyzva->nazov}}</h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="portfolio-infos">
                                        <span class="meta-category">{{$vyzva->oblasti->nazov}}</span>
                                        <h3 class="portfolio-title">Viaceré univerzity</h3>
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
                @endif
            @endforeach
        </div> <!-- /.portfolio-holder -->
    </div> <!-- /.row -->
    {{ $vyzvy->links() }}
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
