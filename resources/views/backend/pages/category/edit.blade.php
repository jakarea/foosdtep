@extends('layouts.backend')
@section('title') Edit Category @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{ __('b.categories_edit') }}</h4>
                    <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">{{ __('b.back') }}</a> 
                </div>

                <form class="custom-validation" action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.category') }} {{ __('b.name') }}</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter category name" value="{{ $category->name }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.parent_category') }}</label>
                                <div>
                                <select name="parent_cat" id="" class="form-select @error('parent_cat') is-invalid @enderror" aria-label="Default select example">
                                    <option selected disabled>{{ __('b.select_below') }}</option>
                                    @foreach($categories as $value)
                                    <option value="{{ $value->id }}" @if($value->id == $category->id) selected @endif>{{ $value->name }}</option>
                                    @foreach($value->children as $subcategory)
                                        <option value="{{ $subcategory->id }}" @if($subcategory->id == $category->id) selected @endif>-{{ $subcategory->name }}</option>
                                    @endforeach
                                    @endforeach
                                </select> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.category') }} {{ __('b.image') }}</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <img src="{{ asset('backend/assets/images/category/'. $category->image) }}" alt="image" width="30" class="img-fluid mt-2">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.status') }}</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('parent_cat') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>{{ __('b.select_below') }}</option>
                                        <option value="active" @if($category->status == 'active') selected @endif>{{__('b.active')}}</option>
                                        <option value="inactive" @if($category->status == 'inactive') selected @endif>{{__('b.inactive')}}</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                            {{ __('b.update_category') }}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection