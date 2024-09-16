@extends('layouts.frontmaster')

@section('content')

{{-- {{ session('grandtotal') }} --}}

{{-- top bar --}}

<section class="coupon-area pt-80 pb-30 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
    <div class="row">
       {{-- <div class="col-md-6">
          <div class="coupon-accordion">
                <!-- ACCORDION START -->
                <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                <div id="checkout-login" class="coupon-content">
                   <div class="coupon-info">
                      <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                            sit amet ipsum luctus.</p>
                      <form action="#">
                            <p class="form-row-first">
                               <label>Username or email <span class="required">*</span></label>
                               <input type="text">
                            </p>
                            <p class="form-row-last">
                               <label>Password <span class="required">*</span></label>
                               <input type="text">
                            </p>
                            <p class="form-row">
                               <button class="tp-btn tp-color-btn" type="submit">Login</button>
                               <label>
                                  <input type="checkbox">
                                  Remember me
                               </label>
                            </p>
                            <p class="lost-password">
                               <a href="#">Lost your password?</a>
                            </p>
                      </form>
                   </div>
                </div>
                <!-- ACCORDION END -->
          </div>
       </div> --}}
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
       <form action="#">
          <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="checkbox-form">
                      <h3>Billing Details</h3>
                      <div class="row">
                            {{-- <div class="col-md-12">
                               <div class="country-select">
                                  <label>Country <span class="required">*</span></label>
                                  <select style="display: none;">
                                        <option value="volvo">United States</option>
                                        <option value="saab">Algeria</option>
                                        <option value="mercedes">Canada</option>
                                        <option value="audi">Germany</option>
                                        <option value="audi2">England</option>
                                        <option value="audi3">Qatar</option>
                                        <option value="audi5">Dominican Republic</option>
                                  </select><div class="nice-select" tabindex="0"><span class="current">United States</span><ul class="list"><li data-value="volvo" class="option selected">United States</li><li data-value="saab" class="option">Algeria</li><li data-value="mercedes" class="option">Canada</li><li data-value="audi" class="option">Germany</li><li data-value="audi2" class="option">England</li><li data-value="audi3" class="option">Qatar</li><li data-value="audi5" class="option">Dominican Republic</li></ul></div>
                               </div>
                            </div> --}}
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>First Name <span class="required">*</span></label>
                                  <input type="text" placeholder="">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>Last Name <span class="required">*</span></label>
                                  <input type="text" placeholder="">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="checkout-form-list">
                                  <label>Company Name</label>
                                  <input type="text" placeholder="">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="checkout-form-list">
                                  <label>Address <span class="required">*</span></label>
                                  <input type="text" placeholder="Street address">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="checkout-form-list">
                                  <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="checkout-form-list">
                                  <label>Town / City <span class="required">*</span></label>
                                  <input type="text" placeholder="Town / City">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>State / County <span class="required">*</span></label>
                                  <input type="text" placeholder="">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>Postcode / Zip <span class="required">*</span></label>
                                  <input type="text" placeholder="Postcode / Zip">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>Email Address <span class="required">*</span></label>
                                  <input type="email" placeholder="">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="checkout-form-list">
                                  <label>Phone <span class="required">*</span></label>
                                  <input type="text" placeholder="Postcode / Zip">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="checkout-form-list create-acc">
                                  <input id="cbox" type="checkbox">
                                  <label>Create an account?</label>
                               </div>
                               <div id="cbox_info" class="checkout-form-list create-account">
                                  <p>Create an account by entering the information below. If you are a returning
                                        customer please login at the top of the page.</p>
                                  <label>Account password <span class="required">*</span></label>
                                  <input type="password" placeholder="password">
                               </div>
                            </div>
                      </div>
                      <div class="different-address">
                            <div class="ship-different-title">
                               <h3>
                                  <label>Ship to a different address?</label>
                                  <input id="ship-box" type="checkbox">
                               </h3>
                            </div>
                            <div id="ship-box-info">
                               <div class="row">
                                  <div class="col-md-12">
                                        <div class="country-select">
                                           <label>Country <span class="required">*</span></label>
                                           <select style="display: none;">
                                              <option value="volvo">bangladesh</option>
                                              <option value="saab">Algeria</option>
                                              <option value="mercedes">Afghanistan</option>
                                              <option value="audi">Ghana</option>
                                              <option value="audi2">Albania</option>
                                              <option value="audi3">Bahrain</option>
                                              <option value="audi4">Colombia</option>
                                              <option value="audi5">Dominican Republic</option>
                                           </select><div class="nice-select" tabindex="0"><span class="current">bangladesh</span><ul class="list"><li data-value="volvo" class="option selected">bangladesh</li><li data-value="saab" class="option">Algeria</li><li data-value="mercedes" class="option">Afghanistan</li><li data-value="audi" class="option">Ghana</li><li data-value="audi2" class="option">Albania</li><li data-value="audi3" class="option">Bahrain</li><li data-value="audi4" class="option">Colombia</li><li data-value="audi5" class="option">Dominican Republic</li></ul></div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                        <div class="checkout-form-list">
                                           <label>First Name <span class="required">*</span></label>
                                           <input type="text" placeholder="">
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                        <div class="checkout-form-list">
                                           <label>Last Name <span class="required">*</span></label>
                                           <input type="text" placeholder="">
                                        </div>
                                  </div>
                                  <div class="col-md-12">
                                        <div class="checkout-form-list">
                                           <label>Company Name</label>
                                           <input type="text" placeholder="">
                                        </div>
                                  </div>
                                  <div class="col-md-12">
                                        <div class="checkout-form-list">
                                           <label>Address <span class="required">*</span></label>
                                           <input type="text" placeholder="Street address">
                                        </div>
                                  </div>
                                  <div class="col-md-12">
                                        <div class="checkout-form-list">
                                           <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                  </div>
                                  <div class="col-md-12">
                                        <div class="checkout-form-list">
                                           <label>Town / City <span class="required">*</span></label>
                                           <input type="text" placeholder="Town / City">
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                        <div class="checkout-form-list">
                                           <label>State / County <span class="required">*</span></label>
                                           <input type="text" placeholder="">
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                        <div class="checkout-form-list">
                                           <label>Postcode / Zip <span class="required">*</span></label>
                                           <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                        <div class="checkout-form-list">
                                           <label>Email Address <span class="required">*</span></label>
                                           <input type="email" placeholder="">
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                        <div class="checkout-form-list">
                                           <label>Phone <span class="required">*</span></label>
                                           <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                  </div>
                               </div>
                            </div>
                            <div class="order-notes">
                               <div class="checkout-form-list">
                                  <label>Order Notes</label>
                                  <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
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
                                        $alltotal += $grandtotal + $cart->products->shipping_rate;
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
                                                    <input type="radio" name="shipping" checked>
                                                    <label>
                                                       Shipping Rate: <span class="amount">৳ {{ $shipping_price }}</span>
                                                    </label>
                                              </li>
                                              <li>
                                                    <input type="radio" name="coupon" checked>
                                                    <label>Coupon Discount:</label>
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
                        <form>
                         <div class="accordion" id="checkoutAccordion">
                            <div class="accordion-item">
                               <h2 class="accordion-header" id="checkoutOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                  Cash On Delevery (COD)
                                  </button>
                               </h2>
                               <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                <input type="radio" name="cod">
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
                                <input type="radio" name="online" >
                                <label>Select Online Method</label>
                               </div>
                            </div>
                         </div>
                         <div class="order-button-payment mt-20">
                            <button type="submit" class="tp-btn tp-color-btn w-100 banner-animation">Place order</button>
                         </div>
                        </form>
                      </div>
                   </div>
                </div>
          </div>
       </form>
    </div>
 </section>


@endsection
