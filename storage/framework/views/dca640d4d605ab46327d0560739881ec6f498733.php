<div id="overlay" class="overlay"></div>
<div class="container-fluid p-5">
    <div class="row">
        <div class="form-group col-md-12">
            <h1>Admin dashboard</h1>
            <br>
            <hr>
        </div>
        <div class="col col-md-6">
            <div id="krajiny" style="width:100%; height: 350px; "></div>
        </div> 
        <div class="col col-md-6">
            <canvas id="horizontalBar" ></canvas>
        </div>

        <div class="col col-md-12"><br><hr>
            <br></div>


        <div class="col col-md-6" style="text-align: center; margin: auto;">
            <canvas id="lineChart" style="border-style: solid; border-width: 1px;"></canvas>
        </div>

        

    </div>
</div>


<script>
    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.dashboard').addClass('active');
    });
</script>

<?php echo $__env->make('admin.includes.dashboard_map', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.includes.charts.browser_chart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
