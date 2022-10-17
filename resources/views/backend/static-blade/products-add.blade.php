@extends('layouts.backend')

@section('content') 
<!-- user form start -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Add Products</h4>
                    <a href="{{ url('static/products') }}" class="btn btn-primary btn-sm">{{ __('messages.view_all') }}</a> 
                </div>

                <form class="custom-validation" action="#">  
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.enter_name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <div>
                                    <input type="email" class="form-control" placeholder="Enter Price">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label">Weight</label>
                                <div>
                                    <input type="password" class="form-control" placeholder="Enter Weight">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Materials</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Enter Materials">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Dimensions</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Enter Dimensions">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Product Quantity</label>
                                <div>
                                    <input type="Text" placeholder="Enter Quantity" class="form-control">
                                </div>
                            </div>
                        </div> 
                        
                        
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.image') }}</label>
                                <div>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="mb-3"> 
                                <label class="form-label">{{ __('messages.preview') }}</label>
                                <div>
                                    <img src="{{ asset('backend/assets/images/users/avatar-5.jpg') }}" alt="User" style="width: 40px; border-radius: 4px;" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.status') }}</label>
                                <div>
                                <select name="" id="" class="form-select" aria-label="Default select example">
                                        <option value="">{{ __('messages.active') }}</option>
                                        <option value="">{{ __('messages.inactive') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Attributes</label>
                               
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Product Group
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                        <label class="form-check-label" for="flexCheckDefault2">
                                            Brand
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                        <label class="form-check-label" for="flexCheckDefault3">
                                            Line
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                        <label class="form-check-label" for="flexCheckDefault4">
                                            Faith
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                        <label class="form-check-label" for="flexCheckDefault5">
                                            Allergens &amp; Diet Preference
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                        <label class="form-check-label" for="flexCheckDefault6">
                                            Content
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Product Details</label>
                                <div> 
                                <form method="post">
                                    <textarea id="elm1" name="area"></textarea>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                            {{ __('messages.submit') }}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- user form end -->
@endsection