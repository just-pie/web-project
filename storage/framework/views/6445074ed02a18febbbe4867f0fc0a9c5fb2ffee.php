<!DOCTYPE html>
<html lang="sk">
<?php echo $__env->make('admin.includes.admin_head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <?php echo $__env->make('admin.includes.admin_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <?php echo $__env->make($page_name, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </main>
</div>
<?php echo $__env->make('admin.includes.admin_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>
