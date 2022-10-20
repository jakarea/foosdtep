@extends('layouts.frontend')

@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-content">
                    <h5 class="section-content__title">Your cart items</h5>
                </div>
                <!-- Start Cart Table -->
                <div class="table-content table-responsive cart-table-content m-t-30">
                    <table>
                        <thead class="gray-bg" >
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Until Price</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-1.jpg" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                <td class="product-quantities">
                                    <div class="quantity d-inline-block">
                                        <input type="number" min="1" step="1" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal">$70.00</td>
                                <td class="product-remove">
                                    <a href="#"><i class="fa fa-pencil-alt"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-2.jpg" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                <td class="product-quantities">
                                    <div class="quantity d-inline-block">
                                        <input type="number" min="1" step="1" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal">$80.00</td>
                                <td class="product-remove">
                                    <a href="#"><i class="fa fa-pencil-alt"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img class="img-fluid" src="assets/img/product/size-small/product-home-1-img-3.jpg" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">Product Name</a></td>
                                <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                <td class="product-quantities">
                                    <div class="quantity d-inline-block">
                                        <input type="number" min="1" step="1" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal">$90.00</td>
                                <td class="product-remove">
                                    <a href="#"><i class="fa fa-pencil-alt"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  <!-- End Cart Table -->
                    <!-- Start Cart Table Button -->
                <div class="cart-table-button m-t-10">
                    <div class="cart-table-button--left">
                        <a href="#" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20">CONTINUE SHOPPING</a>
                    </div>
                    <div class="cart-table-button--right">
                        <a href="#" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20 m-r-20">UPDATE SHOPPING CART</a>
                        <a href="#" class="btn btn--box btn--large btn--radius btn--black btn--black-hover-green btn--uppercase font--bold m-t-20">Clear Shopping Cart</a>
                    </div>
                </div>  <!-- End Cart Table Button -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="sidebar__widget m-t-40">
                    <div class="sidebar__box">
                        <h5 class="sidebar__title">Estimate Shipping And Tax</h5>
                    </div>
                    <span>Enter your destination to get a shipping estimate.</span>
                    <form action="#" method="post" class="form-box">
                        <div class="form-box__single-group">
                            <label for="form-country">* Country</label>
                            <select id="form-country">
                                <option value="BD" selected>Bangladesh</option>
                                <option value="US">USA</option>
                                <option value="UK">UK</option>
                                <option value="TR">Turkey</option>
                                <option value="CA">Canada</option>
                            </select>
                        </div>
                        <div class="form-box__single-group">
                            <label for="form-state">* Region / State</label>
                            <select id="form-state">
                                <option value="Dha" selected>Dhaka</option>
                                <option value="Kha">Khulna</option>
                                <option value="Raj">Rajshahi</option>
                                <option value="Syl">Sylet</option>
                                <option value="Chi">Chittagong</option>
                            </select>
                        </div>
                        <div class="form-box__single-group">
                            <label for="form-zipcode">* Zip/Postal Code</label>
                            <input type="text" id="form-zipcode">
                        </div>
                        <div class="from-box__buttons m-t-25">
                            <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold" type="submit">GET A QUOTE</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar__widget m-t-40">
                    <div class="sidebar__box">
                        <h5 class="sidebar__title">Use Coupon Code</h5>
                    </div>
                    <span>Enter your coupon code if you have one.</span>
                    <form action="#" method="post" class="form-box">
                        <div class="form-box__single-group">
                            <label for="form-coupon">*Enter Coupon Code</label>
                            <input type="text" id="form-coupon">
                        </div>
                        <div class="from-box__buttons m-t-25">
                            <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold" type="submit">Apply Coupon</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar__widget m-t-40">
                    <div class="sidebar__box">
                        <h5 class="sidebar__title">Cart Total</h5>
                    </div>
                    <h6 class="total-cost">Total products Price<span>$260.00</span></h6>
                    <div class="total-shipping">
                        <span>Total shipping</span>
                        <ul class="shipping-cost m-t-10">
                            <li>
                                <label for="ship-standard">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Standard" id="ship-standard" checked><span>Standard</span>
                                </label>
                                <span class="ship-price">$20.00</span>
                            </li>
                            <li>
                                <label for="ship-express">
                                    <input type="radio" class="shipping-select" name="shipping-cost" value="Express" id="ship-express"><span>Express</span>
                                </label>
                                <span class="ship-price">$30.00</span>
                            </li>
                        </ul>
                    </div>
                    <h4 class="grand-total m-tb-25">Grand Total <span>$260.00</span></h4>
                    <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold" type="submit">PROCEED TO CHECKOUT</button>
                </div>
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection