<?php echo $__env->make('includes.head', ['title' => 'Info počas mobility'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="blogId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <h2 class="page-title">Informácie potrebné počas mobility</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-5 col-sm-5 text-right">
                    <span class="page-location">Domov / Info počas mobility</span>
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
                        <div class="blog-content" align="justify">
                            <p>Po príchode na prijímajúcu partnerskú inštitúciu v zahraničí sa riaď pokynmi zahraničného oddelenia, ktoré Ti poskytne informácie o postupe, ktorý musíš absolvovať počas Tvojho pobytu. Študent je pozvaný na aktivity ESN (Erasmus Student Network) organizované pre zahraničných Erasmus študentov v danej krajine. Počas pobytu ako Erasmus študent neplatíš na prijímajúcej inštitúcii školné, ani poplatky za registráciu, vstup do knižníc, za skúšky a pod. Prijímajúca inštitúcia však môže od Teba požadovať tie poplatky, ktoré požaduje aj od svojich domácich študentov. Platby národných grantov, pôžičiek a štipendií (v prípade, že nejaké na Slovensku dostávaš), s výnimkou vyššie uvedeného vládneho štipendia, zostávajú počas mobility zachované. Platby národných grantov, pôžičiek a štipendií (v prípade, že nejaké na Slovensku dostávaš), s výnimkou vyššie uvedeného vládneho štipendia, zostávajú počas mobility zachované.</p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->

        <div class="col-md-4">
            <div class="sidebar">
                <div class="sidebar-widget">
                    <h5 class="widget-title">Súbory na stiahnutie</h5>
                    <div class="row categories">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="#">Súbor 1</a></li>
                                <li><a href="#">Súbor 2</a></li>
                                <li><a href="#">Súbor 3</a></li>
                                <li><a href="#">Súbor 4</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.sidebar-widget -->
            </div> <!-- /.sidebar -->
        </div> <!-- /.col-md-4 -->

    </div> <!-- /.row -->
</div> <!-- /.container -->

<?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".info").addClass("active");
    });
</script>
</body>
</html>