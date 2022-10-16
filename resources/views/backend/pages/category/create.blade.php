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

                <form class="custom-validation" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter category name">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Parent Category</label>
                                <div>
                                    <select name="parent_cat" id="" class="form-select @error('parent_cat') is-invalid @enderror" aria-label="Default select example">
                                        <option value="">Select Below</option>
                                        <option value="">Parent One</option>
                                        <option value="">Parent Two</option>
                                        <option value="">Parent Three</option>
                                        <option value="">Parent Four</option>
                                        <option value="">Parent Five</option>
                                        <option value="">Parent Six</option>
                                        <option value="">Parent Seven</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7    ">
                            <div class="mb-3">
                                <label class="form-label">Category Image</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('parent_cat') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">In-Active</option>
                                    </select> 
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