@include('includes.head', ['title' => 'Mobility UKF'])
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li class="active"><a href="{{ url('/')}}">Domov</a></li>
			<li><a href="{{ url('/vyzvy')}}">Výzvy</a>
			</li>
			<li><a href="#">Informácie</a>
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
								<li class="active"><a href="{{ url('/')}}">Domov</a></li>
								<li><a href="{{ url('/vyzvy')}}">Výzvy</a>
								</li>
								<li><a href="#">Informácie</a>
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

	<section id="homeIntro" class="parallax first-widget">
	    <div class="parallax-overlay">
		    <div class="container home-intro-content">
		        <div class="row">
		        	<div class="col-md-12">
		        		<h2>VITAJTE NA STRÁNKE MOBILITY UKF</h2>
		        		<p>Na tejto stránke sa dozviete všetko o možnostiach mobilít<br> na Univerzite Konštantína Filozofa v Nitre </p>
		        		<a href="#" class="large-button white-color">Prihlásenie <i class="icon-button fa fa-bars"></i></a>
		        	</div> <!-- /.col-md-12 -->
		        </div> <!-- /.row -->
		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#homeIntro -->

	<section class="light-content services">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-globe fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Erasmus+</h3>
							<p>Program Európskej Únie, ktorý podporuje aktivity v oblasti vzdelávania, odbornej prípravy, mládeže a športu</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-forward fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Nahrádza programy</h3>
							<p>Erasmus, Leonardo da Vinci, Comenius a Grundtvig, Erasmus Mundus, Tempus, Alfa, Edulink a bilaterálne programy a pribudol Šport ako nová aktivita v rámci programu</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-file-o fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Poskytuje granty</h3>
							<p>Erasmus+ poskytuje granty pre široké spektrum akcií a aktivít v oblasti v oblasti vzdelávania, odbornej prípravy, mládeže a športu.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

			</div>

			<div class="row">
				
				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-exchange fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Dáva príležitosť</h3>
							<p>Program Erasmus+ dáva príležitosť študentom, žiakom odbornej prípravy, pedagogickým zamestnancom, pracovníkom s mládežou a dobrovoľníkom stráviť obdobie v zahraničí a zlepšiť tak svoje poznatky, zručnosti a zamestnateľnosť.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-folder-open fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Je otvorený</h3>
							<p>Erasmus+ je otvorený širokému spektru organizácií vo všetkých odvetviach sektoroch vzdelávania, odbornej prípravy, mládeže a športu. Akékoľvek slovenské verejné, súkromné alebo neziskové organizácie, aktívne zapojené v týchto oblastiach, môžu požiadať o finančné prostriedky z programu za podmienok zverejnených v príslušnej výzve.</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

				<div class="col-md-4 col-sm-4">
					<div class="service-box-wrap">
						<div class="service-icon-wrap">
							<i class="fa fa-building-o fa-2x"></i>
						</div> <!-- /.service-icon-wrap -->
						<div class="service-cnt-wrap">
							<h3 class="service-title">Akcie sú centralizované a decentralizované</h3>
							<p>Decentralizované akcie sú riadené Národnými agentúrami v každej účastníckej krajine programu. Centralizované akcie sú riadené Výkonnou agentúrou pre vzdelávanie, audiovizuálny sektor a kultúru so sídlom v Bruseli (EACEA).</p>
						</div> <!-- /.service-cnt-wrap -->
					</div> <!-- /.service-box-wrap -->
				</div> <!-- /.col-md-4 -->

			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.services -->

	<section class="dark-content portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title">VYBRANÉ MOBILITY</h2>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		<div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
		@foreach ($vyzvy as $vyzva)
				<div class="item">
					<div class="thumb-post">
						<div class="portfolio-infos">
							<h3 style="color: white">{{$vyzva->nazov}}</h3>
						</div>
						<div class="overlay">
							<div class="overlay-inner">
								<div class="portfolio-infos">
									<span class="meta-category">{{$vyzva->nazov}}</span>
									<h3 class="portfolio-title"><a href="{{ url('/vyzvy')}}">{{$vyzva->univerzity->first()['nazov']}}</a></h3>
								</div>
								<div class="portfolio-expand">
									<a class="fancybox" href="{{action("VyzvyController@showVyzva", ['id' => $vyzva->idvyzvy])}}" title="Bližšie informácie">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
						</div>
						<img src="{{$vyzva->univerzity->first()['foto']}}" alt="{{$vyzva->univerzity->first()['nazov']}}">
					</div>
				</div> <!-- /.item -->
		@endforeach
		</div> <!-- /#owl-demo -->
	</section> <!-- /.portfolio-holder -->

	<section class="testimonials-widget">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bxslider">
						@foreach($spravy as $sprava)
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">{{$sprava->pouzivatelia->meno}} {{$sprava->pouzivatelia->priezvisko}}</span>
								<p class="testimonial-description"><a href="{{action("SpravyController@showSprava", ['id' => $sprava->idspravy])}}">{{$sprava->nadpis}}</a></p>
							</div>
						</div>
						@endforeach
						</div>
					</div> <!-- /.bxslider -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.testimonials-widget -->
	
	<section id="blogPosts" class="parallax">
	    <div class="parallax-overlay">
		    <div class="container">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="section-header">
							<h2 class="section-title">Nedávno pridané výzvy</h2>
							<p class="section-desc">Pozrite si najnovšie možnosti kam vyraziť.</p>
						</div> <!-- /.section-header -->
		        	</div> <!-- /.col-md-12 -->
		        </div> <!-- /.row -->
		        <div class="row latest-posts">
					@foreach($poslvyzvy as $poslvyzva)
						<div class="col-md-4 col-sm-6">
							<div class="blog-post clearfix">
								<div class="blog-post-content">
									<h4 class="post-title"><a href="{{action("VyzvyController@showVyzva", ['id' => $vyzva->idvyzvy])}}">{{$poslvyzva->nazov}}</a></h4>
									<span class="meta-post-date">{{$poslvyzva->pridane}}</span>
								</div>
							</div> <!-- /.blog-post -->
						</div> <!-- /.col-md-4 -->
					@endforeach
		        	</div> <!-- /.col-md-4 -->
		        </div> <!-- /.row -->
		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#blogPosts -->

	@include('includes.foot')

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>

</body>
</html>