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
                    <span class="page-location">Domov / Info o univerzite </span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

    <div class="container">
            <div class=" blog-posts">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-blog">
                            <script>document.getElementById("blog").style.backgroundImage = "url('{{$univerzita->foto}}')";</script>
                            <div class="blog-content">
                                <span class="meta-date">{{$univerzita->nazov}}</span>
                                <span class="meta-comments">{{$univerzita->krajiny->krajina}}</span>
                                <span class="meta-author">{{$univerzita->mesto}}</span>
                            </div> <!-- /.blog-content -->
                            <div class="blog-content">
                                <h2>O univerzite</h2>
                                <p>{{$univerzita->detail}}</p>
                                </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                    </div> <!-- /.col-md-8 -->
                    <div class="col-md-4" style="padding-top: 30px; padding-left: 30px">
                        <h3><u>Údaje o univerzite</u></h3>
                        <p><strong>Krajina:</strong><br>{{$univerzita->krajiny->krajina}}</p>
                        <p><strong>Mesto:</strong><br>{{$univerzita->mesto}}</p>
                        <p><strong>Zmluva:</strong><br>Od roku {{$univerzita->zmluvaod}} do roku {{$univerzita->zmluvado}}</p>
                        <p><strong>Web:</strong> <br> {{$univerzita->web}}</p>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
    </div> <!-- /.container -->

<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('.info').addClass('active');
    });
</script>

@include('includes.foot')

</body>
</html>