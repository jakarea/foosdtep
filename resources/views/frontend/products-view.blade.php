@extends('layouts.frontend')
@section('title') {{ $product->name }} @endsection
@section('breadcumbTitle') {{ $product->name }} @endsection

@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

   <!-- :::::: Start Main Container Wrapper :::::: -->
   <main id="main-container" class="main-container">

<!-- Start Product Details Gallery -->
<div class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="product-gallery-box product-gallery-box--default m-b-60">
                    <div class="product-image--large product-image--large-horizontal">
                        <img class="img-fluid" id="img-zoom" src="{{ asset('frontend/assets/img/product/'. $product->image) }}" data-zoom-image="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="{{ $product->slug }}">
                    </div> 
                </div>
            </div>
            <div class="col-md-7">
                <div class="product-details-box m-b-60">
                    <h4 class="font--regular m-b-20">{{ $product->name }}</h4> 
                    @if( Auth::check() )
                    <div class="product__price m-t-5">
                        <span class="product__price product__price--large">{{ __('€'). $product->discount($product->id) }} {{ $product->unit ? $product->unit : ''}} </span>
                    </div>
                    
                    @endif

                    <p>{{ $product->short_description }}.</p>

                    @if(!Auth::check())
                    <div class="product__desc m-t-25 m-b-30">
                        <div class="card" id="parent_clse">
                            <div class="card-body"> 
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6>{{__('messages.cant_see_price')}}</h6>
                                    <a href="javascript:void(0)" onclick="parent_close();"><i class="fas fa-times"></i></a>
                                </div>
                                <p>Je kunt alleen prijzen zien als je ingelogd bent. Geen inlog? Dan kan je het assortiment verkennen en je laten inspireren. Nog geen klant?</p>

                                <a href="{{url('login')}}" class="btn btn-primarys">{{__('messages.create_account')}}</a>
                            </div>
                        </div> 
                    </div>
                    @endif

                    @if(Auth::check())
                    <div class="product-var p-tb-30">
                        <div class="product-var__item">
                            <div class="dynmiac_checkout--button"> 
                                <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">{{__('messages.buy_it_now')}}</a>
                            </div>
                        </div> 
                    </div>
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div><!-- End Product Details Gallery -->

<!-- Start Product Details Tab -->
<div class="product-details-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{__('messages.description')}}
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="para__content">
                                {!! $product->long_description !!}
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {{ __('messages.prod_details')}}
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="product-dis__content">
                                    {!! $product->specific_description !!}
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div> 
    </div>
</div>  <!-- End Product Details Tab -->

<!-- ::::::  Start  Product Style - Default Section  ::::::  -->
<div class="product m-t-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                 <!-- Start Section Title -->
                <div class="section-content section-content--border section-content--border-related m-b-35">
                    <h5 class="section-content__title"> {{ __('messages.related_prod')}} : </h5>
                    <a href="{{ route('products') }}" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">{{ __('messages.more_prod')}}<i class="fal fa-angle-right"></i></a>
                </div>  <!-- End Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                    <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40 mb-3">
                        @foreach( $relatedProducts as $key => $related )
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="{{ route('show.product', $related->slug) }}" class="product__img--link">
                                    <img class="product__img img-fluid" src="{{ asset('frontend/assets/img/product/'. $related->image) }}" alt="">
                                </a>
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    @if( Auth::check() )
                                    <li><a href="{{ route('add.to.cart', $related->id) }}" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    @endif
                                    <!-- <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li> -->
                                </ul> <!-- End Product Action Link -->
                            </div> <!-- End Product Image -->
                            <!-- Start Product Content -->
                            <div class="product__content m-t-20">
                                <a href="{{ route('show.product', $related->slug) }}" class="product__link">{{ $related->name }}</a>
                                @if(Auth::check())
                                <div class="product__price m-t-5">
                                    <span class="product__price">{{ __('€'). $product->discount($related->id) }}  {{ $product->unit ?  $product->unit : ''}}</span>
                                </div>
                                @endif
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

@endsection

@section('script')

<script>

function parent_close(parent_clse){
    document.getElementById('parent_clse').style.display = 'none';
}

</script>

@endsection