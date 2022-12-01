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
                                    {{__('b.email') }}
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
                                <p class="mb-2">{{ __('b.total_order')  }}</p>
                                <h4 class="mb-0">{{ count(App\Models\Backend\Order::where('user_id',$user->id)->get() ) }}</h4>
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
                                <p class="mb-2">{{__('b.total_discount') }}</p>
                                <h4 class="mb-0">{{ count(App\Models\Backend\Discount::where('user_id', $user->id)->get() ) }}</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        <i class="mdi mdi-currency-usd  text-primary ml-1" style="font-size: 30px;"></i>
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
                                <p class="mb-2">{{__('b.status') }}</p>
                                <h4 class="mb-0">{{ $user->status }}</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div> 
                                        <i class="mdi mdi-eye text-secondary ml-1" style="font-size: 30px; color: green;"></i> 
                                        
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
            <h5 class="card-title mb-3">{{ __('b.personal_info') }}</h5>

            <p class="card-title-desc">
                {{ $user->bio }}
            </p>


            <div class="row">
                <div class="col-md-6">
                    <p class="font-size-12 text-muted mb-1">{{ __('b.email') }}</p>
                    <h6 class="">{{ $user->email }}</h6>
                </div>
                <div class="col-md-6">
                <p class="font-size-12 text-muted mb-1">{{ __('b.phone') }}</p>
                <h6 class="">{{ $user->phone }}</h6>
                </div>
            </div> 

            <div class="mt-3">
                <p class="font-size-12 text-muted mb-1">{{ __('b.offc_addres') }}</p>
                <h6 class="">{{ $user->officeaddress }}</h6>
            </div>

        </div>
    </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">{{ __('b.recent_orders') }}</h4>

                <div class="table-responsive">
                    <table class="table table-centered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('b.no') }}</th>
                                <th scope="col">{{ __('b.product') }} {{ __('b.name') }}</th>
                                <th scope="col">{{ __('b.order_id') }}</th> 
                                <th scope="col">{{ __('b.amount') }}</th>
                                <th scope="col">{{ __('b.status') }}</th>
                                <th scope="col" colspan="2">{{ __('b.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php 
                            $i = 1;
                        @endphp
                        @foreach( App\Models\Backend\Order::orderby('id', 'desc')->where('user_id', $user->id)->get() as $order )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->order_number }}</td> 
                                <td>{{ $order->order_number }}</td> 
                                <td>{{ __('€'). $order->grand_total }}</td> 
                                <td>
                                    @if( $order->status == 'pending' )
                                    <span class="badge badge-soft-danger font-size-12">{{__('b.pending') }}</span>
                                    @elseif( $order->status == 'processing' )
                                    <span class="badge badge-soft-info font-size-12">{{__('b.processing') }}</span>
                                    @elseif( $order->status == 'completed' )
                                    <span class="badge badge-soft-success font-size-12">{{__('b.completed') }}</span>
                                    @elseif( $order->status == 'decline' )
                                    <span class="badge badge-soft-warning font-size-12">{{__('b.decline') }}</span>
                                    @endif
                                </td>
                                <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-sm">{{__('b.details') }}</a></td>
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