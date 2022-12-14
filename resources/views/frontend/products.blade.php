@extends('layouts.frontend')
@section('title') {{ __('Producten') }} @endsection
@section('breadcumbTitle') {{ __('Producten') }} @endsection
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
				<div class="sidebar d-none d-md-block">
					<!-- Category Filter -->
					
						<div class="sidebar__widget">
							<div class="sidebar__box m-t-40">
								<h3 class="mb-3">{{ __('text.product_group') }}</h3>
								<h5 class="sidebar__title">{{ __('text.category')}}</h5>
							</div>
							<ul class="sidebar__menu-filter ">
								@foreach($categories as $key => $category)
								<!-- Start Single Menu Filter List -->
								<li class="sidebar__menu-filter-list">
									<label for="cat_{{ $category->id }}">
									<input type="checkbox" name="catFilter" class="attributes_Filter" value="{{ $category->id }}" id="cat_{{ $category->id }}">
									<span>{{ $category->name }} ({{ $category->countProductByCat($category->id) }})</span>
									</label>
								</li>
								<!-- End Single Menu Filter List -->
								@endforeach
							</ul>
						</div>
						<!-- Category Filter -->
						<!-- Category Filter -->
						<div class="sidebar__widget">
							<div class="sidebar__box m-t-40">
								<h5 class="sidebar__title">{{ __('text.brand')}}</h5>
							</div>
							<ul class="sidebar__menu-filter ">
								@foreach($brands as $key => $brand)
								<!-- Start Single Menu Filter List -->
								<li class="sidebar__menu-filter-list">
									<label for="brand_{{ $brand->slug }}">
									<input type="checkbox" name="brandFilter" class="attributes_Filter" value="{{ $brand->id }}" id="brand_{{ $brand->slug }}">
									<span>{{ $brand->name }} ({{ $brand->countProductByBrand($brand->id) }})</span>
									</label>
								</li>
								<!-- End Single Menu Filter List -->
								@endforeach
							</ul>
						</div>

				</div>
			</div>
			<!-- End Left Sidebar Widget -->
			<!-- Start Rightside - Product Type View -->
			<div class="col-lg-9">
				<!-- mobile filter start -->
				<button class="btn btn-secondary px-3 py-2 d-md-none" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">  <i class="fas fa-filter"></i> FILTERS </button>
				<div class="custom-pro-filter d-md-none">
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasExampleLabel">{{ __('text.product_group') }} GPPPP</h5>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<div class="sidebar mt-0">
								<!-- Category Filter -->
								<div class="sidebar__widget">
									<div class="sidebar__box m-t-0">
										<h5 class="sidebar__title">{{ __('text.category')}}</h5>
									</div>
									<ul class="sidebar__menu-filter ">
										@foreach($categories as $key => $category)
										<!-- Start Single Menu Filter List -->
										<li class="sidebar__menu-filter-list">
											<label for="cat_m{{ $category->id }}">
											<input type="checkbox" name="catFilter" class="attributes_Filter" value="{{ $category->id }}" id="cat_m{{ $category->id }}">
											<span>{{ $category->name }} ({{ $category->countProductByCat($category->id) }})</span>
											</label>
										</li>
										<!-- End Single Menu Filter List -->
										@endforeach
									</ul>
								</div>

                                <div class="sidebar__widget">
									<div class="sidebar__box m-t-0">
										<h5 class="sidebar__title">{{ __('text.brand')}}</h5>
									</div>
									<ul class="sidebar__menu-filter ">
										@foreach($brands as $key => $brand)
										<!-- Start Single Menu Filter List -->
										<li class="sidebar__menu-filter-list">
											<label for="brand_m{{ $brand->id }}">
											<input type="checkbox" name="catFilter" class="attributes_Filter" value="{{ $brand->id }}" id="brand_m{{ $brand->id }}">
											<span>{{ $brand->name }} ({{ $brand->countProductByBrand($brand->id) }})</span>
											</label>
										</li>
										<!-- End Single Menu Filter List -->
										@endforeach
									</ul>
								</div>

								<!-- Category Filter -->
							</div>
						</div>
					</div>
				</div>
				<!-- mobile filter end -->
				<div class="product-tab-area pb-5 attributes_wise" id="attributes_wise">
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
														<p>{{ __('???'). $product->discount($product->id) }}</p>
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
																	<span class="product__price-del">{{ __('???'). $product->discount($product->id) }}  {{ $product->unit ?  $product->unit : ''}}</span>
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
												<span class="product__price" style="color: #000;">{{ __('???'). $product->discount($product->id) }}  </span>
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
				</div>
			</div>
			<!-- Start Rightside - Product Type View -->
		</div>
	</div>
</main>
<!-- :::::: End MainContainer Wrapper :::::: -->
@endsection
@section('script')
<script>
	$(document).ready(function() {
	    $('.attributes_Filter').on('change', function(e) {
	        e.preventDefault();
	        
	            let id = $(this).val();
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
	            // var Pgroup_filter = $("input[name='pgroupFilter']:checked")
	            //     .map(function(){
	            //         return $(this).val();
	            //     }).get();
	
	            // // faith Type
	            // var faith_filter = $("input[name='faithFilter']:checked")
	            //     .map(function(){
	            //         return $(this).val();
	            //     }).get();
	
	            // // line Type
	            // var line_filter = $("input[name='lineFilter']:checked")
	            //     .map(function(){
	            //         return $(this).val();
	            //     }).get();
	
	            // // line type
	            // var content_filter = $("input[name='contentFilter']:checked")
	            //     .map(function(){
	            //         return $(this).val();
	            //     }).get();
	            
	            // // line type
	            // var allergens_filter = $("input[name='allergensFilter']:checked")
	            //     .map(function(){
	            //         return $(this).val();
	            //     }).get();
	            
	            // Hide Current Products
	            $(".attributes_wise").hide();
	
	            // window.history.pushState('obj', id, '/filter.php?type'+'='+id);
	                console.log({cat_filter, brand_filter})
	                //$('#filterData').submit();
	            $.ajax({
	                data: {cat_id: cat_filter, brand_id: brand_filter, 'isaj':'sdb'},
	                url: '/products',
	                type: 'GET',
	                beforeSend: function (request) {
	                    $('.spinner-container').css("display", "block");
	                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
	                },
	                success: function(response){
	                    $(".spinner-container").hide();
	                    $(".attributes_wise").show();
	                    $("#attributes_wise").html(response);                        
	                }
	            })
	    });
	});
</script>
<script>
	var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'))
	var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
	return new bootstrap.Offcanvas(offcanvasEl)
	})
</script>
@endsection