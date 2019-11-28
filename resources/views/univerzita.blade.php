@include('includes.head', ['title' => 'O univerzite'])
<body>

@include('includes.nav')

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

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('.vyzvy').addClass('active');
    });
</script>

@include('includes.foot')

<!-- Scripts -->
<script src="http://localhost/web_project/public/js/min/plugins.min.js"></script>
<script src="http://localhost/web_project/public/js/min/medigo-custom.min.js"></script>

</body>
</html>