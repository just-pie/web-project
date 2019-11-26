@include('includes.head', ['title' => 'Info počas mobility'])
<body>


	<div class="responsive_menu">
		<ul class="main_menu">
			<li><a href="{{ url('/')}}">Domov</a></li>
			<li><a href="{{ url('/vyzvy')}}">Výzvy</a>
			</li>
			<li class="active"><a href="#">Informácie</a>
				<ul>
					<li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
					<li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
					<li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
				</ul>
			</li>
			<li><a href="{{ url('/spravy')}}">Správy</a></li>
			<li><a href="#">Kontakt</a>
				<ul>
					<li><a href="{{ url('/kontakt')}}">OMV</a>
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
								<li class="active"><a href="#">Informácie</a>
									<ul>
										<li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
										<li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
										<li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/spravy')}}">Správy</a></li>
								<li><a href="#">Kontakt</a>
									<ul>
										<li><a href="{{ url('/kontakt')}}">OMV</a>
										<li><a href="{{ url('/kontaktfpv')}}">FPV</a></li>
										<li><a href="{{ url('/kontaktfsvaz')}}">FSVaZ</a></li>
										<li><a href="{{ url('/kontaktfss')}}">FSS</a></li>
										<li><a href="{{ url('/kontaktff')}}">FF</a></li>
										<li><a href="{{ url('/kontaktpf')}}">PF</a></li>
									</ul>
								</li>
							</ul> <!-- /.sf-menu -->
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

	<div class="first-widget parallax" id="blogId">
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

    @include('includes.foot')

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>


</body>
</html>