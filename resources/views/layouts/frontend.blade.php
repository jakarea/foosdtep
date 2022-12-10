<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Food Step | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     @if(Auth::check())
        <meta name="user_id" content="{{ Auth::user()->id }}">
    @else
        <meta name="user_id" content="0">
    @endif

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/vendor.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugin/plugins.min.css') }}"/>
    <!-- Sweetalert2 -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom/style.css') }}">

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

    <!-- cookie view start -->
    @include('cookie-consent::index') 
    <!-- cookie view end -->

    <!-- ::::::  Start  Footer ::::::  -->
    @include('frontend.partials.footer')
    <!-- ::::::  End  Footer ::::::  -->

    

    <script src="{{ asset('frontend/assets/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugin/plugins.min.js') }}"></script>
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- Notification script -->
<script>
$(function(){

    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    })

    //Success Message 
    @if(Session::has('success'))
    Toast.fire({
        icon: 'success',
        title: '{{ Session::get("success") }}',
    })
    @endif

    // Error Message
    @if(Session::has('error'))
    Toast.fire({
        icon: 'error',
        title: '{{ Session::get("error") }}',
    })
    @endif

});
</script>

@yield('script')
</body>

</html>
