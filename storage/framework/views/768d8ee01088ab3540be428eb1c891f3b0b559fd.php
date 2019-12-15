<?php echo $__env->make('includes.head', ['title' => 'Účastnícke správy'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" id="messageId">
    <div class="parallax-overlay">
        <div class="container pageTitle">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2 class="page-title">Pridávanie účastníckej správy</h2>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 text-right">
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
                    <?php if(Auth::check()): ?>
                        <?php if(auth()->user()->roly_idroly == 2): ?>
                            <div class="comment-form">
                                <h3>Odošlite svoju správu</h3>
                                <div class="widget-inner">
                                    <form action="<?php echo e(url('spravy')); ?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="vyzva">Výzva:</label>
                                                <select id="vyzva" name="vyzva" class="form-control" required>
                                                    <option value=""></option>
                                                    <?php $__currentLoopData = $vyzvy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vyzva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vyzva->idvyzvy); ?>"><?php echo e($vyzva->nazov); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                </br>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="nadpis">Hlavička správy:</label></br>
                                                <input type="text" id="nadpis" name="nadpis" size="78" required>
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="sprava">Tvoja správa:</label>
                                                    <textarea name="sprava" id="sprava" rows="5" required></textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" id="id" name="id" class="form-control"
                                                   value="<?php echo e(auth()->user()->getAuthIdentifier()); ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="mainBtn" type="submit" name="submit"
                                                       value="Odoslať správu" id="submit">
                                            </div>
                                        </div>

                                    </form>
                                </div> <!-- /.widget-inner -->
                            </div> <!-- /.widget-main -->
                        <?php endif; ?>
                    <?php endif; ?>
                </div> <!-- /.col-md-12 -->
                <hr>
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