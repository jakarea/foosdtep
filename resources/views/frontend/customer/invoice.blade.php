@extends('layouts.frontend')
@section('title') {{ __('Invoice') }} @endsection
@section('content')
<div class="container">
    <!-- invoice form start -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body" id="printableArea2">
                <div class="invoice-title align-items-center">
                    <h4 class="float-end mb-0 font-size-16">Order # {{ $data->order_number }}</h4>
                    <div>
                        <img src="{{asset('backend/assets/img/logo/logo.png')}}" alt="logo" height="40" />
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <address>
                            <!-- <strong>{{ __('Billing To') }}</strong><br> -->
                            {{ $data->user->name }}<br>
                            {{ $data->user->email  }}<br>
                            {{ $data->user->phone  }}<br>
                            {{ $data->user->kvk }}<br>
                            {{ $data->user->vat }}<br>
                            @if( $data->address_type == 1 )
                            {{ $data->user->officeaddress }}<br>
                            {{ $data->post_code }}<br>
                            @else
                            {{ $data->user->homeaddress }}<br> 
                            {{ $data->post_code }}<br>
                            @endif
                        </address>
                    </div>
                    <div class="col-6 text-end">
                        <address>
                            <!-- <strong>{{ __('Billing From') }}</strong><br> -->
                            Kenny Rigdon<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Springfield, ST 54321
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-3 text-end">
                        <address>
                            <strong>{{ __('messages.order_date') }}</strong><br>
                            {{ date('d M, Y', strtotime($data->created_at)); }}<br><br>
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
                                <th style="width: 70px;">Nr.</th>
                                <th>Product</th>
                                <th>Aantal</th>
                                <th class="text-end">Prijs</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach( $data->items as $index => $item )
                            <tr>
                                <td> {{ $index+1 }} </td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td class="text-end">
                                    {{ __('£'). $item->product->discount($item->product_id) * $item->quantity }}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-print-none">
                    <div class="float-end">
                        <a href="{{ route('customer.reorder', $data->id) }}"
                            class="btn btn-secondary waves-effect waves-light p-2">Re-Order </a>
                        <a href="javascript:void(0)" onclick="printDiv('printableArea2')"
                            class="btn btn-success waves-effect waves-light p-2"><i
                                class="fa fa-print"></i></a>
                        <a href="{{ route('customer.recart', $data->id) }}" class="btn btn-primary w-md waves-effect p-2 waves-light"><i
                                class="fa fa-shopping-cart"></i> {{ __('Re-Cart') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- invoice form end -->
</div>
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