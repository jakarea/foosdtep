@extends('layouts.backend')
@section('title') Manage contact @endsection
@section('content')

    <!-- Blogs form start -->
    <div class="row justify-content-center">
    <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <span>
                        <h4 class="card-title">Contact List</h4> 
                        </span>
                        <!-- <a href="#" class="btn btn-primary btn-sm">Add</a>  -->
                    </div>

                   
                    <div class="row justify-content-center">
                    @foreach( $contacts as $key => $data )
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-widgets pb-0">
                                        <div class="text-center"> 
                                            <div class="row">
                                                <div class="col-md-6 text-start">
                                                    <p class="text-muted">
                                                   {{ __('b.name') }}: {{ $data->name }}
                                                    </p>
                                                </div> 
                                                <div class="col-md-6 text-end"> 
                                                    <p class="text-muted">
                                                    {{ __('b.email') }}: {{ $data->email }}
                                                    </p> 
                                                </div> 
                                                <div class="col-md-6 text-start">
                                                    <h6 class="mb-2">{{ __('b.subject') }}: {{ $data->subject }}</h6>
                                                </div> 
                                                <div class="col-md-6 text-end"> 
                                                    <a href="javascript:void(0)" class="text-danger cat_delete" data-id="{{$data->id}}"><i class="fas fa-trash"></i></a>
                                                </div> 
                                                <div class="col-md-12 text-start"> 
                                                    <p>{{ __('b.message') }}: {{ $data->message }}</p>
                                                </div>
                                            </div> 
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="text-center  mt-4">
                            @if ($contacts->hasPages())
                                <div class="pagination-wrapper text-center"> 
                                {{ $contacts->links("pagination::bootstrap-4") }}
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blogs form end -->

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
                    url:  "{{url('/auth/contacts/contact')}}/" + id,
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