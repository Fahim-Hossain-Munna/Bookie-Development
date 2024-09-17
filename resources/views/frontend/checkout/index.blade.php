@extends('layouts.frontmaster')

@section('content')

{{-- {{ session('grandtotal') }} --}}

{{-- top bar --}}

<section class="coupon-area pt-80 pb-30 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
    <div class="row">
       <div class="col-md-6">
          <div class="coupon-accordion">
                <!-- ACCORDION START -->
                <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                <div id="checkout_coupon" class="coupon-checkout-content">
                   <div class="coupon-info">
                      <form action="#">
                            <p class="checkout-coupon">
                               <input type="text" placeholder="Coupon Code">
                               <button class="tp-btn tp-color-btn" type="submit">Apply Coupon</button>
                            </p>
                      </form>
                   </div>
                </div>
                <!-- ACCORDION END -->
          </div>
       </div>
    </div>
 </div>
 </section>



{{-- down part --}}

@php
    $grandtotal = 0;
    $alltotal = 0;
    $shipping_price = 0;
@endphp

<section class="checkout-area pb-50 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
       <form action="{{ route('customer.order') }}" method="POST">
        @csrf
          <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="checkbox-form">
                      <h3>Billing Details</h3>
                      <div class="row">
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>First Name <span class="required">*</span></label>
                                  <input type="text" placeholder="" name="firstname">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>Last Name <span class="required">*</span></label>
                                  <input type="text" placeholder="" name="lastname">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="checkout-form-list">
                                  <label>Address <span class="required">*</span></label>
                                  <input type="text" placeholder="Street address, Apartment, suite, unit etc." name="address">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="checkout-form-list">
                                  <label>Town / City <span class="required">*</span></label>
                                  <input type="text" placeholder="Town / City" name="city">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>State / County <span class="required">*</span></label>
                                  <input type="text" placeholder="" name="country">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>Postcode / Zip <span class="required">*</span></label>
                                  <input type="text" placeholder="Postcode / Zip" name="zipcode">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>Email Address <span class="required">*</span></label>
                                  <input type="email" placeholder="Email" name="email">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>Phone <span class="required">*</span></label>
                                  <input type="text" placeholder="Contact" name="phone">
                               </div>
                            </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-6 col-md-12">
                   <div class="your-order mb-30 ">
                      <h3>Your order</h3>
                      <div class="your-order-table table-responsive">
                            <table>
                               <thead>
                                  <tr>
                                     <th class="product-name">Product</th>
                                     <th class="product-total">Total</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  @foreach ($carts as $cart)
                                  @php
                                    $total = $cart->products->selling_price;
                                    if($cart->products->discount_type == 'flat'){
                                        $total = $cart->products->selling_price - $cart->products->discount_price;
                                    }

                                    if($cart->products->discount_type == 'percentage'){
                                        $subprice = ($cart->products->selling_price * $cart->products->discount_price) / 100;
                                        $total = $cart->products->selling_price - $subprice;
                                    }

                                    $subtotal = $total * $cart->quantity;
                                    $grandtotal += $subtotal;

                                    if($cart->products->shipping_rate){
                                        $shipping_price += $cart->products->shipping_rate;
                                        // $alltotal += $grandtotal + $shipping_price;
                                    }
                                    if($shipping_price > 1){
                                        $alltotal = $grandtotal + $shipping_price;
                                        session()->put('all_total', $alltotal);
                                    }else{
                                        $alltotal = $grandtotal + $shipping_price;
                                        session()->put('all_total', $alltotal);
                                    }



                                @endphp
                                    <tr class="cart_item">
                                          <td class="product-name">
                                             {{ $cart->products->product_name }} <strong class="product-quantity"> × {{ $cart->quantity }}</strong>
                                          </td>
                                          <td class="product-total">
                                             <span class="amount">৳
                                                @if ($cart->products->discount_price)
                                                    {{ $total }}
                                                @else
                                                    {{ $total }}
                                                @endif
                                             </span>
                                          </td>
                                    </tr>
                                  @endforeach
                               </tbody>
                               <tfoot>
                                  <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">৳{{ $grandtotal }}</span></td>
                                  </tr>
                                  <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                           <ul>
                                              <li>
                                                    <input type="radio" checked>
                                                    <label>
                                                       Shipping Rate: <span class="amount">৳ {{ $shipping_price }}</span>
                                                    </label>
                                              </li>
                                              <li>
                                                    <input type="radio" checked>
                                                    <label>Coupon Discount: ৳ 0</label>
                                              </li>
                                           </ul>
                                        </td>
                                  </tr>
                                  <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">${{ $alltotal }}</span></strong>
                                        </td>
                                  </tr>
                               </tfoot>
                            </table>
                      </div>
                      <div class="payment-method">
                         <div class="accordion" id="checkoutAccordion">
                            <div class="accordion-item">
                               <h2 class="accordion-header" id="checkoutOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                  Cash On Delevery (COD)
                                  </button>
                               </h2>
                               <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                <input type="checkbox" name="cod">
                                <label>Select COD Method</label>
                               </div>
                            </div>
                            <div class="accordion-item">
                               <h2 class="accordion-header" id="paypalThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                  Stripe / SSLCommerz
                                  </button>
                               </h2>
                               <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                <input type="checkbox" name="online" >
                                <label>Select Online Method</label>
                               </div>
                            </div>
                         </div>
                         <div class="order-button-payment mt-20">
                            <button type="submit" class="tp-btn tp-color-btn w-100 banner-animation">Place order</button>
                         </div>
                      </div>
                   </div>
                </div>
          </div>
       </form>
    </div>
 </section>


@endsection

@section('script')

  @if (session('cod_done'))
  <script>
    Toastify({
      text: "{{ session('cod_done') }}",
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: "right", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: "linear-gradient(to right, #00b09b, #96c93d)",
        transition: "opacity 0.5s ease",
      },
      onClick: function(){} // Callback after click
    }).showToast();

    </script>
  @endif

@endsection
