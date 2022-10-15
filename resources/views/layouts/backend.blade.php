<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Qovex - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
        <!-- All Header Css -->
        @include('backend.partials.css')

    </head>

    <body data-layout="detached" data-topbar="colored">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">
        @include('backend.partials.header')   
        @include('backend.partials.sidebar')   


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                @include('backend.partials.breadcrumb')  

                    @yield('content')
 
                </div>
                <!-- End Page-content -->
                @include('backend.partials.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    @include('backend.partials.script')

</body>

</html>