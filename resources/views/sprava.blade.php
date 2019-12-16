@include('includes.head', ['title' => 'Správa'])
<body>

@include('includes.nav')

<div class="first-widget parallax" id="messageId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="page-title">Správa k výzve: </br>{{$sprava->vyzvy->nazov}}</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 text-right">
                    <span class="page-location">Domov / Účastnícke správy</span>
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
            <h3><u>Údaje o správe</u></h3>
            <p><strong>Meno a priezvisko účastníka:</strong><br>{{$sprava->user->name}}</p>
            <p><strong>Miesto mobility:</strong><br>{{$sprava->vyzvy->univerzity->first()->krajiny->krajina}}
                - {{$sprava->vyzvy->univerzity->first()->mesto}}</p>
            <p><strong>Univerzita:</strong><br>{{$sprava->vyzvy->univerzity->first()->nazov}}</p>
            <p><strong>Dátum pridania správy:</strong> <br> {{date('d.m.Y', strtotime($sprava->datum))}}</p>
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