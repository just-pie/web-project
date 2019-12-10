    <div id="overlay" class="overlay"></div>
    <div class="container">
        <object data="<?php echo e(\URL::asset("docs/specs.pdf")); ?>" type="application/pdf" width="100%" height="900">
            <embed src="<?php echo e(\URL::asset("docs/specs.pdf")); ?>" type="application/pdf"/>
        </object>
    </div>


    <script>
        $(document).ready(function () {
            $(" li").removeClass("active");
            $('.documentation').addClass('active');
        });
    </script>