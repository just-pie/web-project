<?php echo $__env->make('includes.head', ['title' => 'Výzvy'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="portfolio">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Naše výzvy</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Výzvy</span>
                    <?php if(Auth::check()): ?>
                        <?php if(auth()->user()->isAdmin == 1 || auth()->user()->roly_idroly == 3): ?>
                            <a class="mainBtn" href="<?php echo e(url('/addvyzva')); ?>" role="button" style="color: white">Pridať výzvu</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul id="filters" class="mixitup-controls">
                <li class="filter" data-filter="all">Všetko</li>
                <li class="filter" data-filter="studijne">Študijné pobyty</li>
                <li class="filter" data-filter="staze">Stáže</li>
                <li class="filter" data-filter="prednaskove">Prednáškové pobyty</li>
                <li class="filter" data-filter="skolenia">Školenia</li>
            </ul>
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<div class="container">
    <div class="row">
        <div class="portfolio-holder" id="Grid">
            <?php $__currentLoopData = $vyzvy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vyzva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($vyzva->univerzity) < 2): ?>
                    <div class="portfolio-post col-sm-6 col-md-4 mix <?php echo e($vyzva->typvyzvy->typ); ?>">
                        <div class="thumb-post">
                            <div class="overlay-inner">
                                <div style=" height: 233px;max-height: 233px;"><img src="<?php echo e($vyzva->foto); ?>" alt="<?php echo e($vyzva->nazov); ?>" style=" width: 100%; height: 100%;object-fit:cover;">
                                </div>
                                <div class="portfolio-infos">
                                    <h3 style="color: white; text-shadow: 2px 2px 3px black;"><?php echo e($vyzva->nazov); ?></h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="portfolio-infos">
                                        <span class="meta-category"><?php echo e($vyzva->oblasti->nazov); ?></span>
                                        <h3 class="portfolio-title"><?php echo e($vyzva->univerzity->first()['nazov']); ?></h3>
                                    </div>
                                    <div class="portfolio-expand">
                                        <a class="fancybox"
                                           href="<?php echo e(action("VyzvyController@showVyzva", ['id' => $vyzva->idvyzvy])); ?>"
                                           title="Bližšie informácie">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-md-4 -->
                <?php else: ?>
                    <div class="portfolio-post col-sm-6 col-md-4 mix <?php echo e($vyzva->typvyzvy->typ); ?>">
                        <div class="thumb-post">
                            <div class="overlay-inner">
                                <div style=" height: 233px;max-height: 233px;">
                                    <img src="<?php echo e($vyzva->foto); ?>" alt="<?php echo e($vyzva->nazov); ?>" style=" width: 100%; height: 100%;object-fit:cover;">
                                </div>
                                <div class="portfolio-infos">
                                    <h3 style="color: white; text-shadow: 2px 2px 3px black;"><?php echo e($vyzva->nazov); ?></h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="portfolio-infos">
                                        <span class="meta-category"><?php echo e($vyzva->oblasti->nazov); ?></span>
                                        <h3 class="portfolio-title">Viaceré univerzity</h3>
                                    </div>
                                    <div class="portfolio-expand">
                                        <a class="fancybox"
                                           href="<?php echo e(action("VyzvyController@showVyzva", ['id' => $vyzva->idvyzvy])); ?>"
                                           title="Bližšie informácie">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-md-4 -->
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div> <!-- /.portfolio-holder -->
    </div> <!-- /.row -->
    <?php echo e($vyzvy->links()); ?>

</div> <!-- /.container -->

<?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('.vyzvy').addClass('active');
    });
</script>

</body>
</html>
