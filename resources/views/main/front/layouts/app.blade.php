
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-django/layouts/layouts-hori-boxed-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Dec 2021 12:19:31 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('')}}assets/images/favicon.ico">
        <!-- DataTables -->
        <link href="{{ asset('')}}assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('')}}assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('')}}assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('main.front.layouts.partialshome.header')
    
            @include('main.front.layouts.partialshome.menu')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('')}}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('')}}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('')}}assets/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('')}}assets/js/pages/dashboard.init.js"></script>
        <script src="{{ asset('') }}assets/highchart/code/highcharts.js"></script>
        <script src="{{ asset('') }}assets/highchart/code/modules/exporting.js"></script>
        <script src="{{ asset('') }}assets/highchart/code/modules/export-data.js"></script>
        <script src="{{ asset('') }}assets/highchart/code/modules/accessibility.js"></script>

                <!-- Required datatable js -->
        <script src="{{ asset('')}}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('')}}assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('')}}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('')}}assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('')}}assets/libs/jszip/jszip.min.js"></script>
        <script src="{{ asset('')}}assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{ asset('')}}assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{ asset('')}}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('')}}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('')}}assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="{{ asset('')}}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('')}}assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('')}}assets/js/pages/datatables.init.js"></script>  
        <script src="{{ asset('/') }}assets/libs/parsleyjs/parsley.min.js"></script>
        <script src="{{ asset('') }}assets/js/pages/form-validation.init.js"></script>

        <script src="{{ asset('')}}assets/js/app.js"></script>
        @yield('script')
    </body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/layouts-hori-boxed-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Dec 2021 12:19:31 GMT -->
</html>
