@extends('layouts.backend')
@section('title') Assign User Discount @endsection
@section('css')
<link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{__('b.discount_by_product') }}</h4>
                    <a href="{{ route('discounts.index') }}" class="btn btn-primary btn-sm">{{__('b.back') }}</a> 
                </div>

                <form class="custom-validation" action="{{ route('discounts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                       
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.product_name')}} </label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('messages.enter_name') }}" name="name" value="{{ old('name') }}" disabled>
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="Price">{{ __('b.price')}}</label>
                                <input type="text" name="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror" placeholder="{{ __('b.enter_price')}}" disabled>
                                <span class="text-danger">@error('price'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.short_desc')}} </label>
                                <textarea id="elm3" name="short_desc" class="form-control @error('short_desc') is-invalid @enderror" name="short_desc" style="min-height: 125px; " disabled>{{ old('short_desc') }}</textarea>
                                <span class="text-danger">@error('short_desc'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="mb-3">
                                <label class="form-label">{{__('b.preview')}}</label>
                                <div>
                                <img src="{{ asset('frontend/assets/img/product/1669256120.webp') }}" alt="image" width="110" class="img-fluid mt-2">
                                </div>
                            </div>
                        
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.discount') }}(%)</label>
                                <div>
                                    <input type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" placeholder="Enter Discount" value="{{old('discount')}}">
                                    <span class="text-danger">@error('discount'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.status') }}</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>{{__('b.select_below') }}</option>
                                        <option value="active">{{__('b.active') }}</option>
                                        <option value="inactive">{{__('b.inactive') }}</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.select_user') }}</label>
                                <div>
                                    <select name="users[]" class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ...">
                                         
                                        <option value="">User List</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-12">
                        <div class="text-end pb-4 me-3">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                               {{__('b.submit_discount')}}
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