 <!-- Start Header Center area -->
 <div class="header__center sticky-header p-tb-10">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <!-- Start Logo -->
                <div class="header__logo">
                    <a href="{{ url('/') }}" class="header__logo-link img-responsive">
                        <img class="header__logo-img img-fluid" src="{{ url('frontend/assets/img/logo/logo.png') }}" alt="Food Step">
                    </a>
                </div> <!-- End Logo -->
                    <!-- Start Header Menu -->
                    <div class="header-menu">
                    <nav>
                        <ul class="header__nav">
                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="{{ url('/') }}" class="header__nav-link">Home</a>
                            </li> <!-- End Single Nav link-->
                            
                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                    <a href="{{ url('/about') }}" class="header__nav-link">About Us</a>
                            </li> <!-- End Single Nav link-->

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                    <a href="{{ route('products') }}" class="header__nav-link">Product</a>
                            </li> <!-- End Single Nav link--> 
                            
                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                    <a href="{{ url('/contact') }}" class="header__nav-link">Contact</a>
                            </li> <!-- End Single Nav link-->

                        </ul>
                    </nav>
                </div> <!-- End Header Menu -->
                <!-- Start Wishlist-AddCart -->
                <ul class="header__user-action-icon">
                    <!-- Start Header Wishlist Box -->
                    @if(!Auth::check())
                    <li>
                        <a href="{{ route('customer.loginform') }}">
                            <i class="fas fa-sign-in"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box --> 
                    @endif

                    @if(Auth::check())
                    <li>
                        <a href="{{ route('customer.dashboard') }}">
                            <i class="icon-users"></i>
                        </a>
                    </li> <!-- End Header Wishlist Box --> 
                    @endif
                    <!-- Start Header Add Cart Box -->
                    <li>
                        <a href="{{ route('product.cart') }}">
                            <i class="icon-shopping-cart"></i>
                            <span class="wishlist-item-count pos-absolute">{{ count((array) session('cart')) }}</span>
                        </a>
                    </li> <!-- End Header Add Cart Box -->
                </ul> 
            </div>
        </div>
    </div>
</div> <!-- End Header Center area -->