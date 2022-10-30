@extends('layouts.frontend')
@section('title') {{ __('Thank you') }} @endsection
@section('breadcumbTitle') {{ __('Thank you') }} @endsection

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
                <h5 class="section-content__title">Thank you for purchasing our product</h5>
                <div class="px-4 py-5">
                <h5 class="text-uppercase"> {{ __('Author Name : ') }} {{ Auth::user()->name }}</h5>
                <span>We have recieved your order. Your Order is currently pending by default, Our support team will let you know the next step.</span> <br>
                <span class="theme-color mt-3 d-block">Order Summary</span>
                <div class="mb-3">
                    <hr class="new1">
                </div>

                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Order Number:</span>
                    <span class="text-muted">{{ $order->order_number }}</span>
                </div>

                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Order Date:</span>
                    <span class="text-muted">{{ $order->created_at }}</span>
                </div>

                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Order Total:</span>
                    <span class="text-muted">{{ $order->grand_total }}</span>
                </div>
                
                <div class="d-flex justify-content-between mt-3">
                    <span class="font-weight-bold">Total</span>
                    <span class="font-weight-bold theme-color">{{ $order->grand_total }}</span>
                </div>  

                <div class="text-center mt-5">
                    <a href="{{ route('customer.dashboard') }}" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">GO TO DASHBOARD</a>
                </div>                   

            @else
            <h5 class="section-content__title text-center">No Order Found</h5>
            @endif
            </div> <!-- End Order Wrapper -->
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection