@include('includes.head', ['title' => 'Správa'])
<body>

@include('includes.nav')

<div class="first-widget parallax" id="messageId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Správa k výzve: </br>{{$sprava->vyzvy->nazov}}</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Home / Správy</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">
        <div class="col-md-8 blog-posts">
            <div class="row">
                    <div class="post-blog" align="justify">
                        <div class="blog-content">
                            <span class="meta-date">{{date('d.m.Y', strtotime($sprava->datum))}}</span>
                            <span class="meta-comments">{{$sprava->user->name}}</span>
                            <span class="meta-author">{{$sprava->vyzvy->nazov}}</span>
                            <h3>{{$sprava->nadpis}}</h3>
                            <p>{{$sprava->text}}</p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->

        <div class="col-md-4" style="padding-top: 30px; padding-left: 30px">
            <h3 class="widget-title">Údaje o správe</h3>
            <h5>Meno a priezvisko účastníka:</h5>
            <p>{{$sprava->user->name}}</p>
            <h5>Miesto mobility:</h5>
            <p>{{$sprava->vyzvy->univerzity->first()->krajiny->krajina}} - {{$sprava->vyzvy->univerzity->first()->mesto}}</p>
            <h5>Univerzita:</h5>
            <p>{{$sprava->vyzvy->univerzity->first()->nazov}}</p>
            <h5>Dátum pridania správy:</h5>
            <p>{{date('d.m.Y', strtotime($sprava->datum))}}</p>
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