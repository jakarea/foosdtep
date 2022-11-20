@extends('layouts.frontend')

@section('content')
@section('title') {{ __('Cart') }} @endsection
@section('breadcumbTitle') {{ __('text.purchase_list')}} @endsection
<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-content">
                    <h5 class="section-content__title">{{ __('text.purchase_list')}}</h5>

                    <!-- add product form start -->
                    <form class="add_product_box position-relative">
                        <label for="">{{ __('text.add_prodct') }}</label>
                        <div class="form-group">
                            <input type="text" id="cart__search" placeholder="{{__('text.find_product')}}" class="form-control">
                            <!-- <a href="#"><i class="fas fa-search"></i></a> -->
                        </div>
                        <div id="cart__result" class="card">
                            <div class="card-body result_html"></div>
                        </div>

                    </form>
                    <!-- add product form end -->

                </div>
                <!-- Start Cart Table -->
                <div class="table-content custom-table table-responsive cart-table-content m-t-30">
                    <table>
                        <thead class="gray-bg" >
                            <tr>
                                <th>{{ __('text.image')}}</th>
                                <th>{{ __('text.product_name')}}</th>
                                <th>{{ __('text.unit_price')}}</th>
                                <th>{{ __('text.qty')}}</th>
                                <th>{{ __('text.sub_total')}}</th>
                                <th>{{ __('text.action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <tr data-id="{{ $id }}">
                                <td class="product-thumbnail">
                                    <a href="#"><img class="img-fluid" src="{{ asset('frontend/assets/img/product/'. $details['image'] ) }}" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">{{ $details['name'] }}</a></td>
                                <td class="product-price-cart"><span class="amount">€{{ $details['price'] }}</span></td>
                                <td class="product-quantities" data-th="Quantity">
                                    <div class="quantity d-inline-block">
                                        <input type="number" min="1" step="1" value="{{ $details['quantity'] }}" class="quantities update-cart">
                                    </div>
                                </td>
                                <td class="product-subtotal">€{{ $details['price'] * $details['quantity'] }}</td>
                                <td class="product-remove remove-from-cart">
                                    <!-- <a href="#"><i class="fa fa-pencil-alt"></i></a> -->
                                    <a href="#"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>  <!-- End Cart Table -->
                    <!-- Start Cart Table Button -->
                <div class="cart-table-button m-t-10">
                    <div class="cart-table-button--left">
                        <!-- <a href="{{ route('products') }}" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20">{{ __('text.continue_shopping')}} </a> -->
                        <a href="javascript:void(0)" onclick="printDiv('printableArea')" class="btn p-2 btn--radius btn-primary btn--green-hover-black btn--uppercase font--semi-bold" type="submit">{{ __('text.print')}} </a>
  

                    </div>
                    <!-- <div class="cart-table-button--right">
                        <a href="#" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20 m-r-20">UPDATE SHOPPING CART</a>
                        <a href="#" class="btn btn--box btn--large btn--radius btn--black btn--black-hover-green btn--uppercase font--bold m-t-20">Clear Shopping Cart</a>
                    </div> -->
                    <div class="sidebar__widget mb-3">
                        @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                        <h4 class="grand-total m-tb-25 mt-0">{{ __('text.grand_total')}}: &nbsp; <span> €{{ $total }}</span></h4>
                        <a href="{{ route('checkout.cart') }}" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold" type="submit">{{ __('text.proceed_to_checkout')}} </a>
                    </div>
                </div>  <!-- End Cart Table Button -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="printarea" id="printableArea">
                    <div class="d-flex align-items-center justify-content-between p-2">
                        <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt="a" class="img-fluid" width="70">

                        <h4>{{ __('text.purchase_list')}}</h4>

                    </div>
                    <p class="bg-secondary text-white p-2 mt-2">{{ date("d/m/Y h:i:s") }} </p>
                    <table>
                        <tr>
                            <th style="padding: 10px;">{{ __('text.image')}}</th>
                            <th style="text-align: center; padding: 10px;">{{ __('text.product_name')}}</th>  
                            <th style="text-align: center;  padding: 10px;">{{ __('text.qty')}}</th>
                        </tr>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <tr data-id="{{ $id }}">
                                    <td style="padding: 10px;">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/img/product/'. $details['image'] ) }}" alt="" width="60">
                                    </td>
                                    <td style="padding: 10px;" class="product-name">{{ $details['name'] }}</td>  
                                    <td style="padding: 10px;" class="product-name">{{ $details['quantity'] }}</td>  
                                </tr>
                            @endforeach
                            @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
            </div>
            <div class="col-lg-4 col-md-6">
            </div>
            <div class="col-lg-4 col-md-6">
            </div>
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection

@section('script')
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantities").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

    
  
</script>

<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<script>
    /*----------------------------------
        Auto Result Suggest for search
    -----------------------------------*/

    $('#cart__search').on('change', function(e) {
        e.preventDefault();

        $('#cart__result').hide();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let token = $('meta[name="csrf_token"]').attr('content');
        var inputdata = $(this).val();

        $.ajax({
            type: 'post',
            dataType: "json",
            url: '/search/query',
            data:{_token: token, "inputdata": inputdata},
            success:function(data){
                $('#cart__result').show();
                $('.result_html').empty();
                if( data.length > 0 ){
                    $.each( data, function( key, value ) { 
                        $('.result_html').append('<a href="/add-to-cart/'+value.id+'""><div class="search-item d-inline-block align-item-center align-middle"><div class="search__p-image d-inline-block"><img src="/frontend/assets/img/product/'+value.image+'" alt="Image" class="img-fluid" width="50" style="vertical-align: bottom; margin-right:5px"></div><div class="search__p-product d-inline-block"><h5 class="m-0">'+value.name+'</h5><p class="m-0">'+value.short_description.slice(0, 50)+'...</p></div></div></a><hr>');
                    })
                } else {
                    // $('#cart__result').hide();
                    $('.result_html').append('Data Not found');
                }
            }
        });
    })
</script>
@endsection