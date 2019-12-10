<?php echo $__env->make('includes.head', ['title' => 'Účastnícke správy'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
								<?php $__currentLoopData = $spravy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sprava): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><a href="<?php echo e(action("SpravyController@showSprava", ['id' => $sprava->idspravy])); ?>"><?php echo e($sprava->datum); ?> / <?php echo e($sprava->user->name); ?> / <?php echo e($sprava->vyzvy->nazov); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>


</body>
</html>