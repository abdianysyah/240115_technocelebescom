<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tecno Celebes | Admin </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/theme/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/theme/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/theme/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/theme/admin/css/style.css">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="/theme/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
    </div>


    @include('layout.admin.header_admin')
    @include('layout.admin.sidebar_admin')
    @yield('content')
    @include('layout.admin.footer_admin')








    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="/theme/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/theme/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/theme/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/theme/admin/dist/js/adminlte.js"></script>

    <!-- PAGE /theme/admin/PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="/theme/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/theme/admin/plugins/raphael/raphael.min.js"></script>
    <script src="/theme/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/theme/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- <script src="/theme/admin/ckeditor/ckeditor.js"></script> -->
    <!-- ChartJS -->
    <script src="/theme/admin/plugins/chart.js/Chart.min.js"></script>
    <script src="//cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="/theme/admin/dist/js/demo.js"></script>
    <script src="/theme/admin/js/main.js"></script>
    <script src="/theme/admin/js/qodri.js"></script>
    <!-- Skrip untuk menggantikan textarea dengan CKEditor -->

    <script>
        CKEDITOR.replace('editor1', {
            contentsCss: ['theme/admin/css/style.css'] // Adjust the path to your CSS file
        });
    </script>

</body>

</html>

@yield('helperfooter')
