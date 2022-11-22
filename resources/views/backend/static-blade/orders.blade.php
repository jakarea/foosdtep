@extends('layouts.backend')

@section('content') 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <div class="d-flex justify-content-between mb-4">
                <span>
                <h4 class="card-title">{{ __('messages.orders_list') }}</h4> 
                </span>
                <a href="{{ url('static/discount/add') }}" class="btn btn-primary btn-sm">Add</a> 
            </div> 

            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Order ID</th>
                            <th>Order Item</th>
                            <th>Customer Name</th> 
                            <th>Amount</th> 
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td> 
                            <td>10%</td>
                            <td>10%</td>
                            <td>Active</td> 
                            <td>
                                <a href="{{ url('static/invoice') }}" class="me-2">
                                    <i class="fas fa-eye"></i>
                                </a> 
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td> 
                            <td>10%</td>
                            <td>10%</td>
                            <td>Active</td> 
                            <td>
                                <a href="{{ url('static/invoice') }}" class="me-2">
                                    <i class="fas fa-eye"></i>
                                </a> 
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td> 
                            <td>10%</td>
                            <td>10%</td>
                            <td>Active</td> 
                            <td>
                                <a href="{{ url('static/invoice') }}" class="me-2">
                                    <i class="fas fa-eye"></i>
                                </a> 
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td> 
                            <td>10%</td>
                            <td>10%</td>
                            <td>Active</td> 
                            <td>
                                <a href="{{ url('static/invoice') }}" class="me-2">
                                    <i class="fas fa-eye"></i>
                                </a> 
                                <a href="#">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td> 
                            <td>10%</td>
                            <td>10%</td>
                            <td>Active</td> 
                            <td>
                                <a href="{{ url('static/invoice') }}" class="me-2">
                                    <i class="fas fa-eye"></i>
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