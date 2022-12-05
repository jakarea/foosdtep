@extends('layouts.backend')
@section('title'){{ __('b.dashboard') }} @endsection
@section('content')
<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-tag-plus-outline"></i>
                        </span>
                       
                    </div>

                    
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">{{ __('b.new_orders') }} </div>
                    </div>
                </div>
                <h4 class="mt-4">{{ App\Models\Backend\Order::NewOrders() }}</h4>
                <div class="row">
                    <div class="col-7">
                        <p class="mb-0"><span class="text-success me-2"> {{ App\Models\Backend\Order::NewOrders() / 100 * count($orders) }}% <i
                                    class="mdi mdi-arrow-up"></i> </span></p>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ App\Models\Backend\Order::NewOrders() / 100 * count($orders) }}%"
                                aria-valuenow="{{ App\Models\Backend\Order::NewOrders() / 100 * count($orders) }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-account-multiple-outline"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">{{ __('b.new_users') }} </div>
                    </div>
                </div>
                <h4 class="mt-4">{{ App\Models\User::UserCount() }}</h4>
                <div class="row">
                    <div class="col-7">
                        <p class="mb-0"><span class="text-success me-2"> {{ App\Models\User::UserCount() / 100 * App\Models\User::UserCount() }}% <i
                                    class="mdi mdi-arrow-up"></i> </span></p>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ App\Models\User::UserCount() / 100 * App\Models\User::UserCount() }}%"
                                aria-valuenow="{{ App\Models\User::UserCount() / 100 * App\Models\User::UserCount() }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-9">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">{{ __('b.salse_report') }} </h4>

                <div id="area-chart" class="apex-charts"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4"> {{ __('b.recent_orders') }} </h4>

                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('b.no') }} </th>
                                <th scope="col">{{ __('b.customer_name') }} </th> 
                                <th scope="col">{{ __('b.order_id') }} </th> 
                                <th scope="col">{{ __('b.amount') }} </th>
                               
                                <th scope="col" colspan="2">{{ __('b.action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                        @if( count($orders) > 0 )
                        @foreach($orders as $key => $order)    
                            <tr>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $order->order_number }}</td> 
                                <td>{{ __('€'). $order->grand_total }}</td> 
                                <td>
                                    @if( $order->status == 'pending' )
                                    <span class="badge text-bg-warning font-size-12">{{ __('b.pending') }} </span>
                                    @elseif( $order->status == 'processing' )
                                    <span class="badge text-bg-primary font-size-12">{{ __('b.processing') }} </span>
                                    @elseif( $order->status == 'completed' )
                                    <span class="badge text-bg-success font-size-12">{{ __('b.completed') }} </span>
                                    @elseif( $order->status == 'decline' )
                                    <span class="badge text-bg-danger font-size-12">{{ __('b.declined') }} </span>
                                    @endif
                                </td>
                                <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-sm">{{ __('b.details') }} </a></td>
                            </tr>
                        @endforeach  
                        @else
                        <tr>
                        {{ __('b.no_order_found') }}  
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- end row -->
@endsection

@section('script')
<!-- apexcharts -->
<script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>


<script>
        (function() { 

var options = {
series: [{
    name: '2022',
    data: [{{ $current }}]
}, {
    name: '2023',
    data: [{{ $previous }}]
}],
chart: {
    height: 260,
    type: 'area',
    toolbar: {
    show: false
    }
},
colors: ['#556ee6', '#f1b44c'],
dataLabels: {
    enabled: false
},
stroke: {
    curve: 'smooth',
    width: 2
},
fill: {
    type: 'gradient',
    gradient: {
    shadeIntensity: 1,
    inverseColors: false,
    opacityFrom: 0.45,
    opacityTo: 0.05,
    stops: [20, 100, 100, 100]
    }
},
xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
},
markers: {
    size: 3,
    strokeWidth: 3,
    hover: {
    size: 4,
    sizeOffset: 2
    }
},
legend: {
    position: 'top',
    horizontalAlign: 'right'
}
};
var chart = new ApexCharts(document.querySelector("#area-chart"), options);
chart.render();
})();
</script>
@endsection