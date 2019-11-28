@include('includes.head', ['title' => 'Výzva'])
<body>
@include('includes.nav')

<div class="first-widget parallax" id="blog">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">{{$vyzva->nazov}}</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Home / Výzvy / Výzva </span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->


@if(count($vyzva->univerzity) < 2)
    <div class="container">
        <div class="row">
            <div class=" blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-blog">
                            <div class="blog-image">
                                <img src="{{$vyzva->univerzity->first()->foto}}" alt="">
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <h2>Ponuka</h2>
                                <p>{{$vyzva->popis}}</p>
                                <h2>Základné informácie</h2>
                                <p>{{$vyzva->ostatneinfo}}</p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                        <div>
                            <h2>Bližšie o univerzite:</h2>
                            @foreach($vyzva->univerzity as $univerzita)
                                <li><a href="{{action("UniverzityController@showUniverzita", ['id' => $univerzita->iduniverzity])}}">{{$univerzita->nazov}}</a></li>
                            @endforeach
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
@else
    <div class="container">
        <div class="row">
            <div class=" blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-blog">
                            <div class="blog-image">
                                <img src="{{$vyzva->foto}}" alt="">
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <h2>Ponuka</h2>
                                <p>{{$vyzva->popis}}</p>
                                <h2>Základné informácie</h2>
                                <p>{{$vyzva->ostatneinfo}}</p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                        <div>
                            <h2>Zapojené univerzity:</h2>
                            @foreach($vyzva->univerzity as $univerzita)
                                <li><a href="#">{{$univerzita->nazov}}</a></li>
                            @endforeach
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
@endif

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