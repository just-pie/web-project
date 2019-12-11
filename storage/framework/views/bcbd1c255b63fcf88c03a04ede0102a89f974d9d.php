<?php echo $__env->make('includes.head', ['title' => 'Úprava výzvy'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>

<?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="first-widget parallax" style="visibility: hidden;">


</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">
            <div class="col-md-12">
                <div class="comment-form">
                    <div class="widget-inner">
                        <form action="<?php echo e(url('editvyzva')); ?>" method="post" enctype="multipart/form-data">
                            <?php if(count($errors)): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <h2>Úprava výzvy</h2>
                                <br>
                                <div>
                                    <input type="hidden" id="id" name="id" class="form-control" required value="<?php echo e($vyzva->idvyzvy); ?>">
                                </div>
                            <div>
                                <label for="nazov">Názov výzvy:</label></br>
                                <input type="text" id="nazov" name="nazov" class="form-control" value="<?php echo e($vyzva->nazov); ?>">
                            </div>
                                <br>
                            <div>
                                <label for="popis">Krátky popis:</label>
                                <textarea name="popis" id="popis" rows="2" class="form-control"><?php echo e($vyzva->popis); ?></textarea>
                            </div>
                                <br>
                            <div>
                                <label for="ostatneinfo">Detaily k výzve:</label>
                                <textarea name="ostatneinfo" id="ostatneinfo" rows="5" class="form-control summernote"><?php echo e($vyzva->ostatneinfo); ?></textarea
                            </div>
                                <br>
                            <div>
                                <label for="dlzka">Dĺžka výzvy:</label></br>
                                <input type="text" id="dlzka" name="dlzka" class="form-control" value="<?php echo e($vyzva->dlzka); ?>">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            </div>
                                <br>
                            <div>
                                <label for="platnedo">Platnosť výzvy do:</label></br>
                                <input type="date" id="platnedo" name="platnedo" class="form-control" value="<?php echo e($vyzva->platnedo); ?>">
                            </div>
                                <br>
                            <div>
                                <label for="filename">Foto:</label></br>
                                <input type="file" name="filename" id="filename" class="form-control">
                            </div>
                                <br>
                            <div>
                                <label for="oblast">Oblasť:</label></br>
                                <select class="form-control" id="oblast" name="oblast">
                                    <option value="<?php echo e($vyzva->oblasti->idoblasti); ?>" selected="<?php echo e($vyzva->oblasti->nazov); ?>"><?php echo e($vyzva->oblasti->nazov); ?></option>
                                    <?php $__currentLoopData = $oblasti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oblast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($oblast->idoblasti); ?>"><?php echo e($oblast->nazov); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                                <br>
                            <div>
                                <label for="typvyzvy">Typ výzvy:</label></br>
                                <select class="form-control" id="typvyzvy" name="typvyzvy">
                                    <option value="<?php echo e($vyzva->typvyzvy->idtypvyzvy); ?>"><?php echo e($vyzva->typvyzvy->typ); ?></option>
                                    <?php $__currentLoopData = $typvyzvy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($typ->idtypvyzvy); ?>"><?php echo e($typ->typ); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div></br>
                            <div>
                                <input class="mainBtn" type="submit" name="submit" value="Upraviť výzvu" id="submit">
                            </div>
                        </form>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->
            </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".vyzvy").addClass("active");
        $(".summernote").summernote({
            height: 1000,
        });
    });
</script>

<?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</body>
</html>