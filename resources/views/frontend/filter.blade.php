<div class="product-tab-area pb-5">
    @if( count($products) > 0 )
    <div class="tab-content tab-animate-zoom">
        <div class="tab-pane show active shop-grid" id="sort-grid">
            <div class="row">
                <div class="alert alert-success">
                    <span>Total Product Found {{ count($products) }}</span>
                </div>
                <div class="spinner-container" style="display:none;">
                    <div class="spinner"></div>
                </div>
                @foreach( $products as $key => $product )
                <div class="col-md-4 col-sm-6 col-6 nopadding">
                    <!-- Start Single Default Product -->
                    <div class="product__box height-fixedd product__default--single text-center">
                        <!-- Start Product Image -->
                        <div class="product__img-box  pos-relative">
                            <a href="{{ route('show.product', $product->slug) }}" class="product__img--link">
                                <img class="product__img img-fluid" src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="{{$product->slug}}">
                            </a>                                               
                            <ul class="product__action--link pos-absolute">
                                @if( Auth::check() )
                                <li><a href="{{ route('add.to.cart', $product->id) }}">
                                    <img src="{{ asset('frontend/assets/img/cart.png') }}" alt="Cart" width="20" class="img-fluid">
                                </a></li>
                                @endif
                                <li><a href="#modalQuickView{{$product->id}}" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                            </ul> <!-- End Product Action Link -->
                        </div> <!-- End Product Image -->
                        <!-- Start Product Content -->
                        <div class="product__content m-t-20">
                        <a href="{{ route('show.product', $product->slug) }}" class="product__link">{{ $product->name }}</a> 
            
                            <span style="font-size: 12px;">{{ $product->brand->name }}</span>
                            <p style="font-size: 14px; margin-bottom: 0;" >{{ $product->short_description }}</p> 


                            @if(Auth::check())
                            <div class="product__price m-t-5">
                                <span class="product__price">{{ __('€'). $product->discount($product->id) }} {{ $product->unit ?  $product->unit : ''}}</span>
                            </div>
                            @endif
                        </div> <!-- End Product Content -->
                    </div> <!-- End Single Default Product -->
                </div>
                <!-- Start Modal Quickview cart -->
                <div class="modal fade" id="modalQuickView{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col text-end">
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="product-gallery-box m-b-60">
                                                <div class="modal-product-image--large">
                                                    <img class="img-fluid" src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="{{$product->slug}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details-box">
                                                <h5 class="title title--normal m-b-20">{{ $product->name }}</h5>
                                                @if(Auth::check())
                                                <div class="product__price">
                                                    <span class="product__price-del">{{ __('€'). $product->discount($product->id) }} {{ $product->unit ? $product->unit : ''}} </span>
                                                </div>
                                                @endif
                                                <div class="product__desc m-t-25 m-b-30">
                                                    <p>{{ $product->short_description }}</p>
                                                </div>
                                                @if( Auth::check() )
                                                <div class="product-var p-t-30">
                                                    <div class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                                    <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">{{ __('text.buy_it_now')}}</a>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Modal Quickview cart -->
                @endforeach
            </div>
        </div>
        <div class="tab-pane shop-list" id="sort-list">
            <div class="row">
            @foreach( $products as $key => $product)
                <!-- Start Single List Product -->
                <div class="col-12">
                    <div class="product-box-views productss-boxs product__box product__box--list">
                        <!-- Start Product Image -->
                        <div class="product__img-box   pos-relative text-center">
                            <a href="{{ route('show.product', $product->slug) }}" class="product__img--link ml-0">
                                <img class="product__img img-fluid" src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="{{ $product->slug }}">
                            </a> 
                        </div> <!-- End Product Image -->
                        <!-- Start Product Content -->
                        <div class="product__content">
                            <a href="{{ route('show.product', $product->slug) }}" class="product__link"><h5 class="font--regular">{{ $product->name }}</h5></a>

                            <span style="font-size: 12px;">{{ $product->brand->name }}</span>
                            <p style="font-size: 14px; margin-bottom: 0;" class="d-none d-md-block">{{ substr($product->short_description ,0,150) }}</p>

                            @if(Auth::check())
                            <div class="product__price m-t-5">
                                <span class="product__price">{{ __('€'). $product->discount($product->id) }} {{ $product->unit ?  $product->unit : ''}} </span>

                                <span class="product__action--link-list ms-3">
                                <a href="{{ route('add.to.cart', $product->id) }}" style="border-radius: 25px;" class="btn--black py-2 px-3 btn--black-hover-green">{{ __('text.add_to_cart')}}</a>
                                </span>
                            </div>
                            @endif 
                            
                        </div> <!-- End Product Content -->
                    </div> 
                </div> <!-- End Single List Product -->
                @endforeach
            </div>
        </div>
    </div>
    @else
    <div class="alert alert-danger">
        <span>No Product Found In this Attributes: </span>
    </div>
    @endif
</div>
