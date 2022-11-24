@extends('layouts.backend')
@section('title') Manage Brnad @endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <div class="d-flex justify-content-between mb-4">
                <span>
                <h4 class="card-title">{{ __('b.product_list')}}</h4> 
                </span>
                <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm">{{__('b.add_product') }}</a> 
            </div> 

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>{{ __('b.no')}}</th>
                            <th>{{ __('b.product_name')}}</th>
                            <th>{{ __('b.category')}}</th>
                            <th>{{ __('b.price')}}</th>
                            <th>{{ __('b.status')}}</th>
                            <th>{{ __('b.brand')}}</th>
                            <th>{{ __('b.action')}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach( $products as $key => $product )
                        <tr id="#table_rrow{{ $product->id }}">
                            <td>{{ $key+1 }}</td>
                            <td>{{ __($product->name) }}</td>
                            <td>
                                @php 
                                    $categories = explode(',', $product->cat_id);
                                @endphp
                                @foreach($categories as $catgoryID)
                                <span class="bg-success badge">{{ $product->categoryName($catgoryID) }}</span>
                                
                                @endforeach
                            </td>
                            <td>€{{ __($product->price) }}</td>
                            <td>
                                @if( $product->status == 'active' )
                                <span class="bg-success badge">{{ __('b.active')}} </span>
                                @else
                                <span class="bg-danger badge">{{ __('b.inactive')}} </span>
                                @endif
                            </td>

                            <td>
                                @php 
                                    $brands = explode(',', $product->brand_id);
                                @endphp

                                @foreach($brands as $brandID)
                                <span class="bg-success badge">{{ $product->brandName($brandID) }}</span>
                                @endforeach
                            </td>
                            <td> 
                                <a href="{{ route('product.edit', $product->id) }}" class="mx-2">
                                    <i class="fas fa-pen text-success"></i>
                                </a>
                                <a href="javascript:void(0)" class="text-danger cat_delete" data-id="{{$product->id}}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
@endsection

@section('script')
<!-- Required datatable js -->
<script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

<script>
    $(document).on('click', '.cat_delete', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        Swal.fire({
                title: "Weet je het zeker!",
                icon: "error",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ja!",
                showCancelButton: true,
            }).then((result) => {
            if (result.isConfirmed) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    }
                });
                $.ajax({
                    type: "DELETE",
                    url:  "{{url('/auth/products/product')}}/" + id,
                    data: {_token: CSRF_TOKEN, id: id},
                    dataType: 'JSON',
                    success: function (results) {
                        //
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: 'Delete successfully'
                        })
                        $('#table_rrow' + id).remove();
                        }         
                });
                
            }
        });
    });
</script>
@endsection