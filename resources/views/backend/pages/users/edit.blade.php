@extends('layouts.backend')
@section('title') Update User @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{ __('messages.add_user') }}</h4>
                    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">{{ __('messages.view_all') }}</a> 
                </div>

                <form class="custom-validation" action="{{ route('user.update', $user->id ) }}" method="POST" enctype="multipart/form-data">  
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.name') }}</label>
                                <div>
                                    <input type="text" name="name" class="form-control" placeholder="{{ __('messages.enter_name') }}" value="{{ old('name', $user->name) }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.email') }}</label>
                                <div>
                                    <input type="email" name="email" class="form-control" placeholder="{{ __('messages.enter_email') }}" value="{{ old('email', $user->email) }}">
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
                                    <input type="text" name="phone" class="form-control" placeholder="{{ __('messages.enter_phone') }}" value="{{ old('phone', $user->phone) }}">
                                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.zip_code') }}</label>
                                <div>
                                    <input type="text" name="zipcode" class="form-control" placeholder="{{ __('messages.enter_zip_code') }}" value="{{ old('zipcode', $user->zipcode) }}">
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
                                <label class="form-label">{{ __('User Role') }}</label>
                                <div>
                                    <select name="auth_role" class="form-select" id="auth_role">
                                        <option value="2" {{ $user->myRole->role_id == 2 ? 'selected' : ''}}>Customer</option>
                                        <option value="1" {{ $user->myRole->role_id == 1 ? 'selected' : ''}}>Admin</option>
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
                                <label class="form-label">{{ __('messages.preview') }}</label>
                                <div>
                                    @if( $user->avater != null )
                                        <img src="{{ asset('frontend/assets/img/user/'. $user->avater) }}" alt="" class="avatar-md"  style="width: 40px; border-radius: 4px;" class="img-fluid" id="image">
                                    @else
                                
                                        <img src="{{asset('backend/assets/img/user/default.jpg')}}" alt="" class="avatar-md" style="width: 68px; border-radius: 4px;" class="img-fluid" id="image">
                                    @endif  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.address_home') }}</label>
                                <div>
                                    <input type="Text" name="addresshome" placeholder="{{ __('messages.enter_address') }}" class="form-control" value="{{ old('addresshome', $user->homeaddress) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.address_office') }}</label>
                                <div>
                                    <input type="Text" name="addressoffice" placeholder="{{ __('messages.enter_address') }}" class="form-control" value="{{ old('addressoffice', $user->officeaddress) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.bio') }}</label>
                                <div> 
                                    <textarea id="textarea" name="bio" class="form-control" maxlength="225" rows="3" placeholder="{{ __('messages.enter_bio') }}">{{ old('bio', $user->bio) }}</textarea>
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