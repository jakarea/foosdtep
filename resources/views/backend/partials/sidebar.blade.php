<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div class="h-100">
        <div class="user-wid text-center py-4">
            <div class="user-img">

                @if( \Auth::user()->avater != null )
                <img src="{{ asset('frontend/assets/img/user/'. \Auth::user()->avater) }}" alt="" class="avatar-md mx-auto rounded-circle">
                @else
              
                <img src="{{asset('backend/assets/img/user/default.jpg')}}" alt="" class="avatar-md mx-auto rounded-circle">
                @endif

            </div>
            <div class="mt-3">
                <a href="#" class="text-dark fw-medium font-size-16">{{ auth()->user()->name }}</a>
                <p class="text-body mt-1 mb-0 font-size-13">
                    {{ auth()->user()->roles['0']->name }}
                </p>
            </div>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li class="@if( Route::currentRouteNamed('admin.dashboard')) mm-active @endif">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect-@if( Route::currentRouteNamed('admin.dashboard')) active @endif">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a> 
                </li>
                <li class="@if( Route::currentRouteNamed('category.index')) mm-active @endif">
                    <a href="{{ route('category.index') }}" class="waves-effect-@if( Route::currentRouteNamed('category.index')) active @endif">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="menu-title">User Interface</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-book"></i>
                        <span>Product Attributes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    <li class="@if( Route::currentRouteNamed('brand.index')) mm-active @endif">
                        <a href="{{ route('brand.index') }}" class="waves-effect-@if( Route::currentRouteNamed('brand.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>Brand</span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('productgroup.index')) mm-active @endif">
                        <a href="{{ route('productgroup.index') }}" class="waves-effect-@if( Route::currentRouteNamed('productgroup.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>Productgroup</span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('faith.index')) mm-active @endif">
                        <a href="{{ route('faith.index') }}" class="waves-effect-@if( Route::currentRouteNamed('faith.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>Faith</span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('line.index')) mm-active @endif">
                        <a href="{{ route('line.index') }}" class="waves-effect-@if( Route::currentRouteNamed('line.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>Line</span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('content.index')) mm-active @endif">
                        <a href="{{ route('content.index') }}" class="waves-effect-@if( Route::currentRouteNamed('content.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>Content</span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('AllergensDP.index')) mm-active @endif">
                        <a href="{{ route('AllergensDP.index') }}" class="waves-effect-@if( Route::currentRouteNamed('AllergensDP.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>AllergensDP</span>
                        </a>
                    </li>
                    </ul>

                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account"></i>
                        <span>Product Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="@if( Route::currentRouteNamed('product.index')) mm-active @endif">
                            <a href="{{ route('product.index') }}" class="waves-effect-@if( Route::currentRouteNamed('product.index')) active @endif">
                                <i class="mdi mdi-account"></i>
                                <span>Product List</span>
                            </a>
                        </li>
                        <li class="@if( Route::currentRouteNamed('product.create')) mm-active @endif">
                            <a href="{{ route('product.create') }}" class="waves-effect-@if( Route::currentRouteNamed('product.create')) active @endif">
                                <i class="mdi mdi-account"></i>
                                <span>Product Create</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account"></i>
                        <span>User Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="@if( Route::currentRouteNamed('user.index')) mm-active @endif">
                            <a href="{{ route('user.index') }}" class="waves-effect-@if( Route::currentRouteNamed('user.index')) active @endif">
                                <i class="mdi mdi-account"></i>
                                <span>User List</span>
                            </a>
                        </li>
                        <li class="@if( Route::currentRouteNamed('user.create')) mm-active @endif">
                            <a href="{{ route('user.create') }}" class="waves-effect-@if( Route::currentRouteNamed('user.create')) active @endif">
                                <i class="mdi mdi-account"></i>
                                <span>User Create</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('discount.index') }}" class="waves-effect">
                        <i class="fab fa-dochub"></i>
                        <span>Discount</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-settings"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">Profile</a></li>
                        <li><a href="email-read.html">General</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->