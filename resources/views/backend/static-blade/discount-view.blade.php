@extends('layouts.backend')

@section('content') 
<!-- user form start -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{ __('messages.discount_single_view') }}</h4>
                    <a href="{{ url('static/discount') }}" class="btn btn-primary btn-sm">{{ __('messages.view_all') }}</a> 
                </div>
 
            </div>
        </div>
    </div>
</div>
<!-- user form end -->
@endsection