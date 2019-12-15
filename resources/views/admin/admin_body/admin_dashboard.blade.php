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
        </div> {{--mapka--}}
        <div class="col col-md-6">
            <canvas id="horizontalBar" ></canvas>
        </div>

        <div class="col col-md-12"><br><hr>
            <br></div>


        <div class="col col-md-6" style="text-align: center; margin: auto;">
            <canvas id="lineChart" style="border-style: solid; border-width: 1px;"></canvas>
        </div>

        {{--
        <div class="form-group col-md-12">
            <a href="https://github.com/azouaoui-med" target="_blank"
               class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                <i class="fab fa-github" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/azouaoui_med" target="_blank"
               class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                <i class="fab fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/azouaoui_med/" target="_blank"
               class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                <i class="fab fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/in/mohamed-azouaoui/" target="_blank"
               class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
            </a>
        </div>--}}

    </div>
</div>


<script>
    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.dashboard').addClass('active');
    });
</script>

@include('admin.includes.dashboard_map')
@include('admin.includes.charts.browser_chart')
