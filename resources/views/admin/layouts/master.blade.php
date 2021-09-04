<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>
            Admin
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset("assets")}}/icons/favicon.png">
        <!-- DataTables -->
        <link href="{{asset('admin')}}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin')}}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- file upload -->
        <link rel="stylesheet" href="{{asset('admin')}}/fileUpload/css/fileinput.css" type="text/css">
        <!-- Custom style -->
	    <link rel="stylesheet" href="{{asset('admin')}}/css/alacarte.css">
        <!-- Summernote css -->
        <link href="{{asset('admin')}}/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
        <!-- Summernote css -->
        <link href="{{asset('admin')}}/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
        <!-- Lightbox css -->
        <link href = "{{asset('admin')}}/libs/magnific-popup/magnific-popup.css" rel = "stylesheet" type = "text/css" />
        <!-- Lightbox css -->
        <link href = "{{asset('admin')}}/libs/magnific-popup/magnific-popup.css" rel = "stylesheet" type = "text/css" />
        <link href = "{{asset('admin')}}/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        {{-- selection --}}
        <link href="{{asset('admin')}}/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin')}}/libs/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet" type="text/css">
        {{-- datapicker --}}
        <link href="{{asset('admin')}}/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="{{asset('admin')}}/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="{{asset('admin')}}/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <!-- Sweet Alert-->
        <link href="{{asset('admin')}}/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href = "{{asset('/admin/css/bootstrap.min.css')}}" id = "bootstrap-style" rel = "stylesheet" type = "text/css" />
        <link href="{{asset('/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('/admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function charcounts(startfrom, charend) {
                var len = document.getElementById(startfrom).value.length;
                document.getElementById(charend).innerHTML=len;
            }
        </script>
    </head>
    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

		   {{-- header --}}
		   @include('admin.layouts.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.layouts.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                            @yield('content')
                        <!-- end page title -->
                    </div>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

			   {{-- footer --}}
               @include('admin.layouts.footer')
               {{-- ck-editor --}}
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('/admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/admin/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('/admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('/admin/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('admin')}}/js/app.js"></script>
        <!-- Sweet Alerts js -->
        <script src="{{asset('admin')}}/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Sweet alert init js-->
        <script src="{{asset('admin')}}/js/pages/sweet-alerts.init.js"></script>
        <!-- Required datatable js-->
        <script src="{{asset('admin')}}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('admin')}}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Peity chart-->
        <script src="{{asset('/admin/libs/peity/jquery.peity.min.js')}}"></script>

        <script src="{{asset('/admin/js/app.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('admin')}}/js/pages/datatables.init.js"></script>
        <script src="{{asset('admin')}}/js/pages/datatables.init.js"></script>

        <!-- Buttons examples -->
        <script src="{{asset('admin')}}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('admin')}}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('admin')}}/libs/jszip/jszip.min.js"></script>
        <script src="{{asset('admin')}}/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="{{asset('admin')}}/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="{{asset('admin')}}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="{{asset('admin')}}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="{{asset('admin')}}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Magnific Popup-->
        <script src="{{asset('admin')}}/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Bootstrap rating js -->
        <script src="{{asset('admin')}}/libs/bootstrap-rating/bootstrap-rating.min.js"></script>

        <script src="{{asset('admin')}}/js/pages/rating-init.js"></script>
        <!-- File Upload -->
	    <script src="{{asset('admin')}}/fileUpload/js/fileinput.js"></script>
        <!-- Tour init js-->
        <script src="{{asset('admin')}}/js/pages/lightbox.init.js"></script>
        <!-- Responsive examples -->
        <script src="{{asset('admin')}}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{asset('admin')}}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <script src="{{asset('admin')}}/libs/select2/js/select2.min.js"></script>
        <script src="{{asset('admin')}}/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="{{asset('admin')}}/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="{{asset('admin')}}/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="{{asset('admin')}}/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
        <script src="{{asset('admin')}}/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <!--tinymce js-->
        <script src="{{asset('admin')}}/libs/tinymce/tinymce.min.js"></script>
        <!-- Alacarte -->
	    <script src="{{asset('admin')}}/js/alacarte.js"></script>
        <!-- Summernote js -->
        <script src="{{asset('admin')}}/libs/summernote/summernote-bs4.min.js"></script>
        <script src="{{asset('admin')}}/libs/summernote/summernote-bs4.min.js"></script>
        <script src="{{asset('admin')}}/libs/summernote/summernote-bs4.min.js"></script>
        <!-- form mask -->
        <script src="{{asset('admin')}}/libs/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <!-- form mask init -->
        <script src="{{asset('admin')}}/js/pages/form-mask.init.js"></script>
        <!-- init js -->
        <script src="{{asset('admin')}}/js/pages/form-editor.init.js"></script>
        <script src="{{asset('admin')}}/js/pages/form-advanced.init.js"></script>
        @yield('script')
    </body>

</html>
