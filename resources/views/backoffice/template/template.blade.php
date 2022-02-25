<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Capitol-Fit</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('vendors/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('vendors/images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('vendors/images/logo.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/fullcalendar/fullcalendar.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/datatables/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/style.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('backoffice.template.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('backoffice.template.menu')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <div class="main-container">
                <div class="pd-ltr-20">

                    <!-- Main content -->
                    <section class="content">
                        @yield('content')
                    </section>
                    <!-- /.content -->
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        @include('backoffice.template.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- js -->
    <script src="{{asset('vendors/scripts/core.js')}}"></script>
    <script src="{{asset('vendors/scripts/script.min.js')}}"></script>
    <script src="{{asset('vendors/scripts/process.js')}}"></script>
    <script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
    <script src="{{asset('plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jQuery-Knob-master/jquery.knob.min.js')}}"></script>
    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('plugins/fullcalendar/fullcalendar.min.js')}}"></script>
	<script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>

	<script src="{{asset('plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('plugins/datatables/js/vfs_fonts.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="{{asset('vendors/scripts/datatable-setting.js')}}"></script></body>

</body>

</html>