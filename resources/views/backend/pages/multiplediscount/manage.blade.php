@extends('layouts.backend')
@section('title') Manage Multiple Discount @endsection
@section('content')

    <!-- Brand form start -->
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <span>
                        <h4 class="card-title">{{ __('b.multi_discount_list') }}</h4> 
                        </span>
                        <a href="{{ route('multidiscount.create') }}" class="btn btn-primary btn-sm">{{ __('b.add_multi_discount') }}</a> 
                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>{{__('b.no') }}</th>
                                <th>{{__('b.discount') }}</th>
                                <th>{{__('b.user') }}</th>
                                <th>{{__('b.product') }}</th>
                                <th>{{__('b.status') }}</th>
                                <th>{{__('b.action') }}</th> 
                            </tr>
                        </thead>

                        <tbody>
                            @foreach( $multiplediscount as $key => $data )
                            <tr id="table_rrow{{$data->id}}">
                                <td valign="middle">{{ $key+1 }}</td>
                                <td valign="middle">{{ $data->name }}</td>
                                <td valign="middle">
                                @php 
                                    $users = explode(',', $data->user_id);
                                @endphp
                                @foreach($users as $user)
                                <span class="bg-success badge">{{ $data->users($user) }}</span>                                
                                @endforeach
                                </td>
                                <td valign="middle">
                                @foreach($data->typeItems as $product)
                                <span class="bg-success badge">{{ $product->product->name }}</span>                                
                                @endforeach
                                
                                </td>
                                <td valign="middle">
                                    @if( $data->status == 'active' )
                                    <span class="text-success">{{__('b.active') }}</span>
                                    @else
                                    <span class="text-danger">{{__('b.inactive') }}</span>
                                    @endif
                                </td>
                                <td valign="middle">
                                    <a href="{{ route('multidiscount.edit', $data->id) }}" class="me-2"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="javascript:void(0)" class="text-danger cat_delete" data-id="{{$data->id}}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>   
                            @endforeach                                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- categories form end -->

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
                    url:  "{{url('/auth/multidiscounts/multidiscount')}}/" + id,
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