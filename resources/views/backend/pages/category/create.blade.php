@extends('layouts.backend')
@section('title') Create Category @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Categories Add</h4>
                    <a href="{{ route('category.index') }}" class="btn btn-primary btn-sm">Back</a> 
                </div>

                <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
                <form class="custom-validation" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')}}" placeholder="Enter category name">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Parent Category</label>
                                <select name="parent_cat" id="" class="form-select @error('parent_cat') is-invalid @enderror" aria-label="Default select example">
                                    <option selected disabled>Select Below</option>
                                    @foreach($categoies as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @foreach($category->children as $subcategory)
                                            <option value="{{ $subcategory->id }}">-{{ $subcategory->name }}</option>
                                        @endforeach
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                        <div class="col-lg-7    ">
                            <div class="mb-3">
                                <label class="form-label">Category Image</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" class="form-select @error('status') is-invalid @enderror">
                                        <option selected disabled>Select Below</option>
                                        <option value="active" @selected(old('status') == 'active')>Active</option>
                                        <option value="inactive" @selected(old('status') == 'inactive')>In-Active</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Submit Category
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection