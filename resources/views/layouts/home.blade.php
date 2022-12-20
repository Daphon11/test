    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
        <meta name="keywords"
            content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/images/favicon.png') }}"
            type="image/x-icon">
        <link rel="icon" href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-mainassets/images/favicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/images/favicon.png') }}"
            type="image/x-icon">
        <title>{{ config('app.name') }} | @yield('title')</title>
        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet">

        <!-- ico-font-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/icofont.css') }}">
        <!-- Font Awesome-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/fontawesome.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('/AdminLTE-2/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/themify.css') }}">
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/flag-icon.css') }}">
        <!-- Feather icon-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/feather-icon.css') }}">
        <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/Ionicons/css/ionicons.min.css') }}">
        <!-- Plugins css start-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/chartist.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/date-picker.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/prism.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/vector-map.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/datatables.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/datatable-extension.css') }}">
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/bootstrap.css') }}">
        <!-- App css-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/style.css') }}">
        <link id="color" rel="stylesheet"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/color-1.css') }}" media="screen">
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css"
            href="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/css/responsive.css') }}">
            
        @stack('css')
    </head>

    <body>
        <!-- Loader starts-->
        <div class="loader-wrapper">
            <div class="theme-loader"></div>
        </div>
        <!-- Loader ends-->
        <!-- page-wrapper Start-->
        <div class="page-wrapper compact-sidebar" id="pageWrapper">

            <!-- Page Header Start-->

            @includeIf('layouts.header')

            <!-- Page Header Ends-->

            <!-- Page Body Start-->
            <div class="page-body-wrapper sidebar-icon">

                <!-- Page Sidebar Ends-->

                @includeIf('layouts.sidebar')

                <!-- Page Sidebar Ends-->

                <div class="page-body">
                    <!-- Container-fluid starts-->
                    @yield('content')
                    <!-- Container-fluid end-->
                </div>
                <!-- footer start-->

                @includeIf('layouts.footer')

                <!-- footer start-->
            </div>
        </div>
        <!-- latest jquery-->
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/jquery-3.5.1.min.js') }}"></script>
        <!-- feather icon js-->
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/icons/feather-icon/feather.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/icons/feather-icon/feather-icon.js') }}">
        </script>
        <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
        <!-- Sidebar jquery-->
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/sidebar-menu.js') }}"></script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/config.js') }}"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/bootstrap/bootstrap.min.js') }}">
        </script>
        <!-- Plugins JS start-->
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/chart/chartist/chartist.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/chart/chartist/chartist-plugin-tooltip.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/chart/knob/knob.min.js') }}"></script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/chart/knob/knob-chart.js') }}"></script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/chart/apex-chart/apex-chart.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/chart/apex-chart/stock-prices.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/prism/prism.min.js') }}"></script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/clipboard/clipboard.min.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/counter/jquery.waypoints.min.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/counter/jquery.counterup.min.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/counter/counter-custom.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/custom-card/custom-card.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/notify/bootstrap-notify.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/dashboard/default.js') }}"></script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/notify/index.js') }}/"></script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datepicker/date-picker/datepicker.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datepicker/date-picker/datepicker.en.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datepicker/date-picker/datepicker.custom.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatables/jquery.dataTables.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatables/datatable.custom.js') }}">
        </script>
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/tooltip-init.js') }}"></script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatable-extension/dataTables.select.min.js') }}">
        </script>

        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}">
        </script>
        <script
            src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/datatable/datatable-extension/custom.js') }}">
        </script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ asset('dmin_dashbaord_v21_html_css_js_bootstap5-main/assets/js/script.js') }}"></script>
        <!-- Plugin used-->
        <!-- Validator -->
        <script src="{{ asset('AdminLTE-2/validator.min.js') }}"></script>

        @stack('scripts')
    </body>

    </html>
