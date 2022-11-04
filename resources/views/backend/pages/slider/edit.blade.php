@extends('layouts.backend')
@section('title') Edit Slider @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Sliders Edit</h4>
                    <a href="{{ route('slider.index') }}" class="btn btn-primary btn-sm">Back</a> 
                </div>

                <form class="custom-validation" action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Slider Title</label>
                                <div>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $slider->title }}" placeholder="Enter Slider title">
                                    <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Top SubTitle</label>
                                <div>
                                    <input type="text" class="form-control @error('top_subtitle') is-invalid @enderror" name="top_subtitle" value="{{ $slider->top_subtitle }}" placeholder="Enter Top Subtitle">
                                    <span class="text-danger">@error('top_subtitle'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Bottom Title</label>
                                <div>
                                    <input type="text" class="form-control @error('bottom_subtitle') is-invalid @enderror" name="bottom_subtitle" value="{{ $slider->bottom_subtitle }}" placeholder="Enter Slider Bottom Subtitle">
                                    <span class="text-danger">@error('bottom_subtitle'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Button Text</label>
                                <div>
                                    <input type="text" class="form-control @error('button_text') is-invalid @enderror" name="button_text" value="{{ $slider->button_text }}" placeholder="Enter Slider Button text">
                                    <span class="text-danger">@error('button_text'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Button Link</label>
                                <div>
                                    <input type="text" class="form-control @error('button_link') is-invalid @enderror" name="button_link" value="{{ $slider->button_link }}" placeholder="Enter Slider Button Link">
                                    <span class="text-danger">@error('button_link'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Slider Image</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1">
                        <div class="mb-3">
                                <label class="form-label">Preview</label>
                                <div>
                                <img src="{{ asset('backend/assets/images/slider/'. $slider->image) }}" alt="image" width="50" class="img-fluid mt-2">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active" @if($slider->status == 'active') selected @endif>Active</option>
                                        <option value="inactive" @if($slider->status == 'inactive') selected @endif>In-Active</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Update Slider
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection