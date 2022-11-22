@extends('layouts.backend')

@section('content') 
<div class="row">
    <div class="col-md-12 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="profile-widgets py-3 pb-0" style="position: relative;">
                <a href="{{ url('static/users/edit') }}" style="font-size: 22px; position: absolute; right: 0px; top: 0px;"><i class="mdi mdi-pencil-outline"></i></a>
                    <div class="text-center">
                    
                        <div class="">
                            <img src="{{ asset('backend/assets/images/users/avatar-2.jpg') }}" alt=""
                                class="avatar-lg mx-auto img-thumbnail rounded-circle">
                            <div class="online-circle"><i class="fas fa-circle text-success"></i>
                            </div>
                        </div> 

                        <div class="row mt-4 border border-start-0 border-end-0 p-3" style="border-bottom: 0px!important;">
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

    <div class="col-md-12 col-xl-9">
        <div class="row">
            <div class="col-md-12 col-xl-4">
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
                                        <i class="mdi mdi-cart text-success ml-1" style="font-size: 30px;"></i>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">Total Discount</p>
                                <h4 class="mb-0">3,524</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        <i class="mdi mdi-cart text-primary ml-1" style="font-size: 30px;"></i>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">User Status</p>
                                <h4 class="mb-0">Active</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-end">
                                    <div>
                                        <i class="mdi mdi-cart text-secondary ml-1" style="font-size: 30px;"></i>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-3">Personal Information</h5>

            <p class="card-title-desc">
                Hi I'm Patrick Becker, been industry's standard dummy ultrices Cambridge.
            </p>


            <div class="row">
                <div class="col-md-6">
                    <p class="font-size-12 text-muted mb-1">Email Address</p>
                    <h6 class="">StaceyTLopez@armyspy.com</h6>
                </div>
                <div class="col-md-6">
                <p class="font-size-12 text-muted mb-1">Phone number</p>
                <h6 class="">001 951-402-8341</h6>
                </div>
            </div> 

            <div class="mt-3">
                <p class="font-size-12 text-muted mb-1">Office Address</p>
                <h6 class="">2240 Denver Avenue
                    Los Angeles, CA 90017</h6>
            </div>

        </div>
    </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Recent Orders</h4>

                <div class="table-responsive">
                    <table class="table table-centered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Order Id</th> 
                                <th scope="col">Amount</th>
                                <th scope="col">Order Status</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>123-xdc-ert-rvc</td> 
                                <td>$ 125</td> 
                                <td><span class="badge badge-soft-success font-size-12">Complet</span> </td>
                                <td>
                                    <a href="{{url('static/invoice')}}" class="btn btn-primary btn-sm">Details</a>
                                    <a href="#" class="btn btn-success btn-sm">Reorder</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>123-xdc-ert-rvc</td> 
                                <td>$ 125</td> 
                                <td><span class="badge badge-soft-danger font-size-12">Cancled</span></td>
                                <td>
                                    <a href="{{url('static/invoice')}}" class="btn btn-primary btn-sm">Details</a>
                                <a href="#" class="btn btn-success btn-sm">Reorder</a>
                            </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>123-xdc-ert-rvc</td> 
                                <td>$ 125</td> 
                                <td><span class="badge badge-soft-warning font-size-12">Pending</span></td>
                                <td>
                                    <a href="{{url('static/invoice')}}" class="btn btn-primary btn-sm">Details</a>
                                    <a href="#" class="btn btn-success btn-sm">Reorder</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection