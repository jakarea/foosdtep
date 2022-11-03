@extends('layouts.frontend')
@section('title') {{ __('Products') }} @endsection
@section('breadcumbTitle') {{ __('Products') }} @endsection
@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widget -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Filter [Catagory] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">PRODUCT CATEGORIES</h5>
                            </div>
                            <ul class="sidebar__menu">
                                <li>
                                    <ul class="sidebar__menu-collapse">
                                        <!-- Start Single Menu Collapse List -->
                                       <li class="sidebar__menu-collapse-list">
                                           <div class="accordion">
                                               <a href="#" class="accordion__title collapsed" data-bs-toggle="collapse"data-bs-target="#men-fashion" aria-expanded="false">Men <i class="far fa-chevron-down"></i></a>
                                               <div id="men-fashion" class="collapse">
                                                   <ul class="accordion__category-list">
                                                       <li><a href="#">Dresses</a></li>
                                                       <li><a href="#">Jackets &amp; Coats</a></li>
                                                       <li><a href="#">Sweaters</a></li>
                                                       <li><a href="#">Jeans</a></li>
                                                       <li><a href="#">Blouses &amp; Shirts</a></li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </li> <!-- End Single Menu Collapse List -->
                                   </ul>
                                </li>
                               <li ><a href="#">Football</a></li>   
                               <li ><a href="#"> Men's</a></li>   
                               <li ><a href="#"> Portable Audio</a></li>   
                               <li ><a href="#"> Smart Watches</a></li>   
                               <li ><a href="#">Tennis</a></li>   
                               <li ><a href="#"> Uncategorized</a></li>   
                               <li ><a href="#"> Video Games</a></li>   
                               <li ><a href="#">Women's</a></li>
                            </ul>
                        </div>  <!-- End SSingle Sidebar Widget - Filter [Catagory] -->
 
 

                        <!-- Start Single Sidebar Widget - Filter [Gender] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY Fashion</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                 <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="men"><input type="checkbox" name="gender" value="Men" id="men"><span>Men</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="women"><input type="checkbox" name="gender" value="women" id="women"><span>Women</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="kids"><input type="checkbox" name="gender" value="kids" id="kids"><span>Kids</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                            </ul>
                        </div><!-- End Single Sidebar Widget - Filter [Gender] -->

                        <!-- Start Single Sidebar Widget - Filter [Brand] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY Brand</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                 <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="graphic-corner"><input type="checkbox" name="brand" value="graphic-corner" id="graphic-corner"><span>Graphic Corner</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="studio-design"><input type="checkbox" name="brand" value="studio-design" id="studio-design"><span>Studio Design</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                            </ul>
                        </div>  <!-- Start Single Sidebar Widget - Filter [Brand] -->
                         
                    </div>
                </div> <!-- End Left Sidebar Widget -->

                <!-- Start Rightside - Product Type View -->
                <div class="col-lg-9"> 
                    <!-- <div class="img-responsive">
                        <img src="https://template.hasthemes.com/gsore/gsore/assets/img/banner/size-wide/banner-shop-1-img-1-wide.jpg" alt="">
                    </div> -->
                    <!-- ::::::  Start Sort Box Section  ::::::  -->
                    <div class="sort-box m-tb-40">
                        <!-- Start Sort Left Side -->
                        <div class="sort-box-item">
                            <div class="sort-box__tab">
                                <ul class="sort-box__tab-list nav">
                                    <li><a class="sort-nav-link active" data-bs-toggle="tab" href="#sort-grid"><i class="fas fa-th"></i>  </a></li>
                                    <li><a class="sort-nav-link " data-bs-toggle="tab" href="#sort-list"><i class="fas fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- Start Sort Left Side -->

                        <div class="sort-box-item d-flex align-items-center flex-warp">
                            <span>Sort By:</span>
                            <div class="sort-box__option">
                                <label class="select-sort__arrow">
                                    <select name="select-sort" class="select-sort">
                                        <option value="1">Relevance</option>
                                        <option value="2">Name, A to Z</option>
                                        <option value="3"> Name, Z to A </option>
                                        <option value="4"> Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        
                    </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                    <div class="sort-box-item">
                            <span>Showing {{ $products->onFirstPage() . __(' - '). $products->count() }} of {{ $products->count() }} result</span>
                        </div>

                    <div class="product-tab-area pb-5">
                        <div class="tab-content tab-animate-zoom">
                            <div class="tab-pane show active shop-grid" id="sort-grid">
                                <div class="row">
                                    @foreach( $products as $key => $product )
                                    <div class="col-md-4 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ route('show.product', $product->slug) }}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="{{$product->slug}}">
                                                </a>                                               
                                                <ul class="product__action--link pos-absolute">
                                                    @if( Auth::check() )
                                                    <li><a href="{{ route('add.to.cart', $product->id) }}"><i class="icon-shopping-cart"></i></a></li>
                                                    @endif
                                                    <li><a href="#modalQuickView{{$product->id}}" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <a href="{{ route('show.product', $product->slug) }}" class="product__link">{{ $product->name }}</a>
                                                @if(Auth::check())
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">{{ __('$'). $product->discount($product->id) }}</span>
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
                                                                        <span class="product__price-del">{{ __('$'). $product->discount($product->id) }}</span>
                                                                    </div>
                                                                    @endif
                                                                    <div class="product__desc m-t-25 m-b-30">
                                                                        <p>{{ $product->short_description }}</p>
                                                                    </div>
                                                                    @if( Auth::check() )
                                                                    <div class="product-var p-t-30">
                                                                        <div class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                                                        <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Buy It Now</a>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    <div class="product-links">
                                                                        <div class="product-social m-tb-30">
                                                                            <span>SHARE THIS PRODUCT</span>
                                                                            {!! Share::page(url('/products/'. $product->slug))->facebook()->twitter()->whatsapp() !!}
                                                                        </div>
                                                                    </div>
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
                                    @foreach( $products as $key => $product )
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="{{ route('show.product', $product->slug) }}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="{{ $product->slug }}">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                    <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content">
                                                <a href="{{ route('show.product', $product->slug) }}" class="product__link"><h5 class="font--regular">{{ $product->name }}</h5></a>
                                                @if(Auth::check())
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">{{ __('$'). $product->discount($product->id) }}</span>
                                                </div>
                                                @endif
                                                <div class="product__desc">
                                                    <p>
                                                        {{ $product->short_description }}
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="{{ route('add.to.cart', $product->id) }}" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div> 
                                    </div> <!-- End Single List Product -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($products->lastPage() > 1)
                    <div class="page-pagination">                          
                            <ul class="page-pagination__list">
                                <li class="{{ ($products->currentPage() == 1) ? ' disabled' : '' }} page-pagination__item">
                                    <a class="page-pagination__link" href="{{ $products->url(1) }}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo; Prev</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="page-pagination__item">
                                        <a class="page-pagination__link {{ ($products->currentPage() == $i) ? ' active' : '' }}" href="{{ $products->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="{{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }} page-pagination__item">
                                    <a href="{{ $products->url($products->currentPage()+1) }}" class="page-pagination__link" aria-label="Next">
                                        <span aria-hidden="true">Next &raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>  <!-- Start Rightside - Product Type View -->
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->


    @endsection