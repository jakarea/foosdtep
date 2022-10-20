@extends('layouts.backend')
@section('title') Edit Faith @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Faith Edit</h4>
                    <a href="{{ route('faith.index') }}" class="btn btn-primary btn-sm">Back</a> 
                </div>

                <form class="custom-validation" action="{{ route('faith.update', $faith->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Faith Name</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter faith name" value="{{ $faith->name }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active" @if($faith->status == 'active') selected @endif>Active</option>
                                        <option value="inactive" @if($faith->status == 'inactive') selected @endif>In-Active</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Update faith
                            </button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection