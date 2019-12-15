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
                        <h2>Úprava výzvy</h2>
                        <br>
                        <div>
                            <input type="hidden" id="id" name="id" class="form-control" value="<?php echo e($vyzva->idvyzvy); ?>">
                        </div>
                        <div>
                            <label for="nazov">Názov výzvy:</label></br>
                            <input type="text" id="nazov" name="nazov" class="form-control" required
                                   value="<?php echo e($vyzva->nazov); ?>">
                        </div>
                        <br>
                        <div>
                            <label for="popis">Krátky popis:</label>
                            <textarea name="popis" id="popis" rows="2" class="form-control"
                                      required><?php echo e($vyzva->popis); ?></textarea>
                        </div>
                        <br>
                        <div>
                            <label for="ostatneinfo">Detaily k výzve:</label>
                            <textarea name="ostatneinfo" id="ostatneinfo" rows="5" class="form-control"
                                      required><?php echo e($vyzva->ostatneinfo); ?></textarea>
                        </div>
                        <br>
                        <div>
                            <label for="dlzka">Dĺžka výzvy:</label></br>
                            <input type="text" id="dlzka" name="dlzka" class="form-control" value="<?php echo e($vyzva->dlzka); ?>"
                                   required>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        </div>
                        <br>
                        <div>
                            <label for="platnedo">Platnosť výzvy do:</label></br>
                            <input type="date" id="platnedo" name="platnedo" class="form-control" required
                                   value="<?php echo e($vyzva->platnedo); ?>">
                        </div>
                        <br>
                        <div>
                            <label for="filename">Foto:</label></br>
                            <input type="file" name="filename" id="filename" class="form-control">
                        </div>
                        <br>
                        <div>
                            <label for="oblast">Oblasť:</label></br>
                            <select class="form-control" id="oblast" name="oblast" required>
                                <?php $__currentLoopData = $oblasti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oblast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($vyzva->oblasti->idoblasti === $oblast->idoblasti): ?>
                                        <option value="<?php echo e($oblast->idoblasti); ?>" selected><?php echo e($oblast->nazov); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($oblast->idoblasti); ?>"><?php echo e($oblast->nazov); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="typvyzvy">Typ výzvy:</label></br>
                            <select class="form-control" id="typvyzvy" name="typvyzvy" required>
                                <?php $__currentLoopData = $typvyzvy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($vyzva->typvyzvy->idtypvyzvy === $typ->idtypvyzvy): ?>
                                        <option value="<?php echo e($typ->idtypvyzvy); ?>" selected><?php echo e($typ->typ); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($typ->idtypvyzvy); ?>"><?php echo e($typ->typ); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        </br>
                        <div>
                            <label for="univerzity">Univerzity:</label></br>
                            <select class="form-control" id="univerzity" name="univerzity[]" multiple required>
                                <?php $__currentLoopData = $univerzity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $univerzity_has_vyzvy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $univerzita_has_vyzva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($univerzita_has_vyzva->univerzity_iduniverzity === $uni->iduniverzity): ?>
                                            <option value="<?php echo e($uni->iduniverzity); ?>" selected><?php echo e($uni->nazov); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($uni->iduniverzity); ?>"><?php echo e($uni->nazov); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        </br>
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
    });
</script>

<script>
    CKEDITOR.replace('ostatneinfo');
    var usedNames = {};
    $("select[name='univerzity\[\]'] > option").each(function () {
        if(usedNames[this.text]) {
            $(this).remove();
        } else {
            usedNames[this.text] = this.value;
        }
    });
</script>
<?php echo $__env->make('includes.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</body>
</html>