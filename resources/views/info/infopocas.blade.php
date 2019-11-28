@include('includes.head', ['title' => 'Info počas mobility'])
<body>

@include('includes.nav')

<div class="first-widget parallax" id="pocas">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Informácie potrebné počas mobility</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
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
                            <p>Po príchode na prijímajúcu partnerskú inštitúciu v zahraničí sa riaď pokynmi zahraničného
                                oddelenia, ktoré Ti poskytne informácie o postupe, ktorý musíš absolvovať počas Tvojho
                                pobytu. Študent je pozvaný na aktivity ESN (Erasmus Student Network) organizované pre
                                zahraničných Erasmus študentov v danej krajine. Počas pobytu ako Erasmus študent
                                neplatíš na prijímajúcej inštitúcii školné, ani poplatky za registráciu, vstup do
                                knižníc, za skúšky a pod.</p><p>Prijímajúca inštitúcia však môže od Teba požadovať tie
                                poplatky, ktoré požaduje aj od svojich domácich študentov. Platby národných grantov,
                                pôžičiek a štipendií (v prípade, že nejaké na Slovensku dostávaš), s výnimkou vyššie
                                uvedeného vládneho štipendia, zostávajú počas mobility zachované. Platby národných
                                grantov, pôžičiek a štipendií (v prípade, že nejaké na Slovensku dostávaš), s výnimkou
                                vyššie uvedeného vládneho štipendia, zostávajú počas mobility zachované.</p>
                        </div>
                    </div> <!-- /.post-blog -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

        </div> <!-- /.col-md-8 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

@include('includes.foot')

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