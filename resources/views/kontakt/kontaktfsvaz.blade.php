@include('includes.head', ['title' => 'Kontakt FSVaZ'])
<body>

@include('includes.nav')

<div class="first-widget parallax" id="contact">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Fakulta sociálnych vied a zdravotníctva</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Kontakt / FSVaZ</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <!-- contacts card -->
    <div class="card card-default" id="card_contacts">
        <div id="contacts" class="panel-collapse collapse show" aria-expanded="true">
            <ul class="list-group pull-down" id="contact-list">

                @foreach($kontakty as $kontakt)
                    @if ($kontakt->fakulta == 'Fakulta sociálnych vied a zdravotníctva')
                        <li class="list-group-item">
                            <div class="row w-100">
                                <div class="text-center text-sm-left">
                                    <label class="name lead">{{$kontakt->meno}}</label>
                                    <br>
                                    <span class="text-muted">{{$kontakt->pozicia}}</span>
                                    <br>
                                    <span class="fa fa-building-o fa-fw text-muted" data-toggle="tooltip"></span>
                                    <span class="text-muted">{{$kontakt->fakulta}}</span>
                                    <br>
                                    <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip"></span>
                                    <span class="text-muted">{{$kontakt->email}}</span>
                                    <br>
                                    <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip"></span>
                                    <span class="text-muted small">{{$kontakt->telefon}}</span>
                                    <br>
                                    <span class="fa fa-crosshairs fa-fw text-muted" data-toggle="tooltip"></span>
                                    <span class="text-muted small text-truncate">{{$kontakt->poznamka}}</span>
                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach

            </ul>
            <!--/contacts list-->
        </div>
    </div>
</div>

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
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".kontakt").addClass("active");
    });
</script>

</body>
</html>