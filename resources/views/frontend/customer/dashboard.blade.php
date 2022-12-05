@extends('layouts.frontend')

@section('content')
@section('title') {{ __('Dashboard') }} @endsection
@section('breadcumbTitle') Dashboard @endsection
<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->
<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- :::::::::: Start My Account Section :::::::::: -->
                <div class="my-account-area">
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <div class="my-account-menu">
                                <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab" role="tablist">
                                    <li>
                                        <a class="active link--icon-left" id="pills-dashboard-tab" data-bs-toggle="pill" href="#pills-dashboard"
                                            role="tab" aria-controls="pills-dashboard" aria-selected="true"><i
                                                class="fas fa-tachometer-alt"></i> {{__('messages.profile')}}</a>
                                    </li>
                                    <li>
                                        <a id="pills-order-tab" class="link--icon-left" data-bs-toggle="pill" href="#pills-order" role="tab"
                                            aria-controls="pills-order" aria-selected="false"><i
                                                class="fas fa-shopping-cart"></i>{{__('messages.prev_order')}} </a>
                                    </li>  
                                    <li>
                                        <a id="pills-address-tab" class="link--icon-left" data-bs-toggle="pill" href="#pills-address" role="tab"
                                            aria-controls="pills-address" aria-selected="false"><i
                                                class="fas fa-map-marker-alt"></i> {{__('messages.address')}} </a>
                                    </li>
                                    <li>
                                        <a id="pills-account-tab" class="link--icon-left" data-bs-toggle="pill" href="#pills-account" role="tab"
                                            aria-controls="pills-account" aria-selected="false"><i class="fas fa-user"></i>
                                            {{__('messages.act_details')}}</a>
                                    </li>
                                    <li>
                                        <a class="link--icon-left" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="fas fa-sign-out-alt"></i> {{__('messages.logout')}} </a>
                                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}</form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="tab-content my-account-tab" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                                    aria-labelledby="pills-dashboard-tab">
                                    <div class="my-account-dashboard account-wrapper">
                                        <div class="d-flex justify-content-between mb-2">
                                        <h4 class="account-title">{{__('messages.profile')}}</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="profile-widgets py-3 pb-0">
                                                            <div class="text-center">
                                                                <div> 
                                                                    @if( !empty( Auth::user()->avater ) )
                                                                    
                                                                    <img src="{{ asset('frontend/assets/img/user/'. Auth::user()->avater) }}" alt="Profile" style="width: 100px;" class="avatar-lg mx-auto">
                                                                    @else
                                                                    <img src="{{ asset('frontend/assets/img/user/default.jpg') }}" alt="Profile" style="width: 100px;" class="avatar-lg mx-auto">
                                                                    @endif
                                                                </div> 

                                                                <div class="row mt-4">
                                                                    <div class="col-md-12">
                                                                        <h6 class="text-muted">
                                                                        {{__('messages.email')}}
                                                                        </h6>
                                                                        <h5 class="mb-0">{{ Auth::user()->email }}</h5>
                                                                    </div> 
                                                                </div> 
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <p class="mb-2">{{__('messages.total_orders')}}</p>
                                                                <h4 class="mb-0">{{ App\Models\Backend\Order::CustomerOrderCount(Auth::user()->id) }}</h4>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="text-end">
                                                                    <div>
                                                                        <i class="fas fa-shopping-cart text-info" style="font-size: 30px;"></i>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mt-4">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <p class="mb-2">{{__('messages.total_spend')}}</p>
                                                                <h4 class="mb-0">{{ App\Models\Backend\Order::CustomerSpendAmount(Auth::user()->id) }}</h4>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="text-end">
                                                                    <div>
                                                                        <i class="fas fa-euro-sign text-primary" style="font-size: 30px;"></i>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                       
                                        <div class="welcome-dashboard m-t-30">
                                            <p><strong>{{__('messages.personal_info')}}</strong></p>
                                        </div>
                                        <p class="mt-2">{{ Auth::user()->bio }}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                                    <div class="my-account-order account-wrapper">
                                        <h4 class="account-title">{{__('messages.orders')}}</h4>
                                        <div class="account-table text-center m-t-30 table-responsive">
                                            <div class="table-content table-responsive cart-table-content m-t-30">
                                                <table>
                                                    <thead class="gray-bg" >
                                                        <tr>
                                                            <th class="no">{{__('messages.no')}}</th>
                                                            <th class="name">{{__('messages.name')}}</th>
                                                            <th class="date">{{__('messages.date')}} </th>
                                                            <th class="status">{{__('messages.status')}} </th> 
                                                            <th class="action">{{__('messages.action')}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach( App\Models\Backend\Order::customerOrderList(Auth::user()->id) as $key => $data )
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td> {{ $data->items[0]->product->name }} </td>
                                                        <td>{{ date('d-m-Y', strtotime($data->created_at)); }}</td>
                                                        <td>{{ $data->status }}</td> 
                                                        <td>
                                                            <a href="{{ route('customer.invoice', $data->id) }}" title="View" class="btn text-white btn-info p-2 ms-2"><i class="fas fa-eye"></i></a> 
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div> 
                                <div class="tab-pane fade" id="pills-address" role="tabpanel"
                                    aria-labelledby="pills-address-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="my-account-address account-wrapper">
                                                <h4 class="account-title"> {{__('messages.profile')}} {{__('Huis adres')}}</h4>
                                                <div class="account-address m-t-30">
                                                    <p>{{__('Adres')}}: {{ Auth::user()->homeaddress }}</p>
                                                    <p>{{__('Mobiel')}}: {{ Auth::user()->phone }}</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="my-account-address account-wrapper">
                                                <h4 class="account-title">{{__('messages.profile')}} {{__('Kantoor adres') }}</h4>
                                                <div class="account-address m-t-30">
                                                    <p>{{__('Adres')}}: {{ Auth::user()->officeaddress }}</p>
                                                    <p>{{__('Mobiel')}}: {{ Auth::user()->phone }}</p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-account" role="tabpanel"
                                    aria-labelledby="pills-account-tab">
                                    <div class="my-account-details account-wrapper">
                                        <h4 class="account-title">{{__('messages.profile')}} {{__('Accountgegevens')}}</h4>

                                        <div class="account-details">
                                            <form action="{{ route('customer.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">                                                
                                            <div class="row">
                                                @csrf
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="{{__('messages.enter_name')}}" name="name" value="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="email" placeholder="{{__('E-mailadres')}}" name="email" value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="{{__('Mobiel nummer')}}" name="phone" value="{{ Auth::user()->phone }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="{{__('Postcode ')}}" name="zipcode" value="{{ Auth::user()->zipcode }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-box__single-group">
                                                        <label for="">{{ __('messages.image') }}</label>
                                                        <input type="file" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-box__single-group">
                                                        <label for="">{{__('messages.profile')}}</label>
                                                        @if( !empty(Auth::user()->avater) )
                                                        <img src="{{ asset('frontend/assets/img/user/'. Auth::user()->avater ) }}" alt="a" class="img-fluid" style="width: 40px;" id="image">
                                                        @else
                                                        <img src="{{ asset('frontend/assets/img/user/default.jpg') }}" alt="a" class="img-fluid" style="width: 40px;" id="image">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="{{ __('BTW nummer') }}" name="vat" value="{{ Auth::user()->vat }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="{{ __('Kvk nummer') }}" name="kvk" value="{{ Auth::user()->kvk }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="{{__('Thuis adres')}}" name="homeaddress" value="{{ Auth::user()->homeaddress }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="{{__('Kantoor adres') }}" name="officeaddress" value="{{ Auth::user()->officeaddress }}">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <div class="form-box__single-group">
                                                        <textarea placeholder="Bio" name="bio" id="" cols="10" rows="3">{{ Auth::user()->bio }}</textarea>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <button type="submit" class="btn btn--box btn--radius btn--small btn--black btn--black-hover-green btn--uppercase font--bold">{{ __('messages.save_info')}}</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-box__single-group">
                                                        <h5 class="title">{{__('messages.change_pass')}}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-box__single-group">
                                                        <input type="password" name="old_password" placeholder="{{__('messages.current_pass')}} ">
                                                        <span class="text-danger">@error('old_password'){{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="password" name="password" placeholder="{{__('messages.new_pass')}}">
                                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="password" name="password_confirmation" placeholder="{{__('messages.confirm_pass')}} ">
                                                        <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <button type="submit" class="btn btn--box btn--radius btn--small btn--black btn--black-hover-green btn--uppercase font--bold">{{ __('messages.save_change')}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- :::::::::: End My Account Section :::::::::: -->
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection