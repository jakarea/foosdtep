<?php include 'include/header.php'; ?>
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

     <!-- ::::::  Start  Main Container Section  ::::::  -->
     <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content">
                        <h5 class="section-content__title">Your Previous Order</h5>
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
                                    <th>Re Order</th>
                                    <th>View Invoice</th>
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
                                    <td class="product-subtotal">
                                        <a href="#" class="btn btn-success p-2"><i class="fas fa-check"></i></a>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#" class="btn btn-secondary text-white p-2"><i class="fa fa-link"></i></a> 
                                    </td>
                                </tr> 
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
                                    <td class="product-subtotal">
                                        <a href="#" class="btn btn-success p-2"><i class="fas fa-check"></i></a>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#" class="btn btn-secondary text-white p-2"><i class="fa fa-link"></i></a> 
                                    </td>
                                </tr> 
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
                                    <td class="product-subtotal">
                                        <a href="#" class="btn btn-success p-2"><i class="fas fa-check"></i></a>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#" class="btn btn-secondary text-white p-2"><i class="fa fa-link"></i></a> 
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>  <!-- End Cart Table -->
                      
                </div>
            </div> 
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    <?php include 'include/footer.php'; ?>