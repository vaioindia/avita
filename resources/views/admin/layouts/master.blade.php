<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="16x16" href="{{ asset('assets/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png ') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <!-- CSS SECTION -->
        @yield('css')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <!-- CDN LINK CSS & BOOTSTRAP 4 -->
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <link  rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
        <!-- FONTAWESOME CDN LINK -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"  />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    </head>
    <body class="sb-nav-fixed">
        <!-- Header SEction Start -->
        @include('admin.partials.header')
        <!-- Header Section End -->

        <div id="layoutSidenav">
        <!-- Sidebar section strat -->
        @include('admin.partials.sidebar')
        <!-- sidebar section End -->
            <div id="layoutSidenav_content">
        <!-- section content  -->
        @yield('content')
        <!-- section content  -->

        <!-- Footer part start -->
        @include('admin.partials.footer')
        <!-- Footer section End -->
            </div>

        </div>
        <!--   Core JS Files   -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
        @yield('scripts')
        <script type="text/javascript" defer src="{{ asset('js/scripts.js') }}"></script>
        <!-- <script type="text/javascript" defer src="{{ asset('assets/demo/Chart.min.js') }}"></script> -->
        <!-- <script type="text/javascript" defer src="{{ asset('assets/demo/chart-area-demo.js') }}"></script> -->
        <!-- <script type="text/javascript" defer src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>  -->
        <script type="text/javascript" defer src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
        <!-- <script type="text/javascript" defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script> -->
        <script type="text/javascript" defer src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" defer src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


    </body>
</html>
