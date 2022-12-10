@extends('layouts.frontend')
@section('title') {{ __('Home') }} @endsection
@section('content')


    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container pb-0">
        <!-- ::::::  Start Hero Section  ::::::  -->
        @include('frontend.partials.hero')
        <!-- ::::::  End Hero Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Catagory Section  ::::::  -->
        <div class="product p-t-100 category-custom-cls" style="background: rgba(243, 245, 247, 0.372)!important;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">{{ __('Ons assortiment')}}</h5>
                            
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product__catagory custom-img-cls">
                        @foreach($categories as $cateogry)
                            <!-- Start Single catagory Product -->
                            <div class="product__catagory--single">
                                <!-- Start Product Content -->
                                <div class="product__content product__content--catagory">

                                    <a href="{{ route('show.category', $cateogry->slug)}}" class="product__link">{{ $cateogry->name }}</a>
                                    <span class="product__items--text">{{ $cateogry->countProductByCat($cateogry->id)}} Products</span>
                                </div> <!-- End Product Content -->
                                <!-- Start Product Image -->
                                <div class="product__img-box product__img-box--catagory">
                                    <a href="{{ route('show.category', $cateogry->slug)}}" class="product__img--link">
                                        <img class="product__img img-fluid" src="{{asset('backend/assets/images/category/'.$cateogry->image)  }}" alt="">
                                    </a>
                                </div> <!-- End Product Image -->
                            </div> <!-- End Single Default Product -->
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Catagory Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product product-suctm-margin p-t-100 pb-5" style="background: rgba(243, 245, 247, 0.372)!important;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border section-content--border-product m-b-35">
                            <h5 class="section-content__title">{{ __('text.products')}}</h5>
                            
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                @foreach($products as $keyProduct => $product )
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box custom-product-img-box pos-relative">
                                <a href="{{ route('show.product', $product->slug) }}" class="product__img--link">
                                    <img class="product__img img-fluid" src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="">
                                </a>
                                <!-- Start Procuct Label --> 
                                <!-- End Procuct Label -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    @if( Auth::check() )
                                    <li><a href="{{ route('add.to.cart', $product->id) }}">
                                    <img src="{{ asset('frontend/assets/img/cart.png') }}" alt="Cart" width="20" class="img-fluid" style="width: 20px; height: auto!important;">
                                    </a></li>
                                    @endif
                                    <li><a href="#modalQuickView{{$product->id}}" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                </ul> <!-- End Product Action Link -->
                            </div> <!-- End Product Image -->
                            <!-- Start Product Content -->
                            <div class="product__content m-t-20"> 
                                <a href="{{ route('show.product', $product->slug) }}" class="product__link d-none d-md-block">{{ $product->name }}</a>
                                <a href="{{ route('show.product', $product->slug) }}" class="product__link d-md-none">{{ substr($product->name,0,10) }}</a>
                                
                                <span style="font-size: 12px;">{{ $product->brand->name }}</span>
                                <p style="font-size: 14px; margin-bottom: 0;" class="d-none d-md-block">{{ substr($product->short_description ,0,50) }}</p>
                                <p style="font-size: 14px; margin-bottom: 0;" class="d-md-none">{{ substr($product->short_description ,0,10) }}</p>
 

                                @if(Auth::check())
                                <div class="product__price m-t-5">
                                    <span class="product__price">{{ __('€'). $product->discount($product->id) }}</span>
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
                <div class="row">
                    <div class="col-12">
                        <div class="product-more-bttn text-center mt-4 mt-md-0">
                            <a href="{{ url('/products') }}" class="btn btn-primary" style="padding: 10px 20px; border-radius: 5px; background-color: #e0c77a; border-color: #e0c77a;">{{ __('Meer producten') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner pos-relative">
            <div class="banner__bg">
                <img src="{{ asset('frontend/assets/img/newsletter/Nieuwsbrief.jpeg')}}" alt="Nieuwsbrief">
            </div>
            <div class="banner__box banner__box--single-text-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content--center pos-absolute">
                                <h6 class="banner__title  font--medium m-b-10">{{ __('text.special_discount')}}</h6>
                                <h1 class="banner__title banner__title--large font--regular text-capitalize ">{{ __('text.for_all_grocery')}} <br></h1>
                                <h6 class="banner__title font--medium m-b-40 ">{{ __('text.20_off')}}</h6>
                                <a href="{{ url('products')}}" class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">{{ __('text.shop_now')}}</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>    
        </div> <!-- ::::::  End banner Section  ::::::  --> 
 
        <!-- ::::::  Start  Blog News  ::::::  -->
        <div class="blog m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">{{ __('text.our_latest_news')}}</h5>
                            <!-- <a href="blog-list-sidebar-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More blogs <i class="fal fa-angle-right"></i></a> -->
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row"> 
                    @foreach($blogs as $blog)
                        <div class="col-lg-6">
                        <!-- Start Single Blog Feed -->
                        <div class="blog-feed">
                            <!-- Start Blog Feed Image -->
                            <div class="blog-feed__img-box">
                                <a href="{{url('blog/'. $blog->slug)}}" class="blog-feed__img--link">
                                <img src="{{ asset('backend/assets/images/blog/'. $blog->image) }}" alt="Cate" class="img-fluid" >
                                </a>
                            </div> <!-- End  Blog Feed Image -->
                            <!-- Start  Blog Feed Content -->
                            <div class="blog-feed__content ">
                                <a href="javascript:void(0)" class="blog-feed__link">{{$blog->title}}</a>
                                
                                <div class="blog-feed__post-meta">
                                    {{ __('messages.by')}}
                                    <a class="blog-feed__post-meta--link" href="javascript:void(0)"><span class="blog-feed__post-meta--author">{{$blog->user->name}} /</span></a> 
                                    <a class="blog-feed__post-meta--link" href="javascript:void(0)"><span class="blog-feed__post-meta--date">{{ date('M d,Y', strtotime($blog->created_at)); }}</span></a> 
                                    
                                </div>
                                <p class="blog-feed__excerpt">{{ substr($blog->body,0,170)}}</p>

                                <a href="{{url('blog/'. $blog->slug)}}" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">{{__('text.more_info')}}</a>
                            </div> <!-- End  Blog Feed Content -->
                        </div> 
                        <!-- End Single Blog Feed --> 
                        </div>
                    @endforeach 
                </div>
            </div>
        </div> <!-- ::::::  End  Blog News   ::::::  -->

        <!-- ::::::  Start Newsletter Section  ::::::  -->
        @include('frontend.partials.newslatter')
        <!-- ::::::  End newsletter Section  ::::::  -->
 

    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->


    @endsection