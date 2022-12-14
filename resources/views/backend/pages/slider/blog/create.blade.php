@extends('layouts.backend')
@section('title') Create Blog @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Blog Add</h4>
                    <a href="{{ route('blog.index') }}" class="btn btn-primary btn-sm">Back</a> 
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
                <form class="custom-validation" action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <div>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')}}" placeholder="Enter Blog Title">
                                    <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 ">
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-lg-6">
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

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Body</label>
                                <div>
                                    <textarea name="body" placeholder="Enter Blog Description" class="form-control @error('body') is-invalid @enderror">{{ old('body')}}</textarea>
                                     
                                    <span class="text-danger">@error('body'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Submit Blog
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection