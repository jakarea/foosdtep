<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Food Step | Grocery and Organic Food Shop HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <!-- <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png"> -->

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/vendor.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugin/plugins.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.min.css') }}">

</head>

<body>
    
    <!-- ::::::  Start Header Section  ::::::  -->
    <header>
        <!--  Start Large Header Section   -->
        <div class="header d-none d-lg-block">
            @include('frontend.partials.header')
            @include('frontend.partials.searchbar')
        </div> <!--  End Large Header Section  -->

        <!-- mobile responsive menu start -->
        @include('frontend.partials.mobile-menu')
        <!-- mobile responsive menu end -->

        <div class="offcanvas-overlay"></div>
    </header> 
    <!-- :::::: End Header Section ::::::  -->  

    <div class="main-section">  
        @yield('content') 
    </div>

    <!-- ::::::  Start  Footer ::::::  -->
    @include('frontend.partials.footer')
    <!-- ::::::  End  Footer ::::::  -->

    <script src="{{ asset('frontend/assets/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugin/plugins.min.js') }}"></script>

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
