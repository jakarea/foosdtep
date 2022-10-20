@extends('layouts.frontend')

@section('content')

<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container m-b-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- :::::::::: Start My Account Section :::::::::: -->
                <div class="my-account-area">
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <div class="my-account-menu">
                                <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab" role="tablist">
                                    <li>
                                        <a class="active link--icon-left" id="pills-dashboard-tab" data-bs-toggle="pill" href="#pills-dashboard"
                                            role="tab" aria-controls="pills-dashboard" aria-selected="true"><i
                                                class="fas fa-tachometer-alt"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a id="pills-order-tab" class="link--icon-left" data-bs-toggle="pill" href="#pills-order" role="tab"
                                            aria-controls="pills-order" aria-selected="false"><i
                                                class="fas fa-shopping-cart"></i>Previous Order</a>
                                    </li>  
                                    <li>
                                        <a id="pills-address-tab" class="link--icon-left" data-bs-toggle="pill" href="#pills-address" role="tab"
                                            aria-controls="pills-address" aria-selected="false"><i
                                                class="fas fa-map-marker-alt"></i> Address</a>
                                    </li>
                                    <li>
                                        <a id="pills-account-tab" class="link--icon-left" data-bs-toggle="pill" href="#pills-account" role="tab"
                                            aria-controls="pills-account" aria-selected="false"><i class="fas fa-user"></i>
                                            Account Details</a>
                                    </li>
                                    <li>
                                        <a class="link--icon-left" href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="tab-content my-account-tab" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                                    aria-labelledby="pills-dashboard-tab">
                                    <div class="my-account-dashboard account-wrapper">
                                        <div class="d-flex justify-content-between mb-2">
                                        <h4 class="account-title">Profile</h4>
                                        <a href="#"><i class="fas fa-pen"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="profile-widgets py-3 pb-0">
                                                            <div class="text-center">
                                                                <div> 
                                                                    <img src="{{ asset('frontend/assets/img/user/default.jpg') }}" alt="Profile" style="width: 100px;" class="avatar-lg mx-auto">
                                                                </div> 

                                                                <div class="row mt-4">
                                                                    <div class="col-md-12">
                                                                        <h6 class="text-muted">
                                                                            Email
                                                                        </h6>
                                                                        <h5 class="mb-0">bekar@info.com</h5>
                                                                    </div> 
                                                                </div> 
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <p class="mb-2">Total Orders</p>
                                                                <h4 class="mb-0">3,524</h4>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="text-end">
                                                                    <div>
                                                                        <i class="fas fa-shopping-cart text-info" style="font-size: 30px;"></i>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mt-4">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <p class="mb-2">Saves</p>
                                                                <h4 class="mb-0">3,524</h4>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="text-end">
                                                                    <div>
                                                                        <i class="fas fa-euro-sign text-primary" style="font-size: 30px;"></i>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                       
                                        <div class="welcome-dashboard m-t-30">
                                            <p><strong>Personal Information</strong></p>
                                        </div>
                                        <p class="mt-2">From your account dashboard. you can easily check &amp; view your
                                            recent orders, manage your shipping and billing addresses and edit your password and
                                            account details.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                                    <div class="my-account-order account-wrapper">
                                        <h4 class="account-title">Orders</h4>
                                        <div class="account-table text-center m-t-30 table-responsive">
                                            <div class="table-content table-responsive cart-table-content m-t-30">
                                                <table>
                                                    <thead class="gray-bg" >
                                                        <tr>
                                                            <th class="no">No</th>
                                                            <th class="name">Name</th>
                                                            <th class="date">Date</th>
                                                            <th class="status">Status</th> 
                                                            <th class="action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2020</td>
                                                        <td>Pending</td> 
                                                        <td>
                                                            <a href="#" title="Reorder" class="btn btn-success p-2"><i class="fas fa-repeat"></i></a>
                                                            <a href="#" title="View" class="btn text-white btn-info p-2 ms-2"><i class="fas fa-eye"></i></a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Katopeno Altuni</td>
                                                        <td>July 22, 2020</td>
                                                        <td>Approved</td>
                                                        <td>
                                                            <a href="#" title="Reorder" class="btn btn-success p-2"><i class="fas fa-repeat"></i></a>
                                                            <a href="#" title="View" class="btn text-white btn-info p-2 ms-2"><i class="fas fa-eye"></i></a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Murikhete Paris</td>
                                                        <td>June 22, 2020</td>
                                                        <td>On Hold</td>
                                                        <td>
                                                            <a href="#" title="Reorder" class="btn btn-success p-2"><i class="fas fa-repeat"></i></a>
                                                            <a href="#" title="View" class="btn text-white btn-info p-2 ms-2"><i class="fas fa-eye"></i></a> 
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-download" role="tabpanel"
                                    aria-labelledby="pills-download-tab">
                                    <div class="my-account-download account-wrapper">
                                        <h4 class="account-title">Download</h4>
                                        <div class="account-table text-center m-t-30 table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="name">Product</th>
                                                        <th class="date">Date</th>
                                                        <th class="status">Expire</th>
                                                        <th class="action">Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2020</td>
                                                        <td>Yes</td>
                                                        <td><a href="#">Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Katopeno Altuni</td>
                                                        <td>July 22, 2020</td>
                                                        <td>Never</td>
                                                        <td><a href="#">Download File</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                    aria-labelledby="pills-payment-tab">
                                    <div class="my-account-payment account-wrapper">
                                        <h4 class="account-title">Home Adress</h4>
                                        <p class="m-t-30">Your Home Adress details.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-address" role="tabpanel"
                                    aria-labelledby="pills-address-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="my-account-address account-wrapper">
                                                <h4 class="account-title">Home Adress</h4>
                                                <div class="account-address m-t-30">
                                                    <h6 class="name">NYC,123, USA</h6>
                                                    <p>1355 Market St, Suite 900 <br> San Francisco, CA 94103</p>
                                                    <p>Mobile: (123) 456-7890</p>
                                                    <a class="box-btn m-t-25 " href="#"><i class="far fa-edit"></i> Edit Address</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="my-account-address account-wrapper">
                                                <h4 class="account-title">Office Adress</h4>
                                                <div class="account-address m-t-30">
                                                    <h6 class="name">NYC,123, USA</h6>
                                                    <p>1355 Market St, Suite 900 <br> San Francisco, CA 94103</p>
                                                    <p>Mobile: (123) 456-7890</p>
                                                    <a class="box-btn m-t-25 " href="#"><i class="far fa-edit"></i> Edit Address</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-account" role="tabpanel"
                                    aria-labelledby="pills-account-tab">
                                    <div class="my-account-details account-wrapper">
                                        <h4 class="account-title">Account Details</h4>

                                        <div class="account-details">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="Zip Code">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-box__single-group">
                                                        <select name="" id="">
                                                            <option value="">Status</option>
                                                            <option value="">Active</option>
                                                            <option value="">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="col-md-8">
                                                    <div class="form-box__single-group">
                                                        <label for="">Image</label>
                                                        <input type="file" >
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-box__single-group">
                                                        <label for="">Preview</label>
                                                        <img src="{{ asset('frontend/assets/img/user/default.jpg') }}" alt="a" class="img-fluid" style="width: 40px;">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="Home Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="text" placeholder="Office Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-box__single-group">
                                                        <textarea name="" placeholder="Bio" id="" cols="10" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <button class="btn btn--box btn--radius btn--small btn--black btn--black-hover-green btn--uppercase font--bold">Save Information</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-box__single-group">
                                                        <h5 class="title">Password change</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-box__single-group">
                                                        <input type="password" placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <input type="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-box__single-group">
                                                        <button class="btn btn--box btn--radius btn--small btn--black btn--black-hover-green btn--uppercase font--bold">Save Change</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- :::::::::: End My Account Section :::::::::: -->
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection