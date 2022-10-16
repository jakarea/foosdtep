@extends('layouts.backend')

@section('content') 
<!-- user form start -->
<div class="row justify-content-center">
    <div class="col-lg-12">
    <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{ __('messages.edit_user') }}</h4>
                    <a href="{{ url('static/users') }}" class="btn btn-primary btn-sm">{{ __('messages.view_all') }}</a> 
                </div>

                <form class="custom-validation" action="#">  
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.name') }}</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.enter_name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.email') }}</label>
                                <div>
                                    <input type="email" class="form-control" placeholder="{{ __('messages.enter_email') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.password') }}</label>
                                <div>
                                    <input type="password" class="form-control" placeholder="{{ __('messages.enter_password') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.phone') }}</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.enter_phone') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.zip_code') }}</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="{{ __('messages.enter_zip_code') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.status') }}</label>
                                <div>
                                <select name="" id="" class="form-select" aria-label="Default select example">
                                        <option value="">{{ __('messages.active') }}</option>
                                        <option value="">{{ __('messages.inactive') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.discount') }}</label>
                                <div>
                                    <input type="Text" placeholder="{{ __('messages.enter_discount') }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.image') }}</label>
                                <div>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3"> 
                                <label class="form-label">{{ __('messages.preview') }}</label>
                                <div>
                                    <img src="{{ asset('backend/assets/images/users/avatar-5.jpg') }}" alt="User" style="width: 40px; border-radius: 4px;" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.address_home') }}</label>
                                <div>
                                    <input type="Text" placeholder="{{ __('messages.enter_address') }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.address_office') }}</label>
                                <div>
                                    <input type="Text" placeholder="{{ __('messages.enter_address') }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.bio') }}</label>
                                <div> 
                                    <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="{{ __('messages.enter_bio') }}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                            {{ __('messages.update') }}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- user form end -->
@endsection