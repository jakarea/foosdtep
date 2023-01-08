<div class="d-flex-product-filter">
                        <!-- ::::::  Start Sort Box Section  ::::::  -->
    <div class="sort-box-item mb-0">
        <span>{{ __('text.showing')}} {{ $products->firstItem() . __(' - '). $products->lastItem() }} {{__('text.of') }} {{ $products->total() }} {{ __('text.result')}}</span>
    </div>
    <div class="sort-box-item mb-0">
        <div class="sort-box__tab">
            <ul class="sort-box__tab-list nav">
                <li><a class="sort-nav-link active" data-bs-toggle="tab" href="#sort-grid"><i class="fas fa-th"></i>  </a></li>
                <li><a class="sort-nav-link " data-bs-toggle="tab" href="#sort-list"><i class="fas fa-list-ul"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="tab-content tab-animate-zoom">
    <div class="tab-pane show active shop-grid" id="sort-grid">
        <div class="row px-3 px-md-0">
            <!-- product box item @S -->
            @foreach($products as $keyProduct => $product )
            <div class="col-md-3 col-6 px-0 px-md-2 product-page-column">
                <div class="product-box-item-area">
                    <div class="product-box-overview-area">
                        <div class="product-box-top-area">
                            <div class="product-box-area-infos">
                                <a href="{{ route('show.product', $product->slug) }}">
                                <img src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="Product Image" class="img-fluid product-box-imgs">
                                </a> 
                                <div class="product-box-info-content">
                                    <h6>{{ $product->unit ?  $product->unit : ''}}</h6>
                                    <h4> 
                                        <a href="{{ route('show.product', $product->slug) }}">{{ $product->name }}</a>
                                    </h4>
                                    <h6>{{ $product->brand ? $product->brand->name : "" }}</h6>
                                    @if(Auth::check())
                                    <p>{{ __('€'). $product->discount($product->id) }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="product-box-bottom-area">
                            <ul>
                                @if( Auth::check() )
                                <li>
                                    <a href="{{ route('add.to.cart', $product->id) }}">
                                    <img src="{{ asset('frontend/assets/img/cart.png') }}" alt="Cart" class="img-fluid">
                                    </a>
                                </li>
                                @endif
                                <li>
                                    <a href="#modalQuickView{{$product->id}}" data-bs-toggle="modal"><i class="icon-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Modal Quickview cart -->
            <div class="modal fade" id="modalQuickView{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 text-end">
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
                                                <span class="product__price-del">{{ __('€'). $product->discount($product->id) }}  {{ $product->unit ?  $product->unit : ''}}</span>
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
            </div>
            <!-- End Modal Quickview cart -->
            @endforeach
            <!-- product box item @E -->  
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
                    </div>
                    <!-- End Product Image -->
                    <!-- Start Product Content -->
                    <div class="product__content">
                        <span style="font-size: 12px;">{{ $product->unit ?  $product->unit : ''}}</span>
                        <a href="{{ route('show.product', $product->slug) }}" class="product__link">{{ $product->name }}</a> 
                        <span style="font-size: 12px; color: #000;">{{ $product->brand ? $product->brand->name : "" }}</span>
                        @if(Auth::check())
                        <div class="product__price m-t-5">
                            <span class="product__price" style="color: #000;">{{ __('€'). $product->discount($product->id) }}  </span>
                            <span class="product__action--link-list ms-3">
                            <a href="{{ route('add.to.cart', $product->id) }}" style="border-radius: 25px;" class="btn--black py-2 px-3 btn--black-hover-green">{{ __('text.add_to_cart')}}</a>
                            </span>
                        </div>
                        @endif
                    </div>
                    <!-- End Product Content -->
                </div>
            </div>
            <!-- End Single List Product -->
            @endforeach
        </div>
    </div>
</div>
<div class="page-pagination">
    {{ $products->withQueryString() }}
</div>