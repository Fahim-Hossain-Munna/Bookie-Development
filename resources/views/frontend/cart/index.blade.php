@extends('layouts.frontmaster')

@section('content')

@php
    $grandtotal = 0; // Initialize the grand total
@endphp

<x-front-header-title title="Cart"></x-front-header-title>


<section class="cart-area pt-80 pb-80 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
    <div class="row">
       <div class="col-12">
             <form action="#">
                <div class="table-content table-responsive">
                   <table class="table">
                         <thead>
                            <tr>
                               <th class="product-thumbnail">Product Image</th>
                               <th class="cart-product-name">Product Name</th>
                               <th class="product-price">Unit Price</th>
                               <th class="product-quantity">Quantity</th>
                               <th class="product-subtotal">Total</th>
                               <th class="product-remove">Remove</th>
                            </tr>
                         </thead>
                         <tbody>
                            @forelse ($carts as $cart)
                                <tr>
                                   <td class="product-thumbnail">
                                      <a href="{{ route('front.product.single',$cart->products->product_slug) }}"><img src="{{ asset('uploads/product') }}/{{ $cart->products->product_thumbnail }}" alt="">
                                      </a>
                                   </td>
                                   <td class="product-name">
                                      <a href="{{ route('front.product.single',$cart->products->product_slug) }}">{{ $cart->products->product_name }}</a>
                                   </td>
                                   <td class="product-price">
                                    @php
                                        $total = $cart->products->selling_price;
                                        if($cart->products->discount_type == 'flat'){
                                            $total = $cart->products->selling_price - $cart->products->discount_price;
                                        }
                                        if($cart->products->discount_type == 'percentage'){
                                            $totals = ($cart->products->selling_price * $cart->products->discount_price) / 100;
                                            $total = $cart->products->selling_price - $totals;
                                        }

                                        $subtotal = $total * $cart->quantity;
                                        $grandtotal += $subtotal;
                                    @endphp
                                    @if($cart->products->discount_price)
                                    <span class="amount">৳{{ $total }}</span>
                                    @else
                                    <span class="amount">৳{{ $total }}</span>
                                    @endif
                                   </td>
                                   <td class="product-quantity">
                                   @livewire('boostquantity',['cart' => $cart])
                                    </td>
                                   <td class="product-subtotal">
                                      <span class="amount">{{$subtotal}}</span>
                                   </td>
                                   <td class="product-remove">
                                      <a href="#"><i class="fa fa-times"></i></a>
                                   </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-danger text-center">no data found</td>
                                </tr>
                            @endforelse
                         </tbody>
                   </table>
                </div>
                <div class="row">
                   <div class="col-12">
                         <div class="coupon-all">
                            <div class="coupon">
                               <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                               <button class="tp-btn tp-color-btn banner-animation" name="apply_coupon" type="submit">Apply
                                     Coupon</button>
                            </div>
                            <div class="coupon2">
                               <button class="tp-btn tp-color-btn banner-animation" name="update_cart" type="submit">Update cart</button>
                            </div>
                         </div>
                   </div>
                </div>
                <div class="row justify-content-end">
                   <div class="col-md-5 ">
                         <div class="cart-page-total">
                            <h2>Cart totals</h2>
                            <ul class="mb-20">
                               <li>Subtotal <span>৳{{ $grandtotal }}</span></li>
                               <li>Total <span>৳{{ $grandtotal }}</span></li>
                            </ul>
                            <a href="checkout.html" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</a>
                         </div>
                   </div>
                </div>
             </form>
       </div>
    </div>
    </div>
 </section>

@endsection
