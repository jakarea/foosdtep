@extends('layouts.backend')
@section('title') Update Multi Discount @endsection
@section('css')
<link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Update User & Product Discount</h4>
                    <a href="{{ route('multidiscount.index') }}" class="btn btn-primary btn-sm">Back</a> 
                </div>

                <form class="custom-validation" action="{{ route('multidiscount.update', $multidiscount->id) }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Discount(%)</label>
                                <div>
                                    <input type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" placeholder="Enter Discount" value="{{ old('discount', $multidiscount->value) }}">
                                    <span class="text-danger">@error('discount'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Discount Type</label><br>
                                <div class="form-check mb-2 d-inline-block">
                                    <input class="form-check-input" type="radio" name="discount_type" id="discount_type" value="percentage" {{ $multidiscount->type == 'percentage' ? "checked" : "" }} >
                                    <label class="form-check-label" for="discount_type">Percentage</label>&nbsp;
                                </div>
                                <div class="form-check mb-2 d-inline-block">
                                    <input class="form-check-input" type="radio" name="discount_type" id="flat_discount" value="numeric" {{ $multidiscount->type == 'numeric' ? "checked" : "" }}>
                                    <label class="form-check-label" for="flat_discount">Flat</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Select Users</label>
                                <div>
                                    @php
                                        $userID = explode(',', $multidiscount->user_id);
                                    @endphp
                                    <select name="users[]" class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ...">
                                        @foreach( $users as $user )
                                            <option value="{{ $user->id }}" {{ in_array($user->id, $userID) ? "selected" : "" }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select> 
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Select Product</label>
                                <div>
                                    @php
                                        $productID = explode(',', $multidiscount->product_id);
                                    @endphp
                                    <select name="products[]" class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ...">
                                        @foreach( $products as $product )
                                            <option value="{{ $product->id }}" {{ in_array($product->id, $productID) ? "selected" : "" }}>{{ $product->name }}</option>
                                        @endforeach
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active" {{ $multidiscount->status == 'active' ? "selected" : "" }}>Active</option>
                                        <option value="inactive" {{ $multidiscount->status == 'inactive' ? "selected" : "" }}>In-Active</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-12">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Save Changes
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>
@endsection