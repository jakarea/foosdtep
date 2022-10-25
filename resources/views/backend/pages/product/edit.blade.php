@extends('layouts.backend')
@section('title') Edit Product @endsection
@section('content')
<!-- Product create start -->
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Edit Products</h4>
                    <a href="{{ url('static/products') }}" class="btn btn-primary btn-sm">{{ __('messages.view_all') }}</a> 
                </div>

                <form class="custom-validation" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('messages.enter_name') }}" name="name" value="{{ old('name', $product->name) }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div> 

                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="Status">Status</label>
                                <select name="status" id="" class="form-select" aria-label="Default select example">
                                    <option value="active" @if($product->status == 'active') selected @endif>{{ __('messages.active') }}</option>
                                    <option value="inactive" @if($product->status == 'inactive') selected @endif>{{ __('messages.inactive') }}</option>
                                </select>
                                <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Price">Price</label>
                                <input type="text" name="price" value="{{ old('price', $product->price) }}" class="form-control @error('price') is-invalid @enderror" placeholder="Enter Price">
                                <span class="text-danger">@error('price'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Short Description</label>
                                <textarea id="elm3" name="short_desc" class="form-control @error('short_desc') is-invalid @enderror" name="short_desc">{{ old('short_desc', $product->short_description) }}</textarea>
                                <span class="text-danger">@error('short_desc'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Product Details</label>
                                <textarea id="elm1" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->long_description) }}</textarea>
                                <span class="text-danger">@error('description'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Specifications</label>
                                <textarea id="elm2" name="specification" class="form-control @error('specification') is-invalid @enderror"> {{ old('specification', $product->specific_description) }}</textarea>
                                <span class="text-danger">@error('specification'){{ $message }} @enderror</span>
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
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <!-- Category card -->
        <div class="card rounded">
            <div class="card-header bg-primary text-white">
                Categories
            </div>
            <div class="card-body">
                <ul class="m-0 p-0">
                @php
                    $categoryChecked = explode(',', $product->cat_id);
                @endphp   
                @foreach( $categoies as $key => $category )
                <li>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="cat[]" value="{{ $category->id }}" id="cat{{ $key+1 }}" {{ in_array($category->id, $categoryChecked) ? "checked" : "" }}>
                        <label class="form-check-label" for="cat{{ $key+1 }}">{{ $category->name }}</label>
                    </div>
                    @if(count($category->children))
                        @include('backend.pages.product.sub_category_list_edit',['subcategories' => $category->children])
                    @endif
                </li>
                @endforeach

                </ul>
            </div>
        </div>
        <!-- Brand card -->
        <div class="card rounded">
            <div class="card-header bg-primary text-white">Brand</div>
            <div class="card-body">
                @php
                    $brandChecked = explode(',', $product->brand_id);
                @endphp

                @foreach( $brands as $key => $brand )
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="brand[]" value="{{ $brand->id }}" id="brand{{$key+1}}" {{ in_array($brand->id, $brandChecked) ? "checked" : "" }} >
                    <label class="form-check-label" for="brand{{$key+1}}">{{ $brand->name }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Productgroup card -->
        <div class="card rounded">
            <div class="card-header bg-primary text-white">
                Product Group
            </div>
            <div class="card-body">
                @php
                    $productGroupChecked = explode(',', $product->prodcut_group_id);
                @endphp
                @foreach($productgroups as $key => $productgroup)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="productgroup[]" value="{{ $productgroup->id }}" id="productGroup{{ $key+1 }}" {{ in_array($productgroup->id, $productGroupChecked) ? "checked" : "" }}>
                    <label class="form-check-label" for="productGroup{{ $key+1 }}">{{ $productgroup->name }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Faith card -->
        <div class="card rounded">
            <div class="card-header bg-primary text-white">
                Faith
            </div>
            <div class="card-body">
                @php
                    $faithChecked = explode(',', $product->faith_id);
                @endphp
                @foreach($faiths as $key => $faith)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="faith[]" value="{{ $faith->id }}" id="faith{{ $key+1 }}" {{ in_array($faith->id, $faithChecked) ? "checked" : "" }}>
                    <label class="form-check-label" for="faith{{ $key+1 }}">{{ $faith->name }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Line card -->
        <div class="card rounded">
            <div class="card-header bg-primary text-white">
                Line
            </div>
            <div class="card-body">
                @php
                    $lineChecked = explode(',', $product->line_id);
                @endphp
                @foreach($lines as $key => $line)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="line[]" value="{{ $line->id }}" id="line{{ $key+1 }}" {{ in_array($line->id, $lineChecked) ? "checked" : "" }}>
                    <label class="form-check-label" for="line{{ $key+1 }}">{{ $line->name }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Content card -->
        <div class="card rounded">
            <div class="card-header bg-primary text-white">
                Contents
            </div>
            <div class="card-body">
                @php
                    $contentChecked = explode(',', $product->content_id);
                @endphp
                @foreach($contents as $key => $content)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="content[]" value="{{ $content->id }}" id="content{{ $key+1 }}" {{ in_array($content->id, $contentChecked) ? "checked" : "" }}>
                    <label class="form-check-label" for="content{{ $key+1 }}">{{ $content->name }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <!-- AllergensDP card -->
        <div class="card rounded">
            <div class="card-header bg-primary text-white">
                AllergensDP
            </div>
            <div class="card-body">
                @php
                    $allergensChecked = explode(',', $product->allergens_dp_id);
                @endphp
                @foreach($allergensDP as $key => $allergens)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="allergens[]" value="{{ $allergens->id }}" id="allergens{{ $key+1 }}" {{ in_array($allergens->id, $allergensChecked) ? "checked" : "" }}>
                    <label class="form-check-label" for="allergens{{ $key+1 }}">{{ $allergens->name }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Image card -->
        <div class="card rounded">
            <div class="card-header bg-primary text-white">
                Image Upload
            </div>
            <div class="card-body">
                <label class="form-label">{{ __('messages.image') }}</label>
                <input type="file" name="featureimage" class="form-control mb-1" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                <img src="{{ asset('frontend/assets/img/product/'. $product->image) }}" alt="" class="img-fluid" id="image">
            </div>
        </div>

        </form>
    </div>
</div>
<!-- Product create end -->
@endsection