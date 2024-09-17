<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
@php
    $grandtotal = 0;
@endphp

<div class="tpcartinfo tp-cart-info-area p-relative">
<button class="tpcart__close"><i class="fal fa-times"></i></button>
<div class="tpcart">
   <h4 class="tpcart__title">Your Cart</h4>
   <div class="tpcart__product">
      <div class="tpcart__product-list">
         <ul>
            @forelse ($carts as $cart)
              <li>
                 <div class="tpcart__item">
                    <div class="tpcart__img">
                       <img src="{{ asset('uploads/product') }}/{{ $cart->products->product_thumbnail }}" alt="">
                       <div class="tpcart__del">
                          <a href="#"><i class="far fa-times-circle"></i></a>
                       </div>
                    </div>
                    <div class="tpcart__content">
                       <span class="tpcart__content-title"><a href="shop-details.html">{{ $cart->products->product_name }}</a>
                       </span>
                       <div class="tpcart__cart-price">
                          <span class="quantity">{{ $cart->quantity }} x</span>
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

                          @endphp
                          <span class="new-price">৳
                              @if ($cart->products->discount_price)
                                  {{ $total }}
                              @else
                                  {{ $total }}
                              @endif
                          </span>
                       </div>
                    </div>
                 </div>
              </li>
              @empty
              <li>
                  <div class="tpcart__item">
                      <span class="text-danger">no cart on database!</span>
                  </div>
              </li>
            @endforelse
         </ul>
      </div>
      <div class="tpcart__checkout">
         <div class="tpcart__total-price d-flex justify-content-between align-items-center">
            <span> Subtotal:</span>
            <span class="heilight-price"> ৳ {{ $grandtotal }}</span>
         </div>
         <div class="tpcart__checkout-btn">
            <a class="tpcart-btn mb-10" href="{{ route('front.product.cart') }}">View Cart</a>
         </div>
      </div>
   </div>
   <div class="tpcart__free-shipping text-center">
      <span>Free shipping for orders <b>under 10km</b></span>
   </div>
</div>
</div>




</div>
