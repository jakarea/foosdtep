<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-end">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">
                    </div>
                </div>
 

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge rounded-pill bg-danger ">{{ count( auth()->user()->unreadNotifications ) }}</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small" id="mark-all"> Mark all as read</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                        @forelse (auth()->user()->unreadNotifications as $notification)
                            <a href="{{ route('orders.index') }}" data-id="{{ $notification->id }}" data-attr="{{ route('markNotification', $notification->id) }}" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="bx bx-cart"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">{{ $notification->data['username'] }} Order is placed </h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have an new order from {{ $notification->data['username'] }} at {{ $notification->created_at->format('M d, H:i A') }}</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> {{$notification->created_at->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                        <a href="#" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">No Notification Found!!!</h6>
                                    </div>
                                </div>
                            </a>
                        @endforelse 
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 " href="{{ route('orders.index') }}">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        @if( \Auth::user()->avater != null )
                            <img src="{{ asset('frontend/assets/img/user/'. \Auth::user()->avater) }}" alt="" class="rounded-circle header-profile-user">
                        @else
                            <img class="rounded-circle header-profile-user" src="{{asset('backend/assets/img/user/default.jpg')}}"
                            alt="Header Avatar">
                        @endif

                        
                        <span class="d-none d-xl-inline-block ms-1">{{ auth()->user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="{{ route('user.show', \Auth::user()->id) }}"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                            Profile</a> 
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i
                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    </div>
                </div>


            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{ url('/auth/dashboard') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            
                            <img src="{{asset('backend/assets/img/logo/logo.png')}}" alt="Logo" height="40">
                        </span>
                        <span class="logo-lg">
                        
                        <img src="{{asset('backend/assets/img/logo/logo.png')}}" alt="Logo" height="40">
                        </span>
                    </a>

                    <a href="{{ url('/auth/dashboard') }}" class="logo logo-light">
                        <span class="logo-sm">
                         
                        <img src="{{asset('backend/assets/img/logo/logo.png')}}" alt="Logo" height="40">
                        </span>
                        <span class="logo-lg">
                         
                        <img src="{{asset('backend/assets/img/logo/logo.png')}}" alt="Logo" height="40">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            </div>

        </div>
    </div>
</header>
