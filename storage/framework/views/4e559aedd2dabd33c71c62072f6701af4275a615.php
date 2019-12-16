<?php echo $__env->make('includes.head', ['title' => 'O univerzite'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="blog">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title"><?php echo e($univerzita->nazov); ?></h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Info o univerzite </span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

    <div class="container">
            <div class=" blog-posts">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-blog">
                            <script>document.getElementById("blog").style.backgroundImage = "url('<?php echo e($univerzita->foto); ?>')";</script>
                            <div class="blog-content">
                                <span class="meta-date"><?php echo e($univerzita->nazov); ?></span>
                                <span class="meta-comments"><?php echo e($univerzita->krajiny->krajina); ?></span>
                                <span class="meta-author"><?php echo e($univerzita->mesto); ?></span>
                            </div> <!-- /.blog-content -->
                            <div class="blog-content">
                                <h2>O univerzite</h2>
                                <p><?php echo e($univerzita->detail); ?></p>
                                </div> <!-- /.blog-content -->
                        </div> <!-- /.post-blog -->
                    </div> <!-- /.col-md-8 -->
                    <div class="col-md-4" style="padding-top: 30px; padding-left: 30px">
                        <h3><u>Údaje o univerzite</u></h3>
                        <p><strong>Krajina:</strong><br><?php echo e($univerzita->krajiny->krajina); ?></p>
                        <p><strong>Mesto:</strong><br><?php echo e($univerzita->mesto); ?></p>
                        <p><strong>Zmluva:</strong><br>Od roku <?php echo e($univerzita->zmluvaod); ?> do roku <?php echo e($univerzita->zmluvado); ?></p>
                        <p><strong>Web:</strong> <br> <a href="<?php echo e($univerzita->web); ?>" target="_blank"><?php echo e($univerzita->web); ?></a></p>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->
    </div> <!-- /.container -->

<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('.info').addClass('active');
    });
</script>

<?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>