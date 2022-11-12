@extends('layouts.frontend')
@section('title') {{ __( $cat->name ) }} @endsection
@section('breadcumbTitle') {{ __( $cat->name ) }} @endsection
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
                        <!-- Category Filter -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY CATEGORY</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                @foreach(App\Models\Backend\Category::all() as $key => $category)
                                    <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="cat_{{ $category->id }}"><input type="checkbox" name="catFilter" class="attributes_Filter" value="{{ $category->id }}" id="cat_{{ $category->id }}"><span>{{ $category->name }} ({{ $category->countProductByCat($category->id) }})</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- Category Filter -->

                        <!-- Brand Filter -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY BRAND</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                @foreach(App\Models\Backend\Brand::all() as $key => $brand)
                                    <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="brand_{{ $brand->id }}"><input type="checkbox" name="brandFilter" class="attributes_Filter" value="{{ $brand->id }}" id="brand_{{ $brand->id }}"><span>{{ $brand->name }} ({{ $brand->countProductByBrand($brand->id) }})</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- Brand Filter -->

                        <!-- ProductGroup Filter -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY PRODUCT GROUP</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                @foreach(App\Models\Backend\ProductGroup::all() as $key => $PGroup)
                                    <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="pgroup_{{ $PGroup->id }}"><input type="checkbox" name="pgroupFilter" class="attributes_Filter" value="{{ $PGroup->id }}" id="pgroup_{{ $PGroup->id }}"><span>{{ $PGroup->name }} ({{ $PGroup->countProductByPGroup($PGroup->id) }})</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- ProductGroup Filter -->

                        <!-- Faith Filter -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY FAITH</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                @foreach(App\Models\Backend\Faith::all() as $key => $faith)
                                    <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="faith_{{ $faith->id }}"><input type="checkbox" name="faithFilter" class="attributes_Filter" value="{{ $faith->id }}" id="faith_{{ $faith->id }}"><span>{{ $faith->name }} ({{ $faith->countProductByFaith($faith->id) }})</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- Faith Filter -->

                        <!-- Faith Filter -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY LINES</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                @foreach(App\Models\Backend\Line::all() as $key => $line)
                                    <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="line_{{ $line->id }}"><input type="checkbox" name="lineFilter" class="attributes_Filter" value="{{ $line->id }}" id="line_{{ $line->id }}"><span>{{ $line->name }} ({{ $line->countProductByline($line->id) }})</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- Faith Filter -->

                        <!-- Faith Filter -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY CONTENTS</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                @foreach(App\Models\Backend\Content::all() as $key => $content)
                                    <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="conten_{{ $content->id }}"><input type="checkbox" name="contentFilter" class="attributes_Filter" value="{{ $content->id }}" id="conten_{{ $content->id }}"><span>{{ $content->name }} ({{ $content->countProductByContent($content->id) }})</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- Faith Filter -->

                        <!-- Faith Filter -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box m-t-40">
                                <h5 class="sidebar__title">FILTER BY Allergens & Diet Preference</h5>
                            </div>
                            <ul class="sidebar__menu-filter ">
                                @foreach(App\Models\Backend\AllergensDP::all() as $key => $AllergensDP)
                                    <!-- Start Single Menu Filter List -->
                                <li class="sidebar__menu-filter-list">
                                    <label for="AllergensDP_{{ $AllergensDP->id }}"><input type="checkbox" name="allergensFilter" class="attributes_Filter" value="{{ $AllergensDP->id }}" id="AllergensDP_{{ $AllergensDP->id }}"><span>{{ $AllergensDP->name }} ({{ $AllergensDP->countProductByAllergensDP($AllergensDP->id) }})</span></label>
                                </li>  <!-- End Single Menu Filter List -->
                                @endforeach
                            </ul>
                        </div>
                        <!-- Faith Filter -->
                            
                    </div>
                </div>
                <!-- End Left Sidebar Widget -->

                <!-- Start Rightside - Product Type View -->
                <div class="col-lg-9"> 
                    <div class="alert alert-success">
                        <span>{{__('messages.you_arevisiting_cat')}}: {{ $cat->name }}</span>
                    </div>
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
                                        <option value="1">{{ __('messages.relevance')}}</option>
                                        <option value="2">{{ __('messages.name_a_z')}}</option>
                                        <option value="3">{{ __('messages.name_z_a')}}  </option>
                                        <option value="4"> {{ __('messages.price_low_high')}}</option>
                                        <option value="5">{{ __('messages.price_high_low')}}</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        
                    </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                    <div class="sort-box-item">
                        <span>{{ __('messages.showing') }} {{ $products->onFirstPage() . __(' - '). $products->count() }} {{ __('messages.of') }} {{ $products->count() }} {{ __('messages.result') }}</span>
                    </div>

                    <div class="product-tab-area pb-5 attributes_wise" id="attributes_wise">
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
                                                                        <span class="product__price-del">{{ __('€'). $product->discount($product->id) }}</span>
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
                                                                    <div class="product-links">
                                                                        <div class="product-social m-tb-30">
                                                                            <span>{{ __('messages.share_this_product') }}</span>
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

@section('script')
<script>
    $(document).ready(function() {
        $('.attributes_Filter').on('change', function(e) {
            e.preventDefault();
            if ($(this).is(':checked')) {
                let id = $(this).val();
                // $('.attributes_Filter').not(this).prop('checked', false);
                // store original html
                var originalHtml = $('.attributes_wise').innerHTML;

                // Filter Type
                var cat_filter = $("input[name='catFilter']:checked")
                    .map(function(){
                        return $(this).val();
                    }).get();

                // Filter Type
                var brand_filter = $("input[name='brandFilter']:checked")
                    .map(function(){
                        return $(this).val();
                    }).get();
                // product group Type
                var Pgroup_filter = $("input[name='pgroupFilter']:checked")
                    .map(function(){
                        return $(this).val();
                    }).get();

                // faith Type
                var faith_filter = $("input[name='faithFilter']:checked")
                    .map(function(){
                        return $(this).val();
                    }).get();

                // line Type
                var line_filter = $("input[name='lineFilter']:checked")
                    .map(function(){
                        return $(this).val();
                    }).get();

                // line type
                var content_filter = $("input[name='contentFilter']:checked")
                    .map(function(){
                        return $(this).val();
                    }).get();
                
                // line type
                var allergens_filter = $("input[name='allergensFilter']:checked")
                    .map(function(){
                        return $(this).val();
                    }).get();
                
                // Hide Current Products
                $(".attributes_wise").hide();

                $.ajax({
                    data: {id:id, cat_id: cat_filter[0], brand_id: brand_filter[0], pgroup_id: Pgroup_filter[0], faith_id: faith_filter[0], line_id: line_filter[0], content_id: content_filter[0], allergens_id: allergens_filter[0]},
                    url: '/filter/attributes/',
                    type: 'GET',
                    beforeSend: function (request) {
                        $('.spinner-container').css("display", "block");
                        return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                    },
                    success: function(response){
                        $(".spinner-container").hide();
                        $(".attributes_wise").show();
                        $("#attributes_wise").html(response);                        
                        // console.log(response);
                    }
                })

            } else {
                console.log("Unchecked");
            }  
        });
    });
</script>
@endsection