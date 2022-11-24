@extends('layouts.backend')
@section('title') Edit Category @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{__('b.blog_edit')}}</h4>
                    <a href="{{ route('blog.index') }}" class="btn btn-primary btn-sm">{{__('b.back')}}</a> 
                </div>
                <form class="custom-validation" action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                            <label class="form-label">{{__('b.title')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Blog title" value="{{ $blog->title }}">
                                    <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                                </div> 
                            </div>
                        </div> 
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.blog_image')}}</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1">
                        <div class="mb-3">
                                <label class="form-label">{{__('b.preview')}}</label>
                                <div>
                                <img src="{{ asset('backend/assets/images/blog/'. $blog->image) }}" alt="image" width="50" class="img-fluid mt-2">
                                </div>
                            </div>
                        
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.status')}}</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active" @if($blog->status == 'active') selected @endif>{{__('b.active')}}</option>
                                        <option value="inactive" @if($blog->status == 'inactive') selected @endif>{{__('b.inactive')}}</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.body')}}</label>
                                <div>
                                <textarea name="body" placeholder="Enter Blog Description" class="form-control @error('body') is-invalid @enderror">{{ $blog->body }}</textarea>
                                     
                                     <span class="text-danger">@error('body'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                {{__('b.update_blog')}}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection