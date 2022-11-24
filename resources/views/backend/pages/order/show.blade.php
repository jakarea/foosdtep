@extends('layouts.backend')
@section('title') Order Invoice @endsection

@section('content') 
<!-- invoice form start -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body" id="printableArea">
                <div class="invoice-title align-items-center">
                    <h4 class="float-end mb-0 font-size-16">Order # {{ $order->order_number }}</h4>
                    <div>
                        <img src="{{asset('backend/assets/img/logo/logo.png')}}" alt="logo" height="40" />
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <address>
                            <strong>{{ __('messages.billed_to') }}</strong><br>
                            {{ $order->user->name }}<br>
                            @if( $order->address_type == 1 )
                            {{ $order->user->officeaddress }}<br>
                            {{ $order->post_code }}<br>
                            @else
                            {{ $order->user->homeaddress }}<br>
                            {{ $order->post_code }}<br>
                            @endif
                        </address>
                    </div>
                    <div class="col-6 text-end">
                        <address>
                            <strong>{{ __('Billing From') }}</strong><br>
                            Kenny Rigdon<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mt-3">
                       
                    </div>
                    <div class="col-6 mt-3 text-end">
                        <address>
                            <strong>{{ __('messages.order_date') }}</strong><br>
                            {{ date('d M, Y', strtotime($order->created_at)); }}<br><br>
                        </address>
                    </div>
                </div>
                <div class="py-2 mt-3">
                    <h3 class="font-size-15 fw-bold">{{ __('messages.order_summary') }}</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-nowrap">
                        <thead>
                            <tr>
                                <th style="width: 70px;">No.</th>
                                <th>Item</th>
                                <th>Qty</th>
                                <th class="text-end">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $order->items as $index => $item )
                            <tr>
                                <td> {{ $index+1 }} </td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td class="text-end">
                                    {{ __('€'). $item->product->discount($item->product_id) * $item->quantity }}
                                </td>
                            </tr>
                            @endforeach
                            
                            <tr>
                                <td colspan="3" class="text-end">Sub Total</td>
                                <td class="text-end">{{ __('€'). $order->grand_total }}</td>
                            </tr>

                            <tr>
                                <td colspan="3" class="border-0 text-end">
                                    <strong>Total</strong>
                                </td>
                                <td class="border-0 text-end">
                                    <h4 class="m-0">{{ __('€'). $order->grand_total }}</h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-print-none">
                    <div class="float-end">
                            <div class="btn-group" role="group">
                                <button id="btnStatusUpdate" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Status <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnStatusUpdate">
                                    <a class="dropdown-item" href="#">Cancel</a>
                                    <a class="dropdown-item" href="#">Pending</a>
                                    <a class="dropdown-item" href="#">Approved</a>
                                    <a class="dropdown-item" href="#">Completed</a>
                                </div>
                            </div>
                            
                            <a href="javascript:void(0)" onclick="printDiv('printableArea')" class="btn btn-success waves-effect waves-light" type="submit"><i
                                class="fa fa-print"></i></a>
   
                        <a href="#" class="btn btn-primary w-md waves-effect waves-light">{{ __('messages.send') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- invoice form end -->
@endsection

@section('script')

<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

@endsection