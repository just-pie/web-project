<div id="overlay" class="overlay"></div>
<div class="container-fluid p-5">
    <div class="row">
        <div class="container">
            <h3>Údaje o univerzitách</h3>
            <br>
            <table id="univerzity" class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Názov</th>
                    <th scope="col">Zmluva od</th>
                    <th scope="col">Zmluva platná do</th>
                    <th scope="col">Mesto a Krajina</th>
                    <th class="no-sort" scope="col">Akcia</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $univerzity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $univerzita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><strong><?php echo e($univerzita->id); ?></strong></td>
                        <td><img src="<?php echo e(\URL::asset($univerzita->foto)); ?>" height="30" width="30"
                                 style="border-radius: 50%;"></td>
                        <td><?php echo e($univerzita->nazov); ?></td>
                        <td><?php echo e($univerzita->zmluvaod); ?></td>
                        <td><?php echo e($univerzita->zmluvado); ?></td>
                        <td><?php echo e($univerzita->mesto); ?>, <?php echo e($univerzita->krajina); ?></td>

                        <td>
                            <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                                <div class="icon">
                                    <a href=""><i class="fa fa-eye" style="color: green; " data-toggle="modal"
                                                  data-target-id="1" data-target="#showUser"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href=""><i class="fa fa-edit" style="color: darkorange;"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href=""><i class="fa fa-trash" style="color: red;"></i></a>
                                </div>
                                
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <hr>
    <br>

    <div class="container" style="margin: auto">
        <div class="row" style="margin: auto">
        <div class="col-5">
            <div id="chartdiv" style="width:100%; height: 500px;"></div>
        </div> 
        <div class="col-5">
            <div style="z-index: 999; margin: 5px;">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Krajina</th>
                        <th scope="col">Počet univerzít v krajine</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $univerzity_v_krajinach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $univerzita_v_krajine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($univerzita_v_krajine->krajina); ?></td>
                            <td><?php echo e($univerzita_v_krajine->pocet); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div> 
    </div>
    <br>
</div>
<script src="<?php echo e(asset("js/app.js")); ?>"></script>
<script>
    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.university').addClass('active');
    });
</script>
<?php echo $__env->make('admin.includes.university_map_chart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
