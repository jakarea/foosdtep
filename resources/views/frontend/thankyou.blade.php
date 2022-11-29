@extends('layouts.frontend')
@section('title') {{ __('text.thank_you') }} @endsection
@section('breadcumbTitle') {{ __('text.thank_you') }} @endsection

@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <!-- Start Client Shipping Address -->
            <div class="col-lg-8 offset-2">
            @if( !empty($order) )
                <h5 class="section-content__title">{{__('text.thank_you_for_order')}}</h5>
                <div class="px-4 py-5">
                <h5 class="text-uppercase"> {{ __('Author Name : ') }} {{ Auth::user()->name }}</h5>
                <span>{{__('text.we_received_your_order') }}</span> <br>
                <span class="theme-color mt-3 d-block">{{__('text.order_summery') }} </span>
                <div class="mb-3">
                    <hr class="new1">
                </div>

                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">{{__('text.order_number') }} :</span>
                    <span class="text-muted">{{ $order->order_number }}</span>
                </div>

                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">{{__('text.order_date') }} :</span>
                    <span class="text-muted">{{ $order->created_at }}</span>
                </div>

                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">{{__('text.order_total') }} :</span>
                    <span class="text-muted">{{ $order->grand_total }}</span>
                </div>
                
                <div class="d-flex justify-content-between mt-3">
                    <span class="font-weight-bold">{{__('text.total') }}</span>
                    <span class="font-weight-bold theme-color">{{ $order->grand_total }}</span>
                </div>  

                <div class="text-center mt-5">
                    <a href="{{ route('customer.dashboard') }}" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">{{__('text.go_to_dashboard')}}</a>
                </div>                   

            @else
            <h5 class="section-content__title text-center">{{__('text.no_order_found') }} </h5>
            @endif
            </div> <!-- End Order Wrapper -->
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection