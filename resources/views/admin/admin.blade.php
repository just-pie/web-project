<!DOCTYPE html>
<html lang="sk">
@include('admin.includes.admin_head')
<body>
<div class="page-wrapper default-theme sidebar-bg bg1 toggled">
    @include('admin.includes.admin_sidebar')
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        @include($page_name)
    </main>
</div>
@include('admin.includes.admin_footer')
</body>

</html>
