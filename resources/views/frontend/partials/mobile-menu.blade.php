<!--  Start Mobile Header Section   -->
<div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20 pt-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="slogan-bttn-wrap">
                    <a href="{{url('register')}}">{{ __('text.become_member')}}</a>
                    <a href="{{url('login')}}"><i class="fas fa-lock"></i>{{ __('text.login')}}</a>
                </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <ul class="header__mobile--leftside d-flex align-items-center justify-content-start" style="width: 80px;">
                        <li>
                            <div class="header__mobile-logo">
                                <a href="{{url('/')}}" class="header__mobile-logo-link">
                                    <img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="" class="header__mobile-logo-img">
                                </a>
                            </div>
                        </li>
                    </ul>
                    
                    <!-- Start User Action -->
                    <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end" style="margin-left: 12px;"> 
                        <!-- Start Header Add Cart Box -->
                        <li>
                            <a href="{{ route('product.cart') }}">
                                <img src="{{asset('frontend/assets/img/list.png')}}" alt="a" class="img-fluid" width="25">
                                <span class="wishlist-item-count pos-absolute">{{ count((array) session('cart')) }}</span>
                            </a>
                        </li> <!-- End Header Add Cart Box -->
                        <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a></li>
                    </ul>   
                    <!-- End User Action -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3">
               
                <form class="header-search" action="{{ route('autocompleteSearch') }}" method="post">
                    @csrf
                    <div class="header-search__content pos-relative">
                        <input type="text" class="search__headerm" id="search__header" name="search" placeholder="Zoeken" required />
                        <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
                <div id="result_query" class="car result_querym">
                    <div class="card-body result_html"></div>
                </div>
            
                </div>
            </div> 
        </div>
    </div> 
        <!--  Start Mobile Header Section   -->

        <!--  Start Mobile-offcanvas Menu Section   -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="offcanvas__top">
                <!-- <span class="offcanvas__top-text">{{ __('text.menu')}}</span> -->
                <ul class="header__user-action-icon">
                    <!-- Start Header Wishlist Box -->
                    @if(!Auth::check())
                    <li>
                        <a href="{{ url('login') }}">
                            <i class="fas fa-sign-in"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box --> 
                    @endif
                    @if(Auth::check() && Auth::user()->userrole[0]->slug == 'admin')
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box --> 
                    @endif
                    @if(Auth::check() && Auth::user()->userrole[0]->slug == 'customer')
                    <li>
                        <a href="{{ route('customer.dashboard') }}">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box --> 
                    @endif 
                </ul>
                <button class="offcanvas-close"><i class="fal fa-times"></i></button>
            </div>
            
            <div class="header-menu-vertical pos-relative mb-2">
                        <h4 class="menu-title link--icon-left d-flex justify-content-between"><span><i class="far fa-align-left"></i>{{ __('text.categories')}}</span> <i class="far fa-angle-down"></i></h4>
                        <ul class="menu-content pos-absolute">
                        @foreach(App\Models\Backend\Category::all() as $key => $category)
                            <li class="menu-item"><a href="{{ route('show.category', $category->slug)}}">{{ $category->name }} </a></li> 
                        @endforeach
                        </ul>
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
                    <!-- Start Wishlist-AddCart -->

                    
                </div>
            </div> 
        </div> <!--  End Mobile-offcanvas Menu Section   -->
 