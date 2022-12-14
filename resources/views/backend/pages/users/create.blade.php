@extends('layouts.backend')
@section('title') Create User @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{ __('messages.add_user') }}</h4>
                    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">{{ __('messages.view_all') }}</a> 
                </div>

                <form class="custom-validation" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">  
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.name') }}</label>
                                <div>
                                    <input type="text" name="name" class="form-control" placeholder="{{ __('messages.enter_name') }}" value="{{ old('name') }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.email') }}</label>
                                <div>
                                    <input type="email" name="email" class="form-control" placeholder="{{ __('messages.enter_email') }}" value="{{ old('email') }}">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.password') }}</label>
                                <div>
                                    <input type="password" name="password" class="form-control" placeholder="{{ __('messages.enter_password') }}" value="{{ old('password') }}">
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.phone') }}</label>
                                <div>
                                    <input type="text" name="phone" class="form-control" placeholder="{{ __('messages.enter_phone') }}" value="{{ old('phone') }}">
                                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.zip_code') }}</label>
                                <div>
                                    <input type="text" name="zipcode" class="form-control" placeholder="{{ __('messages.enter_zip_code') }}" value="{{ old('zipcode') }}">
                                    <span class="text-danger">@error('zipcode'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.status') }}</label>
                                <div>
                                <select name="status" id="" class="form-select" aria-label="Default select example">
                                    <option value="active">{{ __('messages.active') }}</option>
                                    <option value="inactive">{{ __('messages.inactive') }}</option>
                                </select>
                                <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3"> 
                                <label class="form-label">{{ __('b.role') }}</label>
                                <div>
                                    <select name="auth_role" class="form-select" id="auth_role">
                                        <option value="3">{{__('b.customer') }}</option>
                                        <option value="1">{{__('b.admin') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.image') }}</label>
                                <div>
                                    <input type="file" name="image" class="form-control" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                    <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3"> 
                                <label class="form-label">{{ __('b.preview') }}</label>
                                <div>
                                    <img src="{{ asset('backend/assets/images/users/default.jpeg')}}" alt="{{__('b.add_photo') }}" style="width: 40px; border-radius: 4px;" class="img-fluid" id="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.address_home') }}</label>
                                <div>
                                    <input type="Text" name="homeaddress" placeholder="{{ __('messages.enter_address') }}" class="form-control @error('homeaddress') is-invalid @enderror" value="{{ old('homeaddress') }}">
                                    <span class="text-danger">@error('homeaddress'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.address_office') }}</label>
                                <div>
                                    <input type="Text" name="addressoffice" placeholder="{{ __('messages.enter_address') }}" class="form-control" value="{{ old('addressoffice') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.bio') }}</label>
                                <div> 
                                    <textarea id="textarea" name="bio" class="form-control" maxlength="225" rows="3" placeholder="{{ __('messages.enter_bio') }}">{{ old('bio') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                            {{ __('messages.submit') }}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection