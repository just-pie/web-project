@include('includes.head', ['title' => 'Kontakt FPV'])
<body>

@include('includes.nav')

<div class="first-widget parallax" id="contact">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Fakulta prírodných vied</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Kontakt/ FPV</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->


<section id="team" class="pb-5">
    <div class="container">
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="mainflip">
                    <div class="card">
                        <div class="card-body text-center" style="padding-top: 10px; padding-bottom: 10px;">
                            <p><img class=" img-fluid"
                                    src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png"
                                    alt="card image"></p>
                            <h4 class="card-title">Sunlimetech</h4>
                            <p class="card-text" style=" margin: 20px;text-align: justify; text-justify: inter-word;">This is basic card with image on top, title, description and
                                button. <br>
                                This is basic card with image on top, title, description and
                                button.This is basic card with image on top, title, description and button.This is basic
                                card with image on top, title, description and button.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="social-icon text-xs-center" target="_blank" href="#">
                                        <i class="fa fa-phone"></i>
                                        {{--tel:--}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./Team member -->
    </div>
</section>


@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(13.758468, 100.567481)
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
    }

    function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);
    }

    window.onload = loadScript;
    $('head').append('<link rel="stylesheet" type="text/css" href="{{ \URL::asset('css/kontakt/kontakt.css') }}">')
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".kontakt").addClass("active");
    });
</script>

</body>
</html>