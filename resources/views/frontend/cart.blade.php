@extends('layouts.frontend')

@section('content')
@section('title') {{ __('Cart') }} @endsection
@section('breadcumbTitle') {{ __('Cart') }} @endsection
<!-- breadcumb start -->
@include('frontend.partials.breadcumb')
<!-- breadcumb start -->

<!-- ::::::  Start  Main Container Section  ::::::  -->

<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-content">
                    <h5 class="section-content__title">Your cart items</h5>
                </div>
                <!-- Start Cart Table -->
                <div class="table-content table-responsive cart-table-content m-t-30">
                    <table>
                        <thead class="gray-bg" >
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Until Price</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>Action</th>
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
                                <td class="product-price-cart"><span class="amount">${{ $details['price'] }}</span></td>
                                <td class="product-quantities" data-th="Quantity">
                                    <div class="quantity d-inline-block">
                                        <input type="number" min="1" step="1" value="{{ $details['quantity'] }}" class="quantities update-cart">
                                    </div>
                                </td>
                                <td class="product-subtotal">${{ $details['price'] * $details['quantity'] }}</td>
                                <td class="product-remove remove-from-cart">
                                    <a href="#"><i class="fa fa-pencil-alt"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
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
                        <a href="#" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20">CONTINUE SHOPPING</a>
                    </div>
                    <div class="cart-table-button--right">
                        <a href="#" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20 m-r-20">UPDATE SHOPPING CART</a>
                        <a href="#" class="btn btn--box btn--large btn--radius btn--black btn--black-hover-green btn--uppercase font--bold m-t-20">Clear Shopping Cart</a>
                    </div>
                </div>  <!-- End Cart Table Button -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
            </div>
            <div class="col-lg-4 col-md-6">
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar__widget m-t-40">
                    <div class="sidebar__box">
                        <h5 class="sidebar__title">Cart Total</h5>
                    </div>
                    @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                    <h4 class="grand-total m-tb-25">Grand Total <span>$ {{ $total }}</span></h4>
                    <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold" type="submit">PROCEED TO CHECKOUT</button>
                </div>
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
@endsection