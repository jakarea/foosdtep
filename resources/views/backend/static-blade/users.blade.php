@extends('layouts.backend')

@section('content') 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <div class="d-flex justify-content-between mb-4">
                <span>
                <h4 class="card-title">Users List</h4> 
                </span>
                <a href="{{ url('static/users/add') }}" class="btn btn-primary btn-sm">Add</a> 
            </div> 

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td>
                            <td>admin@foodstep.com</td>
                            <td>01000 000 00</td>
                            <td>Active</td>
                            <td>123, NY-USA</td>
                            <td>
                                <a href="{{ url('static/users/profile') }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('static/users/edit') }}" class="mx-2">
                                    <i class="fas fa-pen text-success"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td>
                            <td>admin@foodstep.com</td>
                            <td>01000 000 00</td>
                            <td>Active</td>
                            <td>123, NY-USA</td>
                            <td>
                            <a href="{{ url('static/users/profile') }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('static/users/edit') }}" class="mx-2">
                                    <i class="fas fa-pen text-success"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td>
                            <td>admin@foodstep.com</td>
                            <td>01000 000 00</td>
                            <td>Active</td>
                            <td>123, NY-USA</td>
                            <td>
                            <a href="{{ url('static/users/profile') }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('static/users/edit') }}" class="mx-2">
                                    <i class="fas fa-pen text-success"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td>
                            <td>admin@foodstep.com</td>
                            <td>01000 000 00</td>
                            <td>Active</td>
                            <td>123, NY-USA</td>
                            <td>
                            <a href="{{ url('static/users/profile') }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('static/users/edit') }}" class="mx-2">
                                    <i class="fas fa-pen text-success"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td>
                            <td>admin@foodstep.com</td>
                            <td>01000 000 00</td>
                            <td>Active</td>
                            <td>123, NY-USA</td>
                            <td>
                            <a href="{{ url('static/users/profile') }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('static/users/edit') }}" class="mx-2">
                                    <i class="fas fa-pen text-success"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                         
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection