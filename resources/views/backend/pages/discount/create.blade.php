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
                    <h4 class="card-title">{{__('b.assign_user_discount') }}</h4>
                    <a href="{{ route('discounts.index') }}" class="btn btn-primary btn-sm">{{__('b.back')}}</a> 
                </div>

                <form class="custom-validation" action="{{ route('discounts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.discount') }}(%)</label>
                                <div>
                                    <input type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" placeholder="Enter Discount" value="{{old('discount')}}">
                                    <span class="text-danger">@error('discount'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.discount_type') }}</label><br>
                                <div class="form-check mb-2 d-inline-block">
                                    <input class="form-check-input" type="radio" name="discount_type" id="discount_type" value="percentage" {{ old('discount_type')  == 'percentage' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="discount_type">Percentage</label>&nbsp;
                                </div>
                                <div class="form-check mb-2 d-inline-block">
                                    <input class="form-check-input" type="radio" name="discount_type" id="flat_discount" value="numeric" {{ old('discount_type')  == 'numeric' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="flat_discount">Flat</label>
                                </div>
                                <br/>
                                <span class="text-danger">@error('discount_type'){{ $message }} @enderror</span>
                            </div>
                        </div> -->
                        
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
                                        @foreach( $users as $user )
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-12">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                {{ __('b.submit_discount') }}
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