@include('includes.head', ['title' => 'Info po mobilite'])
<body>


@include('includes.nav')

<div class="first-widget parallax" id="blogId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="page-title">Informácie potrebné po návrate z mobility</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 text-right">
                    <span class="page-location">Domov / Informácie po mobilite</span>
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
                            <p>Po návrate zo študijného pobytu predlož Erasmus koordinátorovi OMV UKF nasledovné dokumenty potvrdzujúce realizáciu Tvojej Erasmus+ mobility:</p>
                            <ul>
                                <li>Learning Agreement for Studies (2x originál časti After the Mobility - Transcript of Records).</li>
                                <li>Správa z mobility</li>
                            </ul>
                            <h3>Uznanie študijného pobytu</h3>
                            <p>Po ukončení mobility môžeš požiadať o uznanie študijného pobytu, a to podaním písomnej žiadosti na Študijné oddelenie fakulty UKF.</p>
                            <h3>Jazykový test</h3>
                            <p>Online hodnotenie progresu po návrate</p>
                            <h3>Vrátenie grantu (sankcie)</h3>
                            <p>Od účastníka, ktorý nesplnil podmienky tejto zmluvy, bude inštitúcia žiadať vrátenie pomernej časti grantu alebo celého grantu.</p>
                            <p>V prípade, že nedodanie dokumentov, nevyplnenie správy alebo jazykového hodnotenia do uvedenej lehoty nezavinil účastník, musí to hodnoverne preukázať svojej inštitúcii. V takom prípade vysielajúca inštitúcia nebude od účastníka vyžadovať vrátenie finančnej podpory.</p>
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
                                <li><a href="{{ \URL::asset('docs/ Annex_to_Learning_Agreement_for_Studies_SK.pdf') }}" download>Súbor 1 - Príloha k ZMLUVE O ŠTÚDIU</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.sidebar-widget -->
            </div> <!-- /.sidebar -->
        </div> <!-- /.col-md-4 -->

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