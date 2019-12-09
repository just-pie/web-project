<?php echo $__env->make('includes.head', ['title' => 'Kontakt FPV'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="fpv">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2 class="page-title">Fakulta prírodných vied</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="page-location">Domov / Kontakt/ FPV</span>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<section id="team" class="pb-5">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $kontakty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontakt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($kontakt->fakulta == 'Fakulta prírodných vied'): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4" style="padding-bottom: 20px;">
                        <div class="card">
                            <div class="card-body text-center" style="padding-top: 10px; padding-bottom: 10px;">
                                <?php if(!isset($kontakt->photo) || trim($kontakt->photo) === ''): ?>
                                    <p><img class="img-fluid img-profile"
                                            src="<?php echo e(\URL::asset('images/contact_photo/null.png')); ?>"
                                            alt="<?php echo e($kontakt->meno); ?>"></p>
                                <?php else: ?>
                                    <p><img class="img-fluid img-profile"
                                            src="<?php echo e(\URL::asset(''.$kontakt->photo.'')); ?>"
                                            alt="<?php echo e($kontakt->meno); ?>"></p>
                                <?php endif; ?>
                                <h4 class="card-title"><?php echo e($kontakt->meno); ?></h4>
                                <p class="card-text"
                                   style=" margin: 20px;text-align: center;">
                                    <span class="text-muted"><?php echo e($kontakt->pozicia); ?></span>
                                    <br>
                                    <span class="fa fa-building-o fa-fw text-muted" data-toggle="tooltip"></span>
                                    <span class="text-muted"><?php echo e($kontakt->fakulta); ?></span>
                                    <br>
                                    <span class="fa fa-crosshairs fa-fw text-muted" data-toggle="tooltip"></span>
                                    <span class="text-muted small text-truncate"><?php echo e($kontakt->poznamka); ?></span>
                                </p>
                                <ul class="list-inline">
                                    <?php if(isset($kontakt->web) || trim($kontakt->web) !== ''): ?>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                               href="<?php echo e($kontakt->web); ?>">
                                                <i class="fa fa-globe"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if(isset($kontakt->email) || trim($kontakt->email) !== ''): ?>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_top"
                                               href="mailto:<?php echo e($kontakt->email); ?>?Subject=Mobility%20študentov">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if(isset($kontakt->telefon) || trim($kontakt->telefon) !== ''): ?>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank"
                                               href="tel:<?php echo e($kontakt->telefon); ?>" data-toggle="tooltip"
                                               data-placement="down" title="<?php echo e($kontakt->telefon); ?>">
                                                <i class="fa fa-phone"></i>
                                                
                                                
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(13.758468, 100.567481)
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
    }

    function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);
    }

    window.onload = loadScript;
    $('head').append('<link rel="stylesheet" type="text/css" href="<?php echo e(\URL::asset('css/kontakt/kontakt.css')); ?>">')
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".kontakt").addClass("active");
    });
</script>

</body>
</html>