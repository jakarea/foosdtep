@extends('layouts.backend')
@section('title') Edit Brand @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Brand Edit</h4>
                    <a href="{{ route('brand.index') }}" class="btn btn-primary btn-sm">Back</a> 
                </div>

                <form class="custom-validation" action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">Brnad Name</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter brand name" value="{{ $brand->name }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Parent Brand</label>
                                <div>
                                <select name="parent_id" id="" class="form-select @error('parent_id') is-invalid @enderror" aria-label="Default select example">
                                    <option selected disabled>Select Below</option>
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
                        <div class="col-lg-7    ">
                            <div class="mb-3">
                                <label class="form-label">Brand Image</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <img src="{{ asset('backend/assets/images/brands/'. $brand->image) }}" alt="image" width="30" class="img-fluid mt-2">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active" @if($brand->status == 'active') selected @endif>Active</option>
                                        <option value="inactive" @if($brand->status == 'inactive') selected @endif>In-Active</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Update Brand
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection