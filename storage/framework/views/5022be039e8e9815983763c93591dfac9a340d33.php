<div class="responsive_menu">
    <ul class="main_menu">
        <li class="domov"><a href="<?php echo e(url('/')); ?>">Domov</a></li>
        <li class="vyzvy"><a href="<?php echo e(url('/vyzvy')); ?>">Výzvy</a>
        </li>
        <li class="info"><a>Informácie</a>
            <ul>
                <li class="infopred"><a href="<?php echo e(url('/infopred')); ?>">Informácie pred mobilitou</a></li>
                <li class="infopocas"><a href="<?php echo e(url('/infopocas')); ?>">Informácie počas mobility</a></li>
                <li class="infopo"><a href="<?php echo e(url('/infopo')); ?>">Informácie po mobilite</a></li>
            </ul>
        </li>
        <li><a href="<?php echo e(url('/spravy')); ?>">Správy</a></li>
        <li class="kontakt"><a>Kontakt</a>
            <ul>
                <li><a href="<?php echo e(url('/kontakt')); ?>">OMV</a>
                <li><a href="<?php echo e(url('/kontaktfpv')); ?>">FPV</a></li>
                <li><a href="<?php echo e(url('/kontaktfsvaz')); ?>">FSVaZ</a></li>
                <li><a href="<?php echo e(url('/kontaktfss')); ?>">FSS</a></li>
                <li><a href="<?php echo e(url('/kontaktff')); ?>">FF</a></li>
                <li><a href="<?php echo e(url('/kontaktpf')); ?>">PF</a></li>
            </ul>
        </li>
        <?php if(auth()->guard()->guest()): ?>
        <?php else: ?>
            <li>
                <a>
                    <?php echo e(Auth::user()->name); ?>

                </a>

                <ul>

                    <?php if(auth()->user()->isAdmin == 1): ?>
                        <li>
                            <a href="<?php echo e(url('admin')); ?>">Admin</a>
                        </li>
                    <?php else: ?>
                        <li>
                            <div class="panel-heading">Normal User</div>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                              style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

    </ul> <!-- /.main_menu -->
</div> <!-- /.responsive_menu -->

<header class="site-header clearfix">
    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="pull-left logo">
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="images/logo.png" alt="UKF_logo">
                    </a>
                </div>    <!-- /.logo -->

                <div class="main-navigation pull-right">

                    <nav class="main-nav visible-md visible-lg">
                        <ul class="sf-menu">
                            <li class="domov"><a href="<?php echo e(url('/')); ?>">Domov</a></li>
                            <li class="vyzvy"><a href="<?php echo e(url('/vyzvy')); ?>">Výzvy</a>
                            </li>
                            <li class="info"><a>Informácie</a>
                                <ul>
                                    <li class="infopred"><a href="<?php echo e(url('/infopred')); ?>">Informácie pred mobilitou</a>
                                    </li>
                                    <li class="infopocas"><a href="<?php echo e(url('/infopocas')); ?>">Informácie počas mobility</a>
                                    </li>
                                    <li class="infopo"><a href="<?php echo e(url('/infopo')); ?>">Informácie po mobilite</a></li>
                                </ul>
                            </li>
                            <li class="spravy"><a href="<?php echo e(url('/spravy')); ?>">Správy</a></li>
                            <li class="kontakt"><a>Kontakt</a>
                                <ul>
                                    <li><a href="<?php echo e(url('/kontakt')); ?>">OMV</a>
                                    <li><a href="<?php echo e(url('/kontaktfpv')); ?>">FPV</a></li>
                                    <li><a href="<?php echo e(url('/kontaktfsvaz')); ?>">FSVaZ</a></li>
                                    <li><a href="<?php echo e(url('/kontaktfss')); ?>">FSS</a></li>
                                    <li><a href="<?php echo e(url('/kontaktff')); ?>">FF</a></li>
                                    <li><a href="<?php echo e(url('/kontaktpf')); ?>">PF</a></li>
                                </ul>
                            </li>
                            <?php if(auth()->guard()->guest()): ?>
                            <?php else: ?>
                                <li>
                                    <a>
                                        <?php if(!is_null(Auth::user()->foto)): ?>
                                            <img src="<?php echo e(\URL::asset(''.Auth::user()->foto.'')); ?>" height="30"
                                                 width="30" style="border-radius: 50%;">
                                        <?php else: ?>
                                        <img src="<?php echo e(\URL::asset('images/avatars/user.png')); ?>" height="30" width="30" style="border-radius: 50%;">
                                        <?php endif; ?>
                                    </a>
                                    <ul>
                                        <li><a style="cursor: default; color: #00a8d6;"><strong><u><?php echo e(Auth::user()->name); ?></u></strong></a></li>

                                        <?php if(auth()->user()->isAdmin == 1): ?>

                                            <li><a href="<?php echo e(url('admin')); ?>">Admin</a></li>

                                        <?php elseif(auth()->user()->roly_idroly == 3): ?>
                                            <li>
                                                <a>Som teta zo študijného</a>
                                            </li>
                                        <?php else: ?>
                                            <li>
                                                <a>Som študent</a>
                                            </li>
                                            <li>
                                                <a>Môj profil</a>
                                            </li>
                                        <?php endif; ?>

                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                  style="display: none;">
                                                <?php echo e(csrf_field()); ?>

                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul> <!-- /.sf-menu -->
                    </nav> <!-- /.main-nav -->

                    <!-- This one in here is responsive menu for tablet and mobiles -->
                    <div class="responsive-navigation visible-sm visible-xs">
                        <a href="#nogo" class="menu-toggle-btn">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div> <!-- /responsive_navigation -->

                </div> <!-- /.main-navigation -->

            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->

    </div> <!-- /.container -->
</header> <!-- /.site-header -->