@extends('layouts.backend')
@section('title') Create Slider @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{__('b.add_slider')}}</h4>
                    <a href="{{ route('slider.index') }}" class="btn btn-primary btn-sm">{{__('b.back')}}</a> 
                </div> 
                <form class="custom-validation" action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.title')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')}}" placeholder="Enter Slider title">
                                    <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.title_bg')}}</label>
                                <div class="d-flex mt-2">
                                <div class="me-3">
                                    <input type="radio" value="hero_ol_white" name="text_bg" id="white_bg" checked class="@error('text_bg') is-invalid @enderror"><label for="white_bg">&nbsp; {{__('b.light')}}</label>
                                    <span class="text-danger">@error('text_bg'){{ $message }} @enderror</span>
                                </div>
                                <div>
                                    <input type="radio" value="hero_ol_dark" name="text_bg" id="dark_bg" class="@error('text_bg') is-invalid @enderror"><label for="dark_bg">&nbsp; {{__('b.dark')}}</label>
                                    <span class="text-danger">@error('text_bg'){{ $message }} @enderror</span>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.top_subtitle')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('top_subtitle') is-invalid @enderror" name="top_subtitle" value="{{ old('top_subtitle')}}" placeholder="Enter Top Subtitle">
                                    <span class="text-danger">@error('top_subtitle'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.bottom_subtitle')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('bottom_subtitle') is-invalid @enderror" name="bottom_subtitle" value="{{ old('bottom_subtitle')}}" placeholder="Enter Slider Bottom Subtitle">
                                    <span class="text-danger">@error('bottom_subtitle'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.btn_txt')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('button_text') is-invalid @enderror" name="button_text" value="{{ old('button_text')}}" placeholder="Enter Slider Button text">
                                    <span class="text-danger">@error('button_text'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.btn_link')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('button_link') is-invalid @enderror" name="button_link" value="{{ old('button_link')}}" placeholder="Enter Slider Button Link">
                                    <span class="text-danger">@error('button_link'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-7">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.slider_image')}}</label>
                                <div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-5">
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
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                {{ __('b.submit_slider') }}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection