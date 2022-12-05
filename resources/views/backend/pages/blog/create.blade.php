@extends('layouts.backend')
@section('title') Blog aanmaken @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{__('b.blog_add')}}</h4>
                    <a href="{{ route('blog.index') }}" class="btn btn-primary btn-sm">{{__('b.back')}}</a> 
                </div> 
                <form class="custom-validation" action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.title')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')}}" placeholder="{{__('Vul de titel van de blog in') }}">
                                    <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.image')}}</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.status')}}</label>
                                <div>
                                    <select name="status" class="form-select @error('status') is-invalid @enderror">
                                        <option selected disabled>{{__('b.select_below')}}</option>
                                        <option value="active" @selected(old('status') == 'active')>{{__('b.active')}}</option>
                                        <option value="inactive" @selected(old('status') == 'inactive')>{{__('b.inactive')}}</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.body')}}</label>
                                <div>
                                    <textarea name="body" placeholder="{{__('Vul de inhoud van de blog in.') }}" class="form-control @error('body') is-invalid @enderror">{{ old('body')}}</textarea>
                                     
                                    <span class="text-danger">@error('body'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1"> 
                            {{__('b.submit_blog')}}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection