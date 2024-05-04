<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SchoolRate TOGO</title>
    <link rel="shortcut icon" type="image/png" href="/admin/assets/images/logos/schoolrate.png" />
    <link rel="stylesheet" href="/admin/assets/css/styles.min.css" />
    <!-- Datatable -->
	<!-- --------------------------------------------------- -->
	<link rel="stylesheet" href="{{ asset('/admin/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('espace-admin.layouts.sidebar')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('espace-admin.layouts.topheader')
            @yield('content')
            @include('espace-admin.layouts.footer')
        </div>
    </div>
    </div>
    <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/assets/js/sidebarmenu.js"></script>
    <script src="/admin/assets/js/app.min.js"></script>
    <script src="/admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/admin/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="/admin/assets/js/dashboard.js"></script>
    <script src="/admin/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/admin/dist/js/datatable/datatable-basic.init.js"></script>
</body>

</html>
