<?php echo $__env->make('includes.head', ['title' => 'Účastnícke správy'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="messageId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="page-title">Účastnícke správy</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 text-right">
                    <span class="page-location">Domov / Správy</span>
                    <?php if(auth()->guard()->guest()): ?>
                        <a class="mainBtn" href="<?php echo e(url("/login")); ?>" role="button"
                           style="color: white;">Prihlásiť sa</a>
                    <?php endif; ?>
                    <?php if(Auth::check()): ?>
                        <?php if(auth()->user()->roly_idroly == 2): ?>
                            <a class="mainBtn" href="<?php echo e(url("/addsprava")); ?>" role="button"
                               style="color: white;">Pridať správu</a>
                        <?php endif; ?>
                    <?php endif; ?>
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
                    <div>
                        <p>Na tomto mieste sa budú zobrazovať účastnícke správy jednotlivých študentov</p>
                        <h3 class="archive-title">Posledných 10 správ</h3>
                        <ul class="archive-list">
                            <?php $__currentLoopData = $spravy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sprava): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(action("SpravyController@showSprava", ['id' => $sprava->idspravy])); ?>"><?php echo e($sprava->datum); ?>

                                        / <?php echo e($sprava->user->name); ?> / <?php echo e($sprava->vyzvy->nazov); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        </br>
                    </div>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->
        <div class="col-md-4">
            <div class="sidebar">
                <div class="sidebar-widget">
                    <h5 class="widget-title">Dokumenty na stiahnutie</h5>
                    <div class="col-md-12">
                        <ul>
                            <li><a href="<?php echo e(\URL::asset('docs/sablona_spravy.pdf')); ?>" download>Vzor účastníckej
                                    správy</a></li>
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