<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    {{-- <title>Matrix Template - The Ultimate Multipurpose admin template</title> --}}
    <!-- Custom CSS -->
    {{-- {{asset('backend/')}} --}}
    <link href="{{asset('backend/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('backend/dist/css/style.min.css')}}" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('backend.admin.tools.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('backend.admin.tools.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        {{-- <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                @yield('index')



                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('backend/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('backend/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('backend/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('backend/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js')}}"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('backend/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('backend/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('backend/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('backend/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('backend/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('backend/dist/js/pages/chart/chart-page-init.js')}}"></script>
    <script src="{{ asset('backend/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>


</body>

</html>
