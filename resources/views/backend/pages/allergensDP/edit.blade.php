@extends('layouts.backend')
@section('title') Edit Allergens & Diet Preference @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{__('b.aldsgn_edit')}}</h4>
                    <a href="{{ route('AllergensDP.index') }}" class="btn btn-primary btn-sm">{{__('b.back')}}</a> 
                </div>

                <form class="custom-validation" action="{{ route('AllergensDP.update', $allergensDP->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.alldrs_name') }}</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{ __('b.name') }}" value="{{ $allergensDP->name }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{ __('b.status') }}</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>{{ __('b.select_below') }}</option>
                                        <option value="active" @if($allergensDP->status == 'active') selected @endif>{{ __('b.active') }}</option>
                                        <option value="inactive" @if($allergensDP->status == 'inactive') selected @endif>{{ __('b.inactive') }}</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                {{__('b.aldsgn_update')}}
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection