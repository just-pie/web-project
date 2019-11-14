@include('includes.head', ['title' => 'Kontakt FSS'])
<body>


	<div class="responsive_menu">
		<ul class="main_menu">
			<li><a href="{{ url('/')}}">Domov</a></li>
			<li><a href="{{ url('/vyzvy')}}">Výzvy</a>
			</li>
			<li><a href="{{ url('/info')}}">Informácie</a>
				<ul>
					<li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
					<li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
					<li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
				</ul>
			</li>
			<li><a href="{{ url('/archives')}}">Archives</a></li>
			<li class="active"><a href="{{ url('/kontakt')}}">Kontakt</a>
				<ul>
					<li><a href="{{ url('/kontaktfpv')}}">FPV</a></li>
					<li><a href="{{ url('/kontaktfsvaz')}}">FSVaZ</a></li>
					<li><a href="{{ url('/kontaktfss')}}">FSS</a></li>
					<li><a href="{{ url('/kontaktff')}}">FF</a></li>
					<li><a href="{{ url('/kontaktpf')}}">PF</a></li>
				</ul>
			</li>
		</ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="{{url('/')}}">
							<img src="images/logo.png" alt="UKF_logo">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="{{ url('/')}}">Domov</a></li>
								<li><a href="{{ url('/vyzvy')}}">Výzvy</a>
								</li>
								<li><a href="{{ url('/info')}}">Informácie</a>
									<ul>
										<li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
										<li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
										<li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/archives')}}">Archives</a></li>
								<li class="active"><a href="{{ url('/kontakt')}}">Kontakt</a>
									<ul>
										<li><a href="{{ url('/kontaktfpv')}}">FPV</a></li>
										<li><a href="{{ url('/kontaktfsvaz')}}">FSVaZ</a></li>
										<li><a href="{{ url('/kontaktfss')}}">FSS</a></li>
										<li><a href="{{ url('/kontaktff')}}">FF</a></li>
										<li><a href="{{ url('/kontaktpf')}}">PF</a></li>
									</ul>
								</li>
							</ul>  <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	<div class="first-widget parallax" id="contact">
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

	<div class="container">
		<!-- contacts card -->
		<div class="card card-default" id="card_contacts">
			<div id="contacts" class="panel-collapse collapse show" aria-expanded="true">
				<ul class="list-group pull-down" id="contact-list">

					@foreach($kontakty as $kontakt)
						@if ($kontakt->fakulta == 'Fakulta stredoeurópskych štúdií')
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


</body>
</html>