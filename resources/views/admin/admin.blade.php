<!DOCTYPE html>
<html lang="sk">
@include('admin.admin_head')
<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
@include('admin.admin_sidebar')
@include($page_name)
</div>
@include('admin.admin_footer')
</body>

</html>
