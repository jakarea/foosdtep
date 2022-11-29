@extends('layouts.backend')
@section('title') Assign Multi Discount @endsection
@section('css')
<link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">Assign User Discount</h4>
                    <a href="{{ route('multidiscount.index') }}" class="btn btn-primary btn-sm">Back</a> 
                </div>

                <form class="custom-validation" action="{{ route('multidiscount.store') }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Discount Name</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Select Users</label>
                                <div>
                                    <select name="users[]" class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ...">
                                        @foreach( $users as $user )
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table class="table table-responsive align-middle repeater_discount">
                                    <thead>
                                        <tr>
                                            <th class="col-md-4">Product Name</th>
                                            <th class="col-md-4">Discount %</th>
                                            <th class="col-md-4">Customers</th>
                                        </tr>
                                    </thead>
                                    <tbody data-repeater-list="discount">
                                        <tr data-repeater-item="">
                                            <td>
                                                <select name="discount[][products]" class="select2 form-control select2-multiple"
                                                        data-placeholder="Choose ...">
                                                    @foreach( $products as $product )
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select> 
                                                <span class="text-danger">@error('products'){{ $message }} @enderror</span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control @error('value') is-invalid @enderror" name="discount[][value]" placeholder="Enter Discount">
                                                <span class="text-danger">@error('value'){{ $message }} @enderror</span>
                                            </td>
                                            <td>
                                                <div class="form-check mb-2 d-inline-block">
                                                    <input class="form-check-input" type="radio" name="discount[][type]"  value="percentage" checked>
                                                    <label class="form-check-label" for="discount_type">Percentage</label>&nbsp;
                                                </div>
                                            </td>
                                            <td>
                                            <span data-repeater-delete="" class="btn btn-danger btn-sm">Delete</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td>
                                            <span data-repeater-create="" class="btn btn-info btn-sm">Add</span>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>Select Below</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">In-Active</option>
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

@section('script')
<script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.js"></script>
<script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>

<script>
    var form = $('.custom-validation');
    form.find('select').select2();

    $('.repeater_discount').repeater({
        isFirstItemUndeletable: true,

        show: function () {
            $(this).slideDown();
            form.find('select').next('.select2-container').remove();
            form.find('select').select2();
            $('.select2-container').css('width','100%');
        }
    });
</script>
@endsection