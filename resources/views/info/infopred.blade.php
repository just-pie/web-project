@include('includes.head', ['title' => 'Info pred mobilitou'])
<body>


	<div class="responsive_menu">
		<ul class="main_menu">
			<li><a href="{{ url('/')}}">Domov</a></li>
			<li><a href="{{ url('/vyzvy')}}">Výzvy</a>
			</li>
			<li class="active"><a href="{{ url('/info')}}">Informácie</a>
				<ul>
					<li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
					<li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
					<li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
				</ul>
			</li>
			<li><a href="{{ url('/archives')}}">Archives</a></li>
			<li><a href="{{ url('/kontakt')}}">Kontakt</a>
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
								<li class="active"><a href="{{ url('/info')}}">Informácie</a>
									<ul>
										<li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
										<li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
										<li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/archives')}}">Archives</a></li>
								<li><a href="{{ url('/kontakt')}}">Kontakt</a>
									<ul>
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
						<h2 class="page-title">Informácie potrebné pred odchodom na mobilitu</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Domov / Info pred odchodom</span>
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
								<p>Na mobilitu (študijný pobyt) Erasmus+ sa môže prihlásiť akýkoľvek študent riadne zapísaný v niektorom študijnom programe UKF. Erasmus študijný pobyt nemôže absolvovať študent 1.ročníka Bc. štúdia, ako prvák však môže založiť prihlášku a byť schválený na pobyt v nasledujúcom akademickom roku.
									Počas štúdia máš možnosť zúčastniť sa Erasmus+ mobility (štúdium alebo stáž) v každom stupni štúdia maximálne po dobu 12 mesiacov. Pri určení nároku na dĺžku Tvojej Erasmus+ mobility sa berú do úvahy predchádzajúce mobility v rámci programu LLP/Erasmus i Erasmus+ (aj napr. mobilita cez EÚ projekt Capacity Building a pod.) realizované v rámci Tvojho súčasného stupňa štúdia. Absolventi, ktorí už ukončili štúdium a nebudú ďalej pokračovať v štúdiu na UKF, sa nemôžu zúčastniť Erasmus+ študijného pobytu.
									Nie je možné absolvovať študijný pobyt na vysokoškolskej inštitúcií, s ktorou UKF nemá uzavretú Erasmus+ dohodu. Vybrať si môžeš pobyt na 1 z 3 vysokoškolských inštitúcií (t.j. v prihláške môžeš uviesť 1 - 3 zahraničné školy), pričom katedra Ťa nominuje len na 1 z nich.
									Prihlasovanie prebieha výlučne prostredníctvom aplikácie StudyAbroad na www.studyabroad.sk. Ak si si vybral miesto svojho študijného pobytu na základe zoznamu uzavretých Erasmus+ dohôd UKF, postupuje nasledovne:</p>
								<ul>
									<li>Zaregistruj sa v aplikácii (ak si tak neurobil ešte v minulosti)</li>
									<li>Aktivuj si konto v aplikácii prostredníctvom aktivačného linku, ktorý dostaneš e-mailom</li>
									<li> Prihlás sa do aplikácie e-mailom a heslom, ktoré si uviedol pri registrácii do aplikácie</li>
									<li> Vyplň formulár s osobnými údajmi a ulož tieto údaje</li>
									<li> Založ, ulož si a odošli prihlášku na študijný pobyt Erasmus+ vrátane ďalších požadovaných podkladov, ktoré si do aplikácie nahral. Prihlášku musíš mať v stave „odoslaná“, inak ju koordinátor UKF neuvidí a nevie schváliť!</li></br>
								</ul>
								<p>Pri založení prihlášky postupuj podľa Manuálu StudyAbroad pre študentov. Pri zakladaní prihlášky platí nasledovné:</p>
								<ul>
									<li>Prihláška študenta v aplikácii je štandardizovaný formulár s presne stanovenou štruktúrou a študent v ňom vyplňuje všetky polia.</li>
									<li>Opakovaná mobilita je možná, takže aplikácia Ti dovolí založiť prihlášku, aj keď si už v minulosti absolvoval Erasmus študijný pobyt alebo stáž.</li>
									<li>V prípade neschválenia prihlášky na pobyt môžeš v ďalšom akademickom roku založiť novú prihlášku.</li>
									<li>V prípade schválenia prihlášky môžeš absolvovať pobyt na partnerskej vysokoškolskej inštitúcii v zahraničí v semestri podľa vlastného výberu (semester a približné obdobie pobytu uvádzaš v prihláške).</li></br>
								</ul>
								<p>Dĺžka mobility štúdium môže byť od 3 do 12 mesiacov v rámci obdobia od 1.6.2019 do 30.9.2020. Presnú dĺžku pobytu študenta schvaľuje Komisia pre medzinárodnú spoluprácu UKF, ktorá schvaľuje Erasmus mobility UKF a to na základe približnej dĺžky semestra na partnerskej vysokoškolskej inštitúcii v zahraničí.
									Okrem založenia štandardnej prihlášky (formuláru) sa v aplikácii vyžaduje aj založenie ďalších podkladov. Konkrétne podklady potrebné k prihláške nastavil v aplikácii Erasmus koordinátor Oddelenia pre medzinárodné vzťahy UKF (OMV) a to Životopis v SJ, Motivačný list v cudzom jazyku, Súhlas študenta so spracovaním osobných údajov.
									Založenú prihlášku s prílohami 1 x vytlač a podpíš. K prihláške a prílohám prilož ešte zoznam predmetov, ktoré by si chcel na danej vysokej škole v zahraničí študovať (predbežný študijný plán) v rámci odboru, ktorý je uvedený v Erasmus+ dohode UKF, cez ktorú si sa hlásil na mobilitu. Informácie o predmetoch, ktoré môžu Erasmus+ študenti študovať, má prijímajúca partnerská inštitúcia zverejnené na svojej web stránke. Takto skompletizované poklady predlož svojmu katedrovému koordinátorovi do 15.04.2019.</p>
							</div> <!-- /.blog-content -->
						</div> <!-- /.post-blog -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h5 class="widget-title">Recent Posts</h5>
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb1.jpg" alt=""></a>
							</div>
							<div class="content">
								<span>24 February 2084</span>
								<h4><a href="#">Standard Post Formating Medigo</a></h4>
							</div>
						</div> <!-- /.last-post -->
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb2.jpg" alt=""></a>
							</div>
							<div class="content">
								<span>24 February 2084</span>
								<h4><a href="#">Standard Post Formating Medigo</a></h4>
							</div>
						</div> <!-- /.last-post -->
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="images/includes/blogthumb3.jpg" alt=""></a>
							</div>
							<div class="content">
								<span>24 February 2084</span>
								<h4><a href="#">Standard Post Formating Medigo</a></h4>
							</div>
						</div> <!-- /.last-post -->
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Categories</h5>
						<div class="row categories">
							<div class="col-md-6">
								<ul>
									<li><a href="#">Standard</a></li>
									<li><a href="#">Audio</a></li>
									<li><a href="#">Video</a></li>
									<li><a href="#">Branding</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<li><a href="#">iOS Design</a></li>
									<li><a href="#">Business</a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Flickr Feed</h5>
						<ul id="flickr-feed" class="thumbs"></ul>
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Text Widget</h5>
						<p class="light-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient… </p>
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