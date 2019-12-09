<?php echo $__env->make('includes.head', ['title' => 'Výzva'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="blog">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title"><?php echo e($vyzva->nazov); ?></h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Home / Výzvy / Výzva </span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->


<?php if(count($vyzva->univerzity) < 2): ?>
    <div class="container">
        <div class="row">
            <div class=" blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-blog">
                            <div class="blog-image">
                                <img src="<?php echo e($vyzva->univerzity->first()->foto); ?>" alt="">
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <h2>Ponuka</h2>
                                <p><?php echo e($vyzva->popis); ?></p>
                                <h2>Základné informácie</h2>
                                <p><?php echo e($vyzva->ostatneinfo); ?></p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                        <div>
                            <h2>Bližšie o univerzite:</h2>
                            <?php $__currentLoopData = $vyzva->univerzity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $univerzita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(action("UniverzityController@showUniverzita", ['id' => $univerzita->iduniverzity])); ?>"><?php echo e($univerzita->nazov); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class=" blog-posts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-blog">
                            <div class="blog-image">
                                <img src="<?php echo e($vyzva->foto); ?>" alt="">
                            </div> <!-- /.blog-image -->
                            <div class="blog-content">
                                <h2>Ponuka</h2>
                                <p><?php echo e($vyzva->popis); ?></p>
                                <h2>Základné informácie</h2>
                                <p><?php echo e($vyzva->ostatneinfo); ?></p>
                            </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                        <div>
                            <h2>Zapojené univerzity:</h2>
                            <?php $__currentLoopData = $vyzva->univerzity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $univerzita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="#"><?php echo e($univerzita->nazov); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
<?php endif; ?>

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