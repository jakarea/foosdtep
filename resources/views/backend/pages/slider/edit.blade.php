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
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">Slider Title</label>
                                <div>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Slider title" value="{{ $slider->title }}">
                                    <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Parent Slider</label>
                                
                            </div>
                        </div>
                        <div class="col-lg-7    ">
                            <div class="mb-3">
                                <label class="form-label">Slider Image</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <img src="{{ asset('backend/assets/images/slider/'. $slider->image) }}" alt="image" width="30" class="img-fluid mt-2">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('parent_cat') is-invalid @enderror" aria-label="Default select example">
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