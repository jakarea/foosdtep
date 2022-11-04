@extends('layouts.backend')
@section('title') Create Slider @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Slider Add</h4>
                    <a href="{{ route('slider.index') }}" class="btn btn-primary btn-sm">Back</a> 
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
                <form class="custom-validation" action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Slider Title</label>
                                <div>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')}}" placeholder="Enter Slider title">
                                    <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Top SubTitle</label>
                                <div>
                                    <input type="text" class="form-control @error('top_subtitle') is-invalid @enderror" name="top_subtitle" value="{{ old('top_subtitle')}}" placeholder="Enter Top Subtitle">
                                    <span class="text-danger">@error('top_subtitle'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Bottom Title</label>
                                <div>
                                    <input type="text" class="form-control @error('bottom_subtitle') is-invalid @enderror" name="bottom_subtitle" value="{{ old('bottom_subtitle')}}" placeholder="Enter Slider Bottom Subtitle">
                                    <span class="text-danger">@error('bottom_subtitle'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Button Text</label>
                                <div>
                                    <input type="text" class="form-control @error('button_text') is-invalid @enderror" name="button_text" value="{{ old('button_text')}}" placeholder="Enter Slider Button text">
                                    <span class="text-danger">@error('button_text'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Button Link</label>
                                <div>
                                    <input type="text" class="form-control @error('button_link') is-invalid @enderror" name="button_link" value="{{ old('button_link')}}" placeholder="Enter Slider Button Link">
                                    <span class="text-danger">@error('button_link'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-7    ">
                            <div class="mb-3">
                                <label class="form-label">Slider Image</label>
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
                                Submit Slider
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection