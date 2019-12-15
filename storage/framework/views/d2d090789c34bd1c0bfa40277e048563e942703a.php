<?php echo $__env->make('includes.head', ['title' => 'Partnerské univerzity'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="portfolio">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Partnerské univerzity</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Univerzity</span>
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
                <li class="filter" data-filter="europe">Európa</li>
                <li class="filter" data-filter="asia">Ázia</li>
                <li class="filter" data-filter="america">Amerika</li>
                <li class="filter" data-filter="australia">Austrália</li>
                <li class="filter" data-filter="afrika">Afrika</li>
            </ul>
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<div class="container">
    <div class="row">
        <div class="portfolio-holder" id="Grid">
            <?php $__currentLoopData = $univerzity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $univerzita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php switch($univerzita->krajiny->kontinent):
                    case ("Európa"): ?>
                    <div class="portfolio-post col-sm-6 col-md-4 mix europe">
                    <?php break; ?>
                    <?php case ("Ázia"): ?>
                    <div class="portfolio-post col-sm-6 col-md-4 mix asia">
                    <?php break; ?>
                    <?php case ("Amerika"): ?>
                    <div class="portfolio-post col-sm-6 col-md-4 mix america">
                    <?php break; ?>
                    <?php case ("Austrália"): ?>
                    <div class="portfolio-post col-sm-6 col-md-4 mix australia">
                    <?php break; ?>
                    <?php case ("Afrika"): ?>
                    <div class="portfolio-post col-sm-6 col-md-4 mix afrika">
                    <?php break; ?>
                    <?php default: ?>
                    <div class="portfolio-post col-sm-6 col-md-4 mix all">
                <?php endswitch; ?>
                <div class="thumb-post">
                    <div class="overlay-inner">
                        <div style=" height: 233px;max-height: 233px;">
                            <img src="<?php echo e($univerzita->foto); ?>" alt="<?php echo e($univerzita->nazov); ?>" style=" width: 100%; height: 100%;object-fit:cover;">
                        </div>
                        <div class="portfolio-infos">
                            <h3 style="color: white; text-shadow: 2px 2px 3px black;"><?php echo e($univerzita->nazov); ?></h3>
                        </div>
                    </div>
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <span class="meta-category"><?php echo e($univerzita->mesto); ?></span>
                                <h3 class="portfolio-title"><?php echo e($univerzita->krajiny->krajina); ?></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox"
                                   href="<?php echo e(action("UniverzityController@showUniverzita", ['id' => $univerzita->iduniverzity])); ?>"
                                   title="Bližšie informácie">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div> <!-- /.col-md-4 -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div> <!-- /.portfolio-holder -->
</div> <!-- /.row -->
</div> <!-- /.container -->

<?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('.info').addClass('active');
    });
</script>

</body>
</html>
