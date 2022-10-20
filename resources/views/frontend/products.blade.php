@extends('layouts.frontend')

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
                <div class="img-responsive">
                        <img src="https://template.hasthemes.com/gsore/gsore/assets/img/banner/size-wide/banner-shop-1-img-1-wide.jpg" alt="">
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
                            <span>Showing 1 - 9 of 12 result</span>
                        </div>

                    <div class="product-tab-area">
                        <div class="tab-content tab-animate-zoom">
                            <div class="tab-pane show active shop-grid" id="sort-grid">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-6.webp" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                               
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <!-- <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li> -->
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <!-- <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul> -->
                                                <a href="{{ url('products/view')}}" class="product__link">Fresh green apple</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 </span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-7.webp" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <!-- <span class="product__label product__label--sale-dis">-34%</span> -->
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <!-- <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li> -->
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <!-- <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul> -->
                                                <a href="{{ url('products/view')}}" class="product__link">Juice fresh orange</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 </span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-8.webp" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <!-- <span class="product__label product__label--sale-dis">-35%</span> -->
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <!-- <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> -->
                                                 <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <!-- <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li> -->
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <!-- <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul> -->
                                                <a href="{{ url('products/view')}}" class="product__link">Best ripe grapes</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 </span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-9.webp" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link">Cow fresh milk</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 </span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-10.webp" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link">Fresh Red Tomato</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$10.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-1.webp" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <!-- <span class="product__label product__label--sale-dis">-34%</span> -->
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link">Fresh green vegetable</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 </span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-2.webp" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link">Fresh river fish</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$25.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-3.webp" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <!-- <span class="product__label product__label--sale-dis">-10%</span> -->
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                                </div> <!-- End Product Countdown -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link">Fresh pomegranate</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 </span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12">
                                         <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-4.webp" alt="">
                                                </a>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#modalQuickView" data-bs-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link">Cabbage vegetables</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane shop-list" id="sort-list">
                                <div class="row">
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-5.webp" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                    <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link"><h5 class="font--regular">Best Red Meat</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div> 
                                    </div> <!-- End Single List Product -->
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <!-- Start Single List Product -->
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-8.webp" alt="">
                                                </a>
                                                 <!-- Start Procuct Label -->
                                                 <span class="product__label product__label--sale-dis">-35%</span>
                                                 <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link"><h5 class="font--regular">Best Ripe Grapes</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single List Product -->
                                    </div> <!-- End Single List Product -->
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <!-- Start Single List Product -->
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-4.webp" alt="">
                                                </a>
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link"><h5 class="font--regular">Cabbage Vegetables</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single List Product -->
                                    </div> <!-- End Single List Product -->
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <!-- Start Single List Product -->
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="{{ url('products/view')}}" class="product__img--link">
                                                    <img class="product__img img-fluid" src="frontend/assets/img/product/size-normal/product-home-1-img-9.webp" alt="">
                                                </a>
                                                 <!-- Start Procuct Label -->
                                                 <span class="product__label product__label--sale-out">Soldout</span>
                                                 <!-- End Procuct Label -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content">
                                                <ul class="product__review">
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                </ul>
                                                <a href="{{ url('products/view')}}" class="product__link"><h5 class="font--regular">Cow Fresh Milk</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#modalAddCart" data-bs-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                    <li><a href="compare.html"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single List Product -->
                                    </div> <!-- End Single List Product -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-pagination">
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Prev</a>
                            <li class="page-pagination__item"><a class="page-pagination__link active"  href="#">1</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">2</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Next</a>
                            </li>
                          </ul>
                    </div>
                </div>  <!-- Start Rightside - Product Type View -->
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->


    @endsection