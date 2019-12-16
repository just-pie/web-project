<?php echo $__env->make('includes.head', ['title' => 'Výzva'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="blog">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="page-title"><?php echo e($vyzva->nazov); ?></h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 text-right">
                    <span class="page-location">Home / Výzvy / Výzva </span>
                    <?php if(Auth::check()): ?>
                        <?php if(auth()->user()->isAdmin == 1 || auth()->user()->roly_idroly == 3): ?>
                            <a class="mainBtn" href="<?php echo e(action("VyzvyController@editVyzva", ['id' => $vyzva->idvyzvy])); ?>"
                               role="button" style="color: white">Upraviť výzvu</a>
                        <?php else: ?>
                            <a class="mainBtn" href="https://studyabroad.sk/" target="_blank" role="button" id="login_vyzva_button" style="color: white; visibility: hidden;">Prihlásiť sa na výzvu</a>

                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?>
                        <a class="mainBtn" href="<?php echo e(url("/login")); ?>" id="login_vyzva_button" disabled role="button"
                           style="color: white; position: relative;
  display: inline-block;"><span class="tooltiptext">Pre pokračovanie sa prihláste</span>Prihlásiť sa na výzvu</a>
                    <?php endif; ?>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">
            <div class="col-md-8 blog-posts">
                <div class="col-md-12">
                    <div class="post-blog">
                        <script>document.getElementById("blog").style.backgroundImage = "url('<?php echo e($vyzva->foto); ?>')";</script>
                        <div class="blog-content" align="justify">
                            <h2>Ponuka</h2>
                            <p><?php echo e($vyzva->popis); ?></p>
                            <hr>
                            <h2>Základné informácie</h2>
                            <p><?php echo $vyzva->ostatneinfo; ?></p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
                    <div>
                        <?php if(count($vyzva->univerzity) < 2): ?>
                            <h2>Bližšie o univerzite:</h2>
                            <li>
                                <a href="<?php echo e(action("UniverzityController@showUniverzita", ['id' => $vyzva->univerzity->first()->iduniverzity])); ?>"><?php echo e($vyzva->univerzity->first()->nazov); ?></a>
                            </li>
                            <br>
                        <?php else: ?>
                            <h2>Zapojené univerzity do výzvy:</h2>
                            <?php $__currentLoopData = $vyzva->univerzity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $univerzita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(action("UniverzityController@showUniverzita", ['id' => $univerzita->iduniverzity])); ?>"><?php echo e($univerzita->nazov); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <br>
                        <?php endif; ?>
                    </div>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Výzva končí za</h5>
                        <div id="countdown" name="<?php echo e($vyzva->platnedo); ?>"></div>
                        <br>
                        <h5 class="widget-title">Správy účastníkov</h5>
                        <div>
                            <?php if($spravy->count() > 0): ?>
                                <ul>
                                    <?php $__currentLoopData = $spravy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sprava): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(action("SpravyController@showSprava", ['id' => $sprava->idspravy])); ?>"><?php echo e($sprava->datum); ?>

                                                / <?php echo e($sprava->user->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php else: ?>
                                Zatiaľ neboli pridané žiadne správy.
                            <?php endif; ?>
                        </div>
                    </div> <!-- /.sidebar-widget -->
                </div> <!-- /.sidebar -->
            </div> <!-- /.col-md-4 -->
    </div> <!-- /.row --></br>
</div> <!-- /.container -->

<?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script type="module" src="<?php echo e(\URL::asset('js/react/countdown.js')); ?>" async=true></script>
<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('.vyzvy').addClass('active');
    });
</script>
</body>
</html>