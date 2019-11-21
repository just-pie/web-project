@include('includes.head', ['title' => 'Účastnícke správy'])
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
			<li class="active"><a href="{{ url('/spravy')}}">Správy</a></li>
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
								<li><a href="{{ url('/vyzvy')}}">Výzvy</a></li>
								<li><a href="{{ url('/info')}}">Informácie</a>
									<ul>
										<li><a href="{{ url('/infopred')}}">Informácie pred mobilitou</a></li>
										<li><a href="{{ url('/infopocas')}}">Informácie počas mobility</a></li>
										<li><a href="{{ url('/infopo')}}">Informácie po mobilite</a></li>
									</ul>
								</li>
								<li class="active"><a href="{{ url('/spravy')}}">Správy</a></li>
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

	<div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Účastnícke správy</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Domov / Správy</span>
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
						<div class="archive-wrapper">
							<p>Na tomto mieste sa budú zobrazovať účastnícke správy jednotlivých študentov</p>
							<h3 class="archive-title">Posledných 10 správ</h3>
							<ul class="archive-list">
								@foreach($spravy as $sprava)
									<li><a href="{{action("SpravyController@showSprava", ['id' => $sprava->idspravy])}}">{{$sprava->datum}} / {{$sprava->vyzvy->nazov}}</a></li>
								@endforeach
                            </ul>
                            <h3 class="archive-title">Správy podľa mesiaca:</h3>
                            <ul class="archive-list">
                                <li><a href="#">Mesiac - rok</a></li>
                                <li><a href="#">Mesiac - rok</a></li>
                                <li><a href="#">Mesiac - rok</a></li>
                                <li><a href="#">Mesiac - rok</a></li>
                                <li><a href="#">Mesiac - rok</a></li>
                                <li><a href="#">Mesiac - rok</a></li>
                                <li><a href="#">Mesiac - rok</a></li>
                            </ul>
						</div>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="comment-form">
							<h3>Odošlite svoju správu</h3>
							<div class="widget-inner">
								<form action="#" method="post">
									<div class="row">
										<div class="col-md-4">
											<p>
												<label for="name-id">Výzva:</label>
												<input type="text" id="name-id" name="name-id">
											</p>
										</div>
										<div class="col-md-8">
											<p>
												<label for="email-id">Krátky popis:</label>
												<input type="text" id="email-id" name="email-id">
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<p>
												<label for="comment">Tvoja správa:</label>
												<textarea name="comment" id="comment" rows="5"></textarea>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input class="mainBtn" type="submit" name="submit" value="Odoslať správu" id="submit">
										</div>
									</div>
								</form>
							</div> <!-- /.widget-inner -->
						</div> <!-- /.widget-main -->
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