<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
<div class="page-breadcrumb" style="background-image: url({{ asset('frontend/assets/img/hero/hero-home-1-img-1.webp') }}); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="{{ route('home') }}">{{ __('home') }}</a></li>
                    <li class="page-breadcrumb__nav active">@yield('breadcumbTitle')</li>
                </ul> -->

                <a href="{{ route('home') }}">{{ __('home') }} ></a>
                <span>@yield('breadcumbTitle')</span>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->