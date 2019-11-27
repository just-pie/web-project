@include('includes.head', ['title' => 'Kontakt FSS'])
<body>

@include('includes.nav')

<div class="first-widget parallax" id="fss">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Fakulta stredoeurópskych štúdií</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Kontakt / FSS</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->


<section id="team" class="pb-5">
    <div class="container">
        <div class="row">
            @foreach($kontakty as $kontakt)
                @if ($kontakt->fakulta == 'Fakulta stredoeurópskych štúdií')
                    <div class="col-xs-12 col-sm-6 col-md-4" style="padding-bottom: 20px;">
                        <div class="card">
                            <div class="card-body text-center" style="padding-top: 10px; padding-bottom: 10px;">
                                @if (!isset($kontakt->photo) || trim($kontakt->photo) === '')
                                    <p><img class="img-fluid img-profile"
                                            src="{{ \URL::asset('images/contact_photo/null.png')}}"
                                            alt="{{$kontakt->meno}}"></p>
                                @else
                                    <p><img class="img-fluid img-profile"
                                            src="{{ \URL::asset(''.$kontakt->photo.'')}}"
                                            alt="{{$kontakt->meno}}"></p>
                                @endif
                                <h4 class="card-title">{{$kontakt->meno}}</h4>
                                <p class="card-text"
                                   style=" margin: 20px;text-align: center;">
                                    <span class="text-muted">{{$kontakt->pozicia}}</span>
                                    <br>
                                    <span class="fa fa-building-o fa-fw text-muted" data-toggle="tooltip"></span>
                                    <span class="text-muted">{{$kontakt->fakulta}}</span>
                                    <br>
                                    <span class="fa fa-crosshairs fa-fw text-muted" data-toggle="tooltip"></span>
                                    <span class="text-muted small text-truncate">{{$kontakt->poznamka}}</span>
                                </p>
                                <ul class="list-inline">
                                    @if(isset($kontakt->web) || trim($kontakt->web) !== '')
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                               href="{{$kontakt->web}}">
                                                <i class="fa fa-globe"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(isset($kontakt->email) || trim($kontakt->email) !== '')
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_top"
                                               href="mailto:{{$kontakt->email}}?Subject=Mobility%20študentov">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    @endif
                                    @if(isset($kontakt->telefon) || trim($kontakt->telefon) !== '')
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                               href="tel:{{$kontakt->telefon}}" data-toggle="tooltip"
                                               data-placement="down" title="{{$kontakt->telefon}}">
                                                <i class="fa fa-phone"></i>
                                                {{--                                        --}}
                                                {{--tel:--}}
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
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