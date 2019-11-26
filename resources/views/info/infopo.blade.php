@include('includes.head', ['title' => 'Info po mobilite'])
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