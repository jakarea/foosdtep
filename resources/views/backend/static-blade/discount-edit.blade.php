@extends('layouts.backend')

@section('content') 
<!-- user form start -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{ __('messages.edit_discount') }}</h4>
                    <a href="{{ url('static/discount') }}" class="btn btn-primary btn-sm">{{ __('messages.view_all') }}</a> 
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
                        
                        

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{ __('messages.discount_users') }}</label>
                                <div> 

                            <select class="select2 form-control select2-multiple" multiple="multiple"
                                data-placeholder="Choose ..."> 
                                    <option value="AK">Admin</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="HI">Akram</option>
                                    <option value="HI">Nayan</option>
                                    <option value="HI">Jakarea</option>
                            </select>

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
<!-- user form end -->
@endsection