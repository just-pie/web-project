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
                <div class="col-md-12">
                    <div class="post-blog">
                        <div class="blog-image">
                                <img src="images/includes/blog1.jpg" alt="">
                        </div> <!-- /.blog-image -->
                        <div class="blog-content">
                            <span class="meta-date">{{date('d.m.Y', strtotime($sprava->datum))}}</span>
                            <span class="meta-comments">{{$sprava->pouzivatelia->meno}} {{$sprava->pouzivatelia->priezvisko}}</span>
                            <span class="meta-author">{{$sprava->vyzvy->nazov}}</span>
                            <h3 align="justify">{{$sprava->nadpis}}</h3>
                            <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                            <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor</p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                    <div class="post-blog">
                        <div class="blog-image">
                                <img src="images/includes/blog2.jpg" alt="">
                        </div> <!-- /.blog-image -->
                        <div class="blog-content">
                            <h3>Bird Profile Wellington New Zealand</h3>
                            <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                            <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor</p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                    <div class="post-blog">
                        <div class="blog-image">
                                <img src="images/includes/blog3.jpg" alt="">
                        </div> <!-- /.blog-image -->
                        <div class="blog-content">
                            <h3>Standard Blog Post Formating Medigo</h3>
                            <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                            <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor</p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                    <div class="post-blog">
                        <div class="blog-image">
                                <img src="images/includes/blog4.jpg" alt="">
                        </div> <!-- /.blog-image -->
                        <div class="blog-content">
                            <h3>Hochbunker High Definition Photography</h3>
                            <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>
                            <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor</p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->


        <div class="col-md-4">
            <div class="sidebar">
                <div class="sidebar-widget">
                    <h5 class="widget-title">Údaje o správe</h5>
                    <div class="col-md-12">
                        <h5>Meno a priezvisko účastníka:</h5>
                        <ul>
                            <li>{{$sprava->pouzivatelia->meno}} {{$sprava->pouzivatelia->priezvisko}}</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <h5>Miesto mobility:</h5>
                        <ul>
                            <li>{{$sprava->vyzvy->univerzity->first()->krajiny->krajina}} - {{$sprava->vyzvy->univerzity->first()->mesto}}</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <h5>Univerzita:</h5>
                        <ul>
                            <li>{{$sprava->vyzvy->univerzity->first()->nazov}}</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <h5>Dátum pridania správy:</h5>
                        <ul>
                            <li>{{date('d.m.Y', strtotime($sprava->datum))}}</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <h5>Kompletná správa v pdf:</h5>
                        <ul>
                            <li><a href="#">Účastnícka správa pdf</a></li>
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