@extends('layouts.backend')
@section('title') Create Brand @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Brand Add</h4>
                    <a href="{{ route('brand.index') }}" class="btn btn-primary btn-sm">Back</a> 
                </div>

                <form class="custom-validation" action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">Brnad Name</label>
                                <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter brand name">
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Parent Brand</label>
                                <select name="parent_id" id="" class="form-select @error('parent_id') is-invalid @enderror" aria-label="Default select example">
                                    <option selected disabled>Select Below</option>
                                    @foreach($brands as $category)
                                    <option value="{{ $category->id }}" {{ old('parent_id') == $category->id ? "selected" : '' }}>{{ $category->name }}</option>
                                        @foreach($category->children as $subcategory)
                                            <option value="{{ $subcategory->id }}"  {{ old('parent_id') == $subcategory->id ? "selected" : '' }}>-{{ $subcategory->name }}</option>
                                        @endforeach
                                    @endforeach
                                </select> 
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">Brnad Image</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" class="form-select @error('status') is-invalid @enderror">
                                        <option disabled selected>Select Below</option>
                                        <option {{ old('status') == 'active' ? "selected" : '' }} value="active" selected>Active</option>
                                        <option {{ old('status') == 'inactive' ? "selected" : '' }} value="inactive">In-Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Submit Brand
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection