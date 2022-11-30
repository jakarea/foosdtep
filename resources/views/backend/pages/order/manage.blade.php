@extends('layouts.backend')
@section('title') Manage Order @endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <div class="d-flex justify-content-between mb-4">
                <span>
                <h4 class="card-title">{{ __('b.orders_list') }}</h4> 
                </span>
                 
            </div> 

            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>{{ __('b.no') }}</th>
                            <th>{{ __('b.order_id') }}</th>
                            <th>{{ __('b.order_item') }}</th>
                            <th>{{ __('b.customer_name') }}</th> 
                            <th>{{ __('b.status') }}</th> 
                            <th>{{ __('b.amount') }}</th> 
                            <th>{{ __('b.action') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach( $orders as $key => $data )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->order_number }}</td> 
                            <td>{{ $data->item_count }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ __('$'). $data->grand_total }}</td> 
                            <td>
                                <a href="{{ route('orders.show', $data->id) }}" class="me-2">
                                    <i class="fas fa-eye"></i>
                                </a> 
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
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
                            title: 'Succesvol verwijderen'
                        })
                        $('#table_rrow' + id).remove();
                        }         
                });
                
            }
        });
    });
</script>
@endsection