<div id="overlay" class="overlay"></div>
<div class="container-fluid p-5">
        <div class="row">
                <h3>Tabuľka univerzít</h3>
                <br>

                <table id="univerzity" class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Meno</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Rola</th>
                                <th class="no-sort" scope="col">Akcia</th>
                        </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                </table>

        </div>

        <div class="row">
                <div class="col-6">
                        <div id="basic_choropleth" style="z-index: 10; position: relative; width:800px; height: 600px; border-style: solid; border-width: 1px;"></div>
                </div> 
                <div class="col-6">
                        <div style="z-index: 10; margin: 5px;">

                                <table class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                                <th scope="col">Krajina</th>
                                                <th scope="col">Počet univerzít</th>
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

        <br>
</div>
<script>
    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.university').addClass('active');
    });

    var basic_choropleth = new Datamap({
        element: document.getElementById("basic_choropleth"),
        projection: 'mercator',
        fills: {
            defaultFill: "#cac3ce",
            univerzity: "#74fa7e"
        },
        data: {
            DEU: {fillKey: "univerzity"},
            PRT: {fillKey: "univerzity"},
            ESP: {fillKey: "univerzity"},
            CZE: {fillKey: "univerzity"},
            HUN: {fillKey: "univerzity"},
            POL: {fillKey: "univerzity"},
            LTU: {fillKey: "univerzity"},
            AUT: {fillKey: "univerzity"},
            BEL: {fillKey: "univerzity"},
            TWN: {fillKey: "univerzity"},
            FRA: {fillKey: "univerzity"},
            SVN: {fillKey: "univerzity"},
        }
    });

</script>
