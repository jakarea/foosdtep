@extends('layouts.backend')
@section('title') Create User @endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="profile-widgets py-3 pb-0" style="position: relative;">
                <a href="{{ route('user.edit', $user->id) }}" style="font-size: 22px; position: absolute; right: 0px; top: 0px;"><i class="mdi mdi-pencil-outline"></i></a>
                    <div class="text-center">
                    
                        <div class="">
                        @if( $user->avater != null )
                            <img src="{{ asset('frontend/assets/img/user/'. $user->avater) }}" alt="Avater"
                                class="avatar-lg mx-auto img-thumbnail rounded-circle img-fluid">
                        @else
                            <img src="{{asset('backend/assets/img/user/default.jpg')}}" alt="Avater"
                                class="avatar-lg mx-auto img-thumbnail rounded-circle img-fluid">
                        @endif 
 

                            <div class="online-circle"><i class="fas fa-circle text-success"></i>
                            </div>
                        </div> 

                        <div class="row mt-4 border border-start-0 border-end-0 p-3" style="border-bottom: 0px!important;">
                            <div class="col-md-12">
                                <h6 class="text-muted">
                                    Email
                                </h6>
                                <h5 class="mb-0">{{ $user->email }} </h5>
                            </div> 
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-xl-9">
        <div class="row">
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">Total Orders</p>
                                <h4 class="mb-0">{{ count(App\Models\Backend\Order::where('user_id', Auth::user()->id)->get() ) }}</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        <i class="mdi mdi-cart text-success ml-1" style="font-size: 30px;"></i>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">Total Discount</p>
                                <h4 class="mb-0">0</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        <i class="mdi mdi-cart text-primary ml-1" style="font-size: 30px;"></i>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">User Status</p>
                                <h4 class="mb-0">Active</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        <i class="mdi mdi-cart text-secondary ml-1" style="font-size: 30px;"></i>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-3">Personal Information</h5>

            <p class="card-title-desc">
                {{ $user->bio }}
            </p>


            <div class="row">
                <div class="col-md-6">
                    <p class="font-size-12 text-muted mb-1">Email Address</p>
                    <h6 class="">{{ $user->email }}</h6>
                </div>
                <div class="col-md-6">
                <p class="font-size-12 text-muted mb-1">Phone number</p>
                <h6 class="">{{ $user->phone }}</h6>
                </div>
            </div> 

            <div class="mt-3">
                <p class="font-size-12 text-muted mb-1">Office Address</p>
                <h6 class="">{{ $user->officeaddress }}</h6>
            </div>

        </div>
    </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Recent Orders</h4>

                <div class="table-responsive">
                    <table class="table table-centered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Order Id</th> 
                                <th scope="col">Amount</th>
                                <th scope="col">Order Status</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( App\Models\Backend\Order::orderby('id', 'desc')->where('user_id', Auth::user()->id)->get() as $order )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $order->order_number }}</td> 
                                <td>{{ $order->order_number }}</td> 
                                <td>{{ __('$'). $order->grand_total }}</td> 
                                <td>
                                    @if( $order->status == 'pending' )
                                    <span class="badge badge-soft-danger font-size-12">Pending</span>
                                    @elseif( $order->status == 'processing' )
                                    <span class="badge badge-soft-info font-size-12">Processing</span>
                                    @elseif( $order->status == 'completed' )
                                    <span class="badge badge-soft-success font-size-12">Completed</span>
                                    @elseif( $order->status == 'decline' )
                                    <span class="badge badge-soft-warning font-size-12">Declined</span>
                                    @endif
                                </td>
                                <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-sm">Details</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection