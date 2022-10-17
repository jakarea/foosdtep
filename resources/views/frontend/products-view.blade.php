@extends('layouts.frontend')

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
                        <img class="img-fluid" id="img-zoom" src="https://template.hasthemes.com/gsore/gsore/assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" data-zoom-image="https://template.hasthemes.com/gsore/gsore/assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                    </div> 
                </div>
            </div>
            <div class="col-md-7">
                <div class="product-details-box m-b-60">
                    <h4 class="font--regular m-b-20">Fresh Green Apple</h4>
                    <ul class="product__review">
                        <li class="product__review--fill"><i class="icon-star"></i></li>
                        <li class="product__review--fill"><i class="icon-star"></i></li>
                        <li class="product__review--fill"><i class="icon-star"></i></li>
                        <li class="product__review--fill"><i class="icon-star"></i></li>
                        <li class="product__review--blank"><i class="icon-star"></i></li>
                    </ul>
                    <div class="product__price m-t-5">
                        <span class="product__price product__price--large">$19.00 <del>$29.00</del></span>
                        <span class="product__tag m-l-15 btn--tiny btn--green">-34%</span>
                    </div>

                    <div class="product__desc m-t-25 m-b-30">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                    <div class="product-var p-tb-30">
                        <div class="product__stock m-b-20">
                            <span class="product__stock--in"><i class="fas fa-check-circle"></i> 199 IN STOCK</span>
                        </div>
                        <div class="product-quantity product-var__item">
                            <ul class="product-modal-group">
                                <li><a href="#modalSizeGuide" data-bs-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-money-check-edit"></i>Size Guide</a></li>
                                <li><a href="#modalShippinginfo" data-bs-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-truck-container"></i>Shipping</a></li>
                                <li><a href="#modalProductAsk" data-bs-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-envelope"></i>Ask About This product</a></li>
                            </ul>
                        </div>
                        <div class="product-quantity product-var__item d-flex align-items-center">
                            <span class="product-var__text">Quantity: </span>
                            <form class="quantity-scale m-l-20">
                                <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                <input type="number" id="number" value="1" />
                                <div class="value-button" id="increase" onclick="increaseValue()">+</div>
                            </form>
                            <a href="wishlist.html" style="margin-left: 20px;" class="btn btn--round btn--round-size-small btn--green btn--green-hover-black"><i class="icon-shopping-cart"></i></a>
                        </div> 
                        <div class="product-var__item">
                            <div class="dynmiac_checkout--button">
                                <input type="checkbox" id="buy-now-check" value="1" class="p-r-30">
                                <label for="buy-now-check" class="m-b-20">I agree with the terms and condition</label>
                                <a href="cart.html" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Buy It Now</a>
                            </div>
                        </div> 
                        <div class="product-var__item d-flex align-items-center">
                            <span class="product-var__text">Share: </span>
                            <ul class="product-social m-l-20">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Product Details Gallery -->

