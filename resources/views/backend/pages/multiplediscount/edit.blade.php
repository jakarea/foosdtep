@extends('layouts.backend')
@section('title') Update Multi Discount @endsection
@section('css')
<link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h4 class="card-title">{{ __('b.update_user_pro_discount') }}</h4>
                    <a href="{{ route('multidiscount.index') }}" class="btn btn-primary btn-sm">{{__('b.back')}}</a> 
                </div>

                <form class="custom-validation" action="{{ route('multidiscount.update', $multidiscount->id) }}" method="post" enctype="multipart/form-data">
                    @csrf  
                    <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.discount')}} {{__('b.name')}}</label>
                                <div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{__('b.name')}}" value="{{ old('name', $multidiscount->name) }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                @php
                                    $userID = explode(',', $multidiscount->user_id);
                                @endphp
                                <label class="form-label">{{__('b.select_user')}}</label>
                                <div>
                                    <select name="users[]" class="select2 form-control select2-multiple" multiple="multiple"
                                            data-placeholder="Choose ...">
                                        @foreach( $users as $user )
                                        <option value="{{ $user->id }}" {{ in_array($user->id, $userID) ? "selected" : "" }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select> 
                                    <span class="text-danger">@error('users'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <table class="table table-responsive align-middle repeater_discount">
                                    <thead>
                                        <tr>
                                            <th class="col-md-4">{{__('b.product_name')}}</th>
                                            <th class="col-md-4">{{__('b.discount')}} %</th>
                                            <th class="col-md-4">{{__('b.customer')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody data-repeater-list="discount">
                                    @foreach( $multidiscount->typeItems as $item )
                                        <tr data-repeater-item="">
                                            <td>
                                                <select name="discount[][products]" class="select2 form-control select2-multiple"
                                                        data-placeholder="Choose ...">
                                                    @foreach( $products as $product )
                                                        <option value="{{ $product->id }}" {{ $product->id == $item->product_id ? "selected" : "" }}>{{ $product->name }}</option>
                                                    @endforeach
                                                </select> 
                                                <span class="text-danger">@error('products'){{ $message }} @enderror</span>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control @error('discount') is-invalid @enderror" name="discount[][value]" placeholder="{{__('b.discount')}}" value="{{ $item->value }}">
                                                <span class="text-danger">@error('discount'){{ $message }} @enderror</span>
                                            </td>
                                            
                                            <td>
                                            <input type="hidden" name="item_type_id" value="{{ $item->id }}">
                                            <span data-repeater-delete="" class="btn btn-danger btn-sm">{{__('b.delete')}}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td>
                                            <span data-repeater-create="" class="btn btn-info btn-sm">{{__('b.add')}}</span>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">{{__('b.status') }}</label>
                                <div>
                                    <select name="status" id="" class="form-select @error('status') is-invalid @enderror" aria-label="Default select example">
                                        <option selected disabled>{{__('b.select_below') }}</option>
                                        <option value="active" {{ $multidiscount->status == 'active' ? 'selected' : '' }}>{{__('b.active') }}</option>
                                        <option value="inactive" {{ $multidiscount->status == 'inactive' ? 'selected' : '' }}>{{__('b.inactive') }}</option>
                                    </select> 
                                    <span class="text-danger">@error('status'){{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-12">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                {{__('b.save_changes')}}
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