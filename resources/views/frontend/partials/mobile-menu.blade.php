<!--  Start Mobile Header Section   -->
<div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <ul class="header__mobile--leftside d-flex align-items-center justify-content-start">
                            <li>
                                <div class="header__mobile-logo">
                                    <a href="{{url('/')}}" class="header__mobile-logo-link">
                                        <img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="" class="header__mobile-logo-img">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- Start User Action -->
                        <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end"> 
                            <!-- Start Header Add Cart Box -->
                            <li>
                                <a href="{{ route('product.cart') }}">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="wishlist-item-count pos-absolute">{{ count((array) session('cart')) }}</span>
                                </a>
                            </li> <!-- End Header Add Cart Box -->
                            <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a></li>

                        </ul>   <!-- End User Action -->
                    </div>
                </div> 
            </div>
        </div> <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <span class="offcanvas__top-text">{{ __('text.menu')}}</span>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            
            <div class="offcanvas-inner">  
                 <!-- Start Mobile User Action -->
                 
                <div class="offcanvas-menu">
                    <ul>
                        <li> <a href="{{ url('/') }}" >{{ __('text.home')}}</a></li>
                        <li>
                            <a href="{{ url('/about') }}">{{ __('text.about_us')}}</a>
                        </li> <!-- End Single Nav link-->

                        <!--Start Single Nav link-->
                        <li>
                                <a href="{{ route('products') }}">{{ __('text.products')}}</a>
                        </li> <!-- End Single Nav link--> 
                        
                        <!--Start Single Nav link-->
                        <li>
                                <a href="{{ url('/contact') }}">{{ __('text.contacts')}}</a>
                        </li>
                    </ul>
                </div>
            </div> 
        </div> <!--  End Mobile-offcanvas Menu Section   -->
 