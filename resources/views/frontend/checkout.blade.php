@extends('layouts.frontend')
@section('title') {{ __('Checkout') }} @endsection
@section('breadcumbTitle') {{ __('Checkout') }} @endsection

@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->
<style>
.card-input-element {
    display: none;
}

.card-input:hover {
    cursor: pointer;
}

.card-input-element:checked + .card-input {
     box-shadow: 0 0 1px 1px #2ecc71;
}

</style>
<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <!-- Start Client Shipping Address -->
            <div class="col-lg-7">
                <div class="section-content">
                    <h5 class="section-content__title">Billing Details</h5>
                </div>
                <form action="{{ route('order.store') }}" method="post" class="form-box">
                    @csrf
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-first-name">First Name</label>
                                <input type="text" id="form-first-name" name="firstname" value="{{ old('firstname', Auth::user()->name) }}">
                                <span class="text-danger">@error('firstname'){{ $message }} @enderror</span>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-last-name">Last Name</label>
                                <input type="text" id="form-last-name" name="lastname" value="{{ old('lastname', Auth::user()->name) }}">
                                <span class="text-danger">@error('lastname'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-phone">Phone</label>
                                <input type="text" id="form-phone" name="phone" value="{{ old('phone', Auth::user()->phone) }}">
                                <span class="text-danger">@error('phone'){{ $message }} @enderror</span>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-email">Email Address</label>
                                <input type="email" id="form-email" name="email" value="{{ old('email', Auth::user()->email) }}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box__single-group">
                                <label for="form-company-name">Company Name</label>
                                <input type="text" id="form-company-name" name="companyname" value="{{ old('companyname') }}">
                            </div>
                        </div>
  
                        <div class="col-md-6 mt-3">
                        <label class="w-100">
                            <input type="radio" name="address_select" selected checked class="card-input-element" value="1" />

                                <div class="card card-default card-input pl-0">
                                <div class="card-header">Office Address</div>
                                    <div class="card-body">
                                        <p>{{ Auth::user()->officeaddress }}</p>
                                    </div>
                                </div>
                            </label>                        
                        </div>
                        <div class="col-md-6 mt-3">                        
                            <label class="w-100">
                            <input type="radio" name="address_select" class="card-input-element" value="0" />

                                <div class="card card-default card-input">
                                <div class="card-header">Home Address</div>
                                    <div class="card-body">
                                        <p>{{ Auth::user()->homeaddress }}</p>
                                    </div>
                                </div>
                            </label>                        
                        </div>
                        <div class="col-md-6 d-none">
                            <div class="form-box__single-group">
                                <label for="form-zipcode">* Zip/Postal Code</label>
                                <input type="text" id="form-zipcode" name="zipcode" value="{{ old('zipcode', Auth::user()->zipcode) }}">
                                <span class="text-danger">@error('zipcode'){{ $message }} @enderror</span>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box__single-group">
                                <h6>Additional information</h6>
                                <label for="form-additional-info">Order notes</label>
                                <textarea  id="form-additional-info" rows="5" name="ordernote" placeholder="Notes about your order, e.g. special notes for delivery.">{{ old('ordernote') }}</textarea>
                            </div>
                        </div>
                        <!-- Add Another Shipping Address -->
                    </div>
            </div> <!-- End Client Shipping Address -->
            
            <!-- Start Order Wrapper -->
            <div class="col-lg-5">
                <div class="your-order-section">
                    <div class="section-content">
                        <h5 class="section-content__title">Your order</h5>
                    </div>
                    <div class="your-order-box gray-bg m-t-40 m-b-30">
                        <div class="your-order-product-info">
                            <div class="your-order-top d-flex justify-content-between">
                                <h6 class="your-order-top-left font--bold">Product</h6>
                                <h6 class="your-order-top-left font--bold">Quantity</h6>
                                <h6 class="your-order-top-right font--bold">Total</h6>
                            </div>
                            <ul class="your-order-middle">
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <li class="d-flex justify-content-between">
                                    <span class="your-order-middle-left font--semi-bold">{{ $details['name'] }}</span>
                                    <span class="your-order-middle-right font--semi-bold">{{ $details['quantity'] }} Items</span>
                                    <span class="your-order-middle-right font--semi-bold">€{{ $details['price'] * $details['quantity'] }}</span>
                                </li>
                            @endforeach
                            @endif
                            </ul>
                            <div class="your-order-bottom d-flex justify-content-between">
                                <h6 class="your-order-bottom-left font--bold">Shipping</h6>
                                <span class="your-order-bottom-right font--semi-bold">Free shipping</span>
                            </div>
                            <div class="your-order-total d-flex justify-content-between">
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                                <h5 class="your-order-total-left font--bold">Total</h5>
                                <h5 class="your-order-total-right font--bold">€{{ $total }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                    <input type="hidden" name="cart_subtotal" value="{{ $total }}">
                    <input type="hidden" name="cart_quantity" value="{{ $total }}">

                        <button class="btn btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--bold" type="submit">PLACE ORDER</button>
                    </div>
                </div>
                </form> 

            </div> <!-- End Order Wrapper -->
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection