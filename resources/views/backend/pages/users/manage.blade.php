@extends('layouts.backend')
@section('title') Manage Users @endsection
@section('content')

<!-- Brand form start -->
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <div class="d-flex justify-content-between mb-4">
                <span>
                <h4 class="card-title">Users List</h4> 
                </span>
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Add</a> 
            </div> 

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach( $users as $key => $data )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->officeaddress }}</td>
                            <td>
                                @if($data->status == 'active')
                                <span class="text-success">Active</span>
                                @else
                                <span class="text-success">In-Active</span>
                                @endif
                            </td>
                            <td>
                                @foreach($data->userrole as $role) 
                                    {{ $role->name }}
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('user.show', $data->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('user.edit', $data->id) }}" class="mx-2">
                                    <i class="fas fa-pen text-success"></i>
                                </a>
                                <a href="javascript:void(0)" class="text-danger cat_delete" data-id="{{$data->id}}">
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
                title: "Are you sure!",
                icon: "error",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes!",
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
                    url:  "{{url('/auth/users/user')}}/" + id,
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
                        $('#datatable' + id).remove();
                        }         
                });
                
            }
        });
    });
</script>
@endsection