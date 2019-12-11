@include('includes.head', ['title' => 'Účastnícke správy'])
<body>

@include('includes.nav')

<div class="first-widget parallax" id="messageId">
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
								<li><a href="{{action("SpravyController@showSprava", ['id' => $sprava->idspravy])}}">{{$sprava->datum}} / {{$sprava->user->name}} / {{$sprava->vyzvy->nazov}}</a></li>
							@endforeach
						</ul>
						<h3 class="archive-title">Správy podľa mesiaca:</h3>
						<ul class="archive-list">
							<li><a href="#">Mesiac - rok</a></li>
							<li>...</li>
						</ul>
					</div>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<div class="comment-form">
						<h3>Odošlite svoju správu</h3>
						<div class="widget-inner">
							<form action="{{url('spravy')}}" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12">
										<label for="vyzva">Výzva:</label>
										<select id="vyzva" name="vyzva" class="form-control" required>
											<option value=""></option>
											@foreach ($vyzvy as $vyzva)
												<option value="{{ $vyzva->idvyzvy }}">{{ $vyzva->nazov }}</option>
											@endforeach
										</select>
										</br>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="nadpis">Hlavička správy:</label></br>
										<input type="text" id="nadpis" name="nadpis" size="78" required>
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p>
											<label for="sprava">Tvoja správa:</label>
											<textarea name="sprava" id="sprava" rows="5" required></textarea>
										</p>
									</div>
								</div>
								@if(auth()->check())
									<div class="row">
										<input type="hidden" id="id" name="id" class="form-control" value="{{auth()->user()->getAuthIdentifier()}}">
									</div>
									<div class="row">
										<div class="col-md-12">
											<input class="mainBtn" type="submit" name="submit" value="Odoslať správu" id="submit">
										</div>
									</div>
								@else
									<div class="row">
										<div class="col-md-12">
											<input class="mainBtn" type="submit" name="submit" disabled value="Odoslať správu" id="submit">
										</div>
									</div>
								@endif
							</form>
						</div> <!-- /.widget-inner -->
					</div> <!-- /.widget-main -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.col-md-8 -->

		<div class="col-md-4">
			<div class="sidebar">
				<div class="sidebar-widget">
					<h5 class="widget-title">Dokumenty na stiahnutie</h5>
					<div class="col-md-12">
						<ul>
							<li><a href="#">Účastnícka správa šablóna</a></li>
							<li><a href="#">Vzor účastníckej správy</a></li>
							<li><a href="#">Dokument 1</a></li>
							<li><a href="#">Dokument 2</a></li>
						</ul>
					</div>
				</div> <!-- /.sidebar-widget -->
			</div> <!-- /.sidebar -->
		</div> <!-- /.col-md-4 -->

	</div> <!-- /.row -->

</div> <!-- /.container -->

<script type="text/javascript">
	$(document).ready(function () {
		$(".nav li").removeClass("active");
		$(".spravy").addClass("active");
	});
</script>

@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>


</body>
</html>