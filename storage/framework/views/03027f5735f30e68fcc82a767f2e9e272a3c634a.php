<?php echo $__env->make('includes.head', ['title' => 'Správa'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="messageId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="page-title">Správa k výzve: </br><?php echo e($sprava->vyzvy->nazov); ?></h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 text-right">
                    <span class="page-location">Domov / Účastnícke správy</span>
                    <?php if(auth()->guard()->guest()): ?>
                        <a class="mainBtn" href="<?php echo e(url("/login")); ?>" role="button"
                           style="color: white;">Prihlásiť sa</a>
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
                    <div class="post-blog" align="justify">
                        <div class="blog-content">
                            <span class="meta-date"><?php echo e(date('d.m.Y', strtotime($sprava->datum))); ?></span>
                            <span class="meta-comments"><?php echo e($sprava->user->name); ?></span>
                            <span class="meta-author"><?php echo e($sprava->vyzvy->nazov); ?></span>
                            <h3><?php echo e($sprava->nadpis); ?></h3>
                            <p><?php echo e($sprava->text); ?></p>
                        </div> <!-- /.blog-content -->
                    </div> <!-- /.post-blog -->
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->

        <div class="col-md-4" style="padding-top: 30px; padding-left: 30px">
            <h3><u>Údaje o správe</u></h3>
            <p><strong>Meno a priezvisko účastníka:</strong><br><?php echo e($sprava->user->name); ?></p>
            <p><strong>Miesto mobility:</strong><br><?php echo e($sprava->vyzvy->univerzity->first()->krajiny->krajina); ?> - <?php echo e($sprava->vyzvy->univerzity->first()->mesto); ?></p>
            <p><strong>Univerzita:</strong><br><?php echo e($sprava->vyzvy->univerzity->first()->nazov); ?></p>
            <p><strong>Dátum pridania správy:</strong> <br> <?php echo e(date('d.m.Y', strtotime($sprava->datum))); ?></p>
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