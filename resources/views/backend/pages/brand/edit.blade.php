@extends('layouts.backend')
@section('title') Edit Brand @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{ __('b.brand_edit') }}</h4>
                    <a href="{{ route('brand.index') }}" class="btn btn-primary btn-sm">{{ __('b.back') }}</a> 
                </div>

                <form class="custom-validation" action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.brand')}} {{__('b.name')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter brand name" value="{{ $brand->name }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.parent_brand')}}</label>
                                <div>
                                <select name="parent_id" id="" class="form-select @error('parent_id') is-invalid @enderror" aria-label="Default select example">
                                    <option selected disabled>{{__('b.select_below')}}</option>
                                    @foreach($brands as $value)
                                    <option value="{{ $value->id }}" @if($value->id == $brand->id) selected @endif>{{ $value->name }}</option>
                                    @foreach($value->children as $subcategory)
                                        <option value="{{ $subcategory->id }}" @if($subcategory->id == $brand->id) selected @endif>-{{ $subcategory->name }}</option>
                                    @endforeach
                                    @endforeach
                                </select> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.brand')}} {{__('b.image')}}</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <label class="form-label">{{__('b.preview')}}</label>
                            <div>
                                <img src="{{ asset('backend/assets/images/brands/'. $brand->image) }}" alt="image" width="30" class="img-fluid mt-2">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.status')}}</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active" @if($brand->status == 'active') selected @endif>{{__('b.active')}}</option>
                                        <option value="inactive" @if($brand->status == 'inactive') selected @endif>{{__('b.inactive')}}</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                {{__('b.update_brand')}}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection