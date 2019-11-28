@include('includes.head', ['title' => 'Info po mobilite'])
<body>


@include('includes.nav')

<div class="first-widget parallax" id="po">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Informácie potrebné po návrate z mobility</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Informácie po mobilite</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">

        <div align="justify" style="margin: 30px;">
            <p><strong>Po návrate</strong> zo študijného pobytu predlož Erasmus koordinátorovi OMV UKF nasledovné dokumenty potvrdzujúce
                realizáciu Tvojej Erasmus+ mobility:</p>
            <ul>
                <li>Learning Agreement for Studies (2x originál časti After the Mobility - Transcript of Records).</li>
                <li>Správa z mobility</li>
            </ul>
            <h3>Uznanie študijného pobytu</h3>
            <p>Po ukončení mobility môžeš požiadať o uznanie študijného pobytu, a to podaním písomnej žiadosti na
                Študijné oddelenie fakulty UKF.</p>
            <h3>Jazykový test</h3>
            <p>Online hodnotenie progresu po návrate</p>
            <h3>Vrátenie grantu (sankcie)</h3>
            <p>Od účastníka, ktorý nesplnil podmienky tejto zmluvy, bude inštitúcia žiadať vrátenie pomernej časti
                grantu alebo celého grantu.</p>
            <p>V prípade, že <strong>nedodanie</strong> dokumentov, <strong>nevyplnenie</strong> správy alebo jazykového hodnotenia do uvedenej lehoty
                <strong><em>nezavinil</em></strong> účastník, musí to hodnoverne preukázať svojej inštitúcii. V takom prípade vysielajúca
                inštitúcia nebude od účastníka vyžadovať vrátenie finančnej podpory.</p>
        </div> <!-- /.blog-content -->


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