@extends('layouts.frontend')
@section('title') {{ __('Home') }} @endsection
@section('content')


 <!-- :::::: Start Main Container Wrapper :::::: -->
 <main id="main-container" class="main-container pb-0">
        <!-- ::::::  Start Hero Section  ::::::  -->
        @include('frontend.partials.hero')
         <!-- ::::::  End Hero Section  ::::::  -->
 
        <!-- ::::::  Start  Product Style - Catagory Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">{{ __('text.top_cats')}}</h5>
                            
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
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">{{ __('text.products')}}</h5>
                            
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                @foreach( $prodcutCat as $keyCat => $category )

                @php
                $catWiseProduct = App\Models\Backend\Product::where('cat_id','like','%'.trim($category->id).'%')->where('status', 'active')->take('12')->get();
                @endphp
                @foreach( $catWiseProduct as $keyProduct => $product )
                
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                         <!-- Start Single Default Product -->
                         <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="{{ route('show.product', $product->slug) }}" class="product__img--link">
                                    <img class="product__img img-fluid" src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="">
                                </a>
                                <!-- Start Procuct Label --> 
                                <!-- End Procuct Label -->
                                <!-- Start Product Action Link-->
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
                                    <span class="product__price">{{ __('€'). $product->discount($product->id) }}</span>
                                </div>
                                @endif
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                    </div>
                    @endforeach
                    @endforeach 
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

         <!-- ::::::  Start banner Section  ::::::  -->
         <div class="banner m-t-100 pos-relative">
            <div class="banner__bg">
                 <img src="{{ asset('frontend/assets/img/foodstep-promo.png')}}" alt="">
            </div>
            <div class="banner__box banner__box--single-text-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content--center pos-absolute">
                                <h6 class="banner__title  font--medium m-b-10">{{ __('text.special_discount')}}</h6>
                                <h1 class="banner__title banner__title--large font--regular text-capitalize">{{ __('text.for_all_grocery')}} <br></h1>
                                <h6 class="banner__title font--medium m-b-40">{{ __('text.20_off')}}</h6>
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
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red">
                            <div class="blog-feed-slider-3grid default-slider gap__col--30 ">
                                @foreach($blogs as $blog)
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="{{route('blog.index')}}" class="blog-feed__img--link">
                                        <img src="{{ asset('backend/assets/images/blog/'. $blog->image) }}" alt="Cate" class="img-fluid" >
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="{{route('blog.index')}}" class="blog-feed__link">{{$blog->title}}</a>
                                        
                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link" href="javascript:void(0)"><span class="blog-feed__post-meta--author">{{$blog->user->name}} /</span></a> 
                                            <a class="blog-feed__post-meta--link" href="javascript:void(0)"><span class="blog-feed__post-meta--date">{{ date('M d,Y', strtotime($blog->created_at)); }}</span></a> 
                                            
                                            
                                        </div>
                                        <p class="blog-feed__excerpt">{{ substr($blog->body,0,170)}}</p>
                                        <!-- <a href="blog-single-sidebar-left.html" class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue Reading</a> -->
                                    </div> <!-- End  Blog Feed Content -->
                                </div> 
                                <!-- End Single Blog Feed --> 
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Blog News   ::::::  -->

         <!-- ::::::  Start Newsletter Section  ::::::  -->
         @include('frontend.partials.newslatter')
         <!-- ::::::  End newsletter Section  ::::::  -->
 

    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->


    @endsection