<!-- Start Product Details Tab -->
<div class="product-details-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-details-content">
                    <ul class="tablist tablist--style-black tablist--style-title tablist--style-gap-30 nav">
                        <li><a class="nav-link active" data-bs-toggle="tab" href="#product-desc">Description</a></li>
                        <li><a class="nav-link" data-bs-toggle="tab" href="#product-dis">Product Details</a></li>
                        <li><a class="nav-link" data-bs-toggle="tab" href="#product-review">Reviews</a></li>
                    </ul>
                    <div class="product-details-tab-box">
                        <div class="tab-content">
                            <!-- Start Tab - Product Description -->
                            <div class="tab-pane show active" id="product-desc">
                                <div class="para__content">
                                    <p class="para__text">Use the Canon VIXIA GX10 Camcorder to capture UHD 4K video at 60 fps, recording in MP4 to dual SD memory card slots. This camcorder packs several pro-style features into its compact form, including Dual-Pixel Autofocus (DPAF). The GX10's 1" 8.29MP CMOS sensor and dual DIGIC DV 6 image processors support Wide DR Gamma with high sensitivity and low noise. Slow and fast-motion recording up to 120 fps offers special looks for highlighting sports and other special events. Smooth, steady shooting is assisted by the GX10's five-axis optical image stabilization. For composing and viewing your footage, the VIXIA GX10 incorporates a flip-out 3.5" touchscreen LCD, and a 0.24" electronic viewfinder. </p>
                                    <p class="para__text">Additional GX10 features include an HDMI 2.0 port for outputting your 4K UHD footage, assignable user buttons, and remote control using the included WL-D89 controller. Wi-Fi connectivity offers live streaming, FTP file sharing, and remote control via iOS and Android apps.</p>
                                    <h6 class="para__title">Product Highlights:</h6>
                                    <ul class="para__list">
                                        <li>UHD 4K Output up to 60 fps</li>
                                        <li>8.29MP, 1" CMOS Sensor</li>
                                        <li>Dual-Pixel CMOS Autofocus Feature</li>
                                        <li>Integrated 15x Optical Zoom Lens</li>
                                        <li>2 x DIGIC DV 6 Processors</li>
                                        <li>5-Axis Optical Image Stabilization</li>
                                        <li>Wide Dynamic Range Support</li>
                                        <li>Records 4K UHD/HD to Dual SD Card Slots</li>
                                        <li>3.5" Touchscreen LCD &amp; 0.24" EVF</li>
                                        <li>Live Stream/FTP/Remote App via Wi-Fi</li>
                                    </ul>
                                </div>    
                            </div>  <!-- End Tab - Product Description -->

                            <!-- Start Tab - Product Details -->
                            <div class="tab-pane" id="product-dis">
                                <div class="product-dis__content">
                                    <a href="#" class="product-dis__img m-b-30"><img src="assets/img/logo/another-logo.jpg" alt=""></a>
                                    <div class="table-responsive-md">
                                        <table class="product-dis__list table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="product-dis__title">Weight</td>
                                                    <td class="product-dis__text">400 g</td>
                                                </tr>
                                                <tr>
                                                    <td class="product-dis__title">Materials</td>
                                                    <td class="product-dis__text">60% cotton, 40% polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="product-dis__title">Dimensions</td>
                                                    <td class="product-dis__text">10 x 10 x 15 cm</td>
                                                </tr>
                                                <tr> 
                                                    <td class="product-dis__title">Other Info</td>
                                                    <td class="product-dis__text">American heirloom jean shorts pug seitan letterpress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>  <!-- End Tab - Product Details -->

                            <!-- Start Tab - Product Review -->
                            <div class="tab-pane " id="product-review">
                                <!-- Start - Review Comment -->
                                <ul class="comment">
                                    <!-- Start - Review Comment list-->
                                    <li class="comment__list">
                                        <div class="comment__wrapper">
                                            <div class="comment__img">
                                                <img src="assets/img/user/image-1.png" alt=""> 
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__content-top">
                                                    <div class="comment__content-left">
                                                        <h6 class="comment__name">Kaedyn Fraser</h6>
                                                        <ul class="product__review">
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                                    </ul>
                                                    </div>   
                                                    <div class="comment__content-right">
                                                        <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="para__content">
                                                    <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start - Review Comment Reply-->
                                        <ul class="comment__reply">
                                            <li class="comment__reply-list">
                                                <div class="comment__wrapper">
                                                    <div class="comment__img">
                                                        <img src="assets/img/user/image-2.png" alt=""> 
                                                    </div>
                                                    <div class="comment__content">
                                                        <div class="comment__content-top">
                                                            <div class="comment__content-left">
                                                                <h6 class="comment__name">Oaklee Odom</h6>
                                                            </div>   
                                                            <div class="comment__content-right">
                                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="para__content">
                                                            <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> <!-- End - Review Comment Reply-->
                                    </li> <!-- End - Review Comment list-->
                                    <!-- Start - Review Comment list-->
                                    <li class="comment__list">
                                        <div class="comment__wrapper">
                                            <div class="comment__img">
                                                <img src="assets/img/user/image-3.png" alt=""> 
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__content-top">
                                                    <div class="comment__content-left">
                                                        <h6 class="comment__name">Jaydin Jones</h6>
                                                        <ul class="product__review">
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                                    </ul>
                                                    </div>   
                                                    <div class="comment__content-right">
                                                        <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="para__content">
                                                    <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li> <!-- End - Review Comment list-->
                                </ul>  <!-- End - Review Comment -->

                                <!-- Start Add Review Form-->
                                <div class="review-form m-t-40">
                                    <div class="section-content">
                                        <h6 class="font--bold text-uppercase">ADD A REVIEW</h6>
                                        <p class="section-content__desc">Your email address will not be published. Required fields are marked *</p>
                                    </div>
                                    <form class="form-box" action="#" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-box__single-group">
                                                    <label for="form-name">Your Rating*</label>
                                                    <ul class="product__review">
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-box__single-group">
                                                    <label for="form-name">Your Name*</label>
                                                    <input type="text" id="form-name" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-box__single-group">
                                                    <label for="form-email">Your Email*</label>
                                                    <input type="email" id="form-email" placeholder="Enter your email" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-box__single-group">
                                                    <label for="form-review">Your review*</label>
                                                    <textarea id="form-review" rows="8" placeholder="Write a review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- End Add Review Form- -->
                            </div>  <!-- Start Tab - Product Review -->
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
                <div class="section-content section-content--border m-b-35">
                    <h5 class="section-content__title">Related Product
                    </h5>
                    <a href="shop-sidebar-grid-left.html" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More Products<i class="fal fa-angle-right"></i></a>
                </div>  <!-- End Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="default-slider default-slider--hover-bg-red product-default-slider">
                    <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                </a>
                                <!-- Start Procuct Label -->
                                <span class="product__label product__label--sale-dis">-34%</span>
                                <!-- End Procuct Label -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Fresh green vegetable</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                </a>
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Fresh river fish</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$25.00</span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                </a>
                                <!-- Start Procuct Label -->
                                <span class="product__label product__label--sale-dis">-10%</span>
                                <!-- End Procuct Label -->
                                <!-- Start Product Countdown -->
                                <div class="product__counter-box">
                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                </div> <!-- End Product Countdown -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Fresh pomegranate</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$19.00 <del>$21.00</del></span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                </a>
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Cabbage vegetables</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$50.00</span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                </a>
                                <!-- Start Procuct Label -->
                                <span class="product__label product__label--sale-dis">-31%</span>
                                <!-- End Procuct Label -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Best red meat</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                </a>
                                <!-- Start Procuct Label -->
                                <span class="product__label product__label--sale-dis">-34%</span>
                                <!-- End Procuct Label -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Fresh green apple</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                </a>
                                <!-- Start Procuct Label -->
                                <span class="product__label product__label--sale-dis">-34%</span>
                                <!-- End Procuct Label -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Juice fresh orange</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                </a>
                                <!-- Start Procuct Label -->
                                <span class="product__label product__label--sale-dis">-35%</span>
                                <!-- End Procuct Label -->
                                <!-- Start Product Countdown -->
                                <div class="product__counter-box">
                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                </div> <!-- End Product Countdown -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Best ripe grapes</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->

                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                </a>
                                <!-- Start Procuct Label -->
                                <span class="product__label product__label--sale-out">Soldout</span>
                                <!-- End Procuct Label -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Cow fresh milk</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$55.00 <del>$75.00</del></span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                        <!-- Start Single Default Product -->
                        <div class="product__box product__default--single text-center">
                            <!-- Start Product Image -->
                            <div class="product__img-box  pos-relative">
                                <a href="product-single-default.html" class="product__img--link">
                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                </a>
                                <!-- Start Procuct Label -->
                                <span class="product__label product__label--sale-out">Soldout</span>
                                <!-- End Procuct Label -->
                                <!-- Start Product Action Link-->
                                <ul class="product__action--link pos-absolute">
                                    <li><a href="#modalAddCart" data-bs-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                    
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
                                <a href="product-single-default.html" class="product__link">Fresh Red Tomato</a>
                                <div class="product__price m-t-5">
                                    <span class="product__price">$10.00</span>
                                </div>
                            </div> <!-- End Product Content -->
                        </div> <!-- End Single Default Product -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->


</main>  <!-- :::::: End MainContainer Wrapper :::::: -->

    @endsection