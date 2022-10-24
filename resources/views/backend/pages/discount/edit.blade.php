@extends('layouts.backend')
@section('title') Edit Discount @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Discount Edit</h4>
                    <a href="{{ route('discount.index') }}" class="btn btn-primary btn-sm">Back</a> 
                </div>

                <form class="custom-validation" action="{{ route('discount.update', $discount->id) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Discount(%)</label>
                                <div>
                                    <input type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" placeholder="Enter Discount" value="{{ $discount->value }}">
                                    <span class="text-danger">@error('discount'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Discount Type</label><br>
                                <div class="form-check mb-2 d-inline-block">
                                    <input class="form-check-input" type="radio" name="discount_type" id="discount_type" value="percentage" >
                                    <label class="form-check-label" for="discount_type">Percentage</label>&nbsp;
                                </div>
                                <div class="form-check mb-2 d-inline-block">
                                    <input class="form-check-input" type="radio" name="discount_type" id="flat_discount" value="numeric">
                                    <label class="form-check-label" for="flat_discount">Flat</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Select Users</label>
                                <div>
                                    <select name="users" id="" class="form-control select2 @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        @foreach( $users as $user )
                                            <option value="{{ $user->id }}" @if( $discount->user_id == $user->id ) selected @endif>{{ $user->name }}</option>
                                        @endforeach
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active" @if($discount->status == 'active') selected @endif>Active</option>
                                        <option value="inactive" @if($discount->status == 'inactive') selected @endif>In-Active</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-12">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Submit Discount
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection