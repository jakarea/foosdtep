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
                <li class="menu-title">{{__('b.menu') }}</li>

                <li class="@if( Route::currentRouteNamed('admin.dashboard')) mm-active @endif">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect-@if( Route::currentRouteNamed('admin.dashboard')) active @endif">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a> 
                </li>
                <li class="@if( Route::currentRouteNamed('category.index')) mm-active @endif">
                    <a href="{{ route('category.index') }}" class="waves-effect-@if( Route::currentRouteNamed('category.index')) active @endif">
                        <i class="mdi mdi-newspaper"></i>
                        <span>{{ __('b.categories')}}</span>
                    </a>
                </li>
                <li class="@if( Route::currentRouteNamed('contact.index')) mm-active @endif">
                    <a href="{{ route('contact.index') }}" class="waves-effect-@if( Route::currentRouteNamed('contact.index')) active @endif">
                        <i class="mdi mdi-newspaper"></i>
                        <span>{{ __('b.contact')}}</span>
                    </a>
                </li>
                <li class="@if( Route::currentRouteNamed('blog.index')) mm-active @endif">
                    <a href="{{ route('blog.index') }}" class="waves-effect-@if( Route::currentRouteNamed('blog.index')) active @endif">
                        <i class="mdi mdi-newspaper"></i>
                        <span>{{ __('b.blogs')}}</span>
                    </a>
                </li>
                <li class="@if( Route::currentRouteNamed('slider.index')) mm-active @endif">
                    <a href="{{ route('slider.index') }}" class="waves-effect-@if( Route::currentRouteNamed('slider.index')) active @endif">
                        <i class="mdi mdi-newspaper"></i>
                        <span>{{ __('b.sliders')}}</span>
                    </a>
                </li>
                <li class="@if( Route::currentRouteNamed('orders.index')) mm-active @endif">
                    <a href="{{ route('orders.index') }}" class="waves-effect-@if( Route::currentRouteNamed('orders.index')) active @endif">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="badge rounded-pill bg-danger float-end">{{ App\Models\Backend\Order::pendingOrderCount() }}</span>
                        <span>{{ __('b.order')}}</span>
                    </a>
                </li>
                <li class="menu-title">{{ __('b.user_interface')}}</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-book"></i>
                        <span>{{ __('b.prod_attr')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    <li class="@if( Route::currentRouteNamed('brand.index')) mm-active @endif">
                        <a href="{{ route('brand.index') }}" class="waves-effect-@if( Route::currentRouteNamed('brand.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>{{ __('b.brand')}}</span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('productgroup.index')) mm-active @endif">
                        <a href="{{ route('productgroup.index') }}" class="waves-effect-@if( Route::currentRouteNamed('productgroup.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>{{ __('b.product_group')}}</span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('faith.index')) mm-active @endif">
                        <a href="{{ route('faith.index') }}" class="waves-effect-@if( Route::currentRouteNamed('faith.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>{{ __('b.faith')}} </span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('line.index')) mm-active @endif">
                        <a href="{{ route('line.index') }}" class="waves-effect-@if( Route::currentRouteNamed('line.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>{{ __('b.line')}} </span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('content.index')) mm-active @endif">
                        <a href="{{ route('content.index') }}" class="waves-effect-@if( Route::currentRouteNamed('content.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>{{ __('b.content')}} </span>
                        </a>
                    </li>
                    <li class="@if( Route::currentRouteNamed('AllergensDP.index')) mm-active @endif">
                        <a href="{{ route('AllergensDP.index') }}" class="waves-effect-@if( Route::currentRouteNamed('AllergensDP.index')) active @endif">
                            <i class="mdi mdi-newspaper"></i>
                            <span>{{ __('b.all_dsngrp')}}</span>
                        </a>
                    </li>
                    </ul>

                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-camera-timer"></i>
                        <span>{{ __('b.prod_manage')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="@if( Route::currentRouteNamed('product.index')) mm-active @endif">
                            <a href="{{ route('product.index') }}" class="waves-effect-@if( Route::currentRouteNamed('product.index')) active @endif">
                                <i class="mdi mdi-camera-timer"></i>
                                <span>{{ __('b.prod_list')}} </span>
                            </a>
                        </li>
                        <li class="@if( Route::currentRouteNamed('product.create')) mm-active @endif">
                            <a href="{{ route('product.create') }}" class="waves-effect-@if( Route::currentRouteNamed('product.create')) active @endif">
                                <i class="mdi mdi-camera-timer"></i>
                                <span>{{ __('b.product_create')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account"></i>
                        <span>{{ __('b.user_management')}} </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="@if( Route::currentRouteNamed('user.index')) mm-active @endif">
                            <a href="{{ route('user.index') }}" class="waves-effect-@if( Route::currentRouteNamed('user.index')) active @endif">
                                <i class="mdi mdi-account"></i>
                                <span>{{ __('b.user_list')}}</span>
                            </a>
                        </li>
                        <li class="@if( Route::currentRouteNamed('user.create')) mm-active @endif">
                            <a href="{{ route('user.create') }}" class="waves-effect-@if( Route::currentRouteNamed('user.create')) active @endif">
                                <i class="mdi mdi-account"></i>
                                <span>{{ __('b.user_create')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('discounts.index') }}" class="waves-effect">
                        <i class="fab fa-dochub"></i>
                        <span>{{ __('b.discount')}} </span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-settings"></i>
                        <span>{{ __('b.settings')}} </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="@if( Route::currentRouteNamed('setting.index')) mm-active @endif"><a href="{{ route('setting.index') }}" class="waves-effect-@if( Route::currentRouteNamed('setting.index')) active @endif">{{ __('b.b_settings')}}</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->