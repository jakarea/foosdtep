
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8" />
    <title>Login | Qovex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('backend/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ url('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="/" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    @yield('content')

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="{{ url('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ url('backend/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <script src="{{ url('backend/assets/js/app.js') }}"></script>

</body>

</html>