@extends('layouts.frontmaster')

@section('content')

<x-front-header-title title="Products Page"></x-front-header-title>


<div class="product-area pt-70 pb-20">
    <div class="container">
       <div class="row">
          <div class="col-lg-10 col-md-12">
             <div class="product-sidebar__product-item">
                <div class="product-filter-content mb-40">
                   <div class="row align-items-center">
                      <div class="col-sm-6">
                         <div class="product-item-count">
                            <span>Total <b>{{ $products->count() }}</b> Item On List</span>
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="product-navtabs d-flex justify-content-end align-items-center">
                            <div class="tp-shop-selector">
                               <select style="display: none;">
                                  <option>Show 12</option>
                                  <option>Show 14</option>
                                  <option>Show 05</option>
                                  <option>Show 22</option>
                               </select><div class="nice-select" tabindex="0"><span class="current">Show 12</span><ul class="list"><li data-value="Show 12" class="option selected">Show 12</li><li data-value="Show 14" class="option">Show 14</li><li data-value="Show 05" class="option">Show 05</li><li data-value="Show 22" class="option">Show 22</li></ul></div>
                            </div>
                            <div class="tpproductnav tpnavbar product-filter-nav">
                               <nav>
                                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                     <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true"><i class="fal fa-list-ul"></i></button>

                                     <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="false"><i class="fal fa-th"></i></button>
                                  </div>
                               </nav>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="row mb-50">
                   <div class="col-lg-12">
                      <div class="tab-content" id="nav-tabContent">
                         <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                            @forelse ($products as $product)
                                <div class="row mb-40">
                                   <div class="col-lg-4 col-md-12">
                                      <div class="tpproduct__thumb">
                                         <div class="tpproduct__thumbitem p-relative">
                                            <a href="{{ route('front.product.single',$product->product_slug) }}">
                                               <img src="{{ asset('uploads/product') }}/{{ $product->product_thumbnail }}" alt="product-thumb">
                                               <img class="thumbitem-secondary" src="{{ asset('uploads/product') }}/{{ $product->product_thumbnail }}" alt="">
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-8 col-md-12">
                                      <div class="filter-product ml-20 pt-30">
                                         <h3 class="filter-product-title"><a href="javascript:void(0)">{{ $product->product_name }}</a></h3>
                                         <div class="tpproduct__ammount">
                                            @php
                                                $total = $product->selling_price;
                                                if($product->discount_type == 'flat'){
                                                    $total = $product->selling_price - $product->discount_price;
                                                }
                                                if($product->discount_type == 'percentage'){
                                                    $percen = ($product->selling_price * $product->discount_price) / 100;
                                                    $total = $product->selling_price - $percen;
                                                }
                                            @endphp
                                                @if ($product->discount_price)
                                                    <del class="tpproduct__priceinfo-list-oldprice">৳{{ $product->selling_price }}</del>
                                                    <span>৳{{ $total }}</span>
                                                @else
                                                    <span>৳{{ $total }}</span>
                                                @endif
                                         </div>
                                         <div class="tpproduct__rating mb-15">
                                            <ul>
                                               <li>
                                                  <a href="#"><i class="fas fa-star"></i></a>
                                                  <a href="#"><i class="fas fa-star"></i></a>
                                                  <a href="#"><i class="fas fa-star"></i></a>
                                                  <a href="#"><i class="fas fa-star"></i></a>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                               </li>
                                               <li>
                                                  <span>(81)</span>
                                               </li>
                                            </ul>
                                         </div>
                                         <p>{!! $product->product_short_description !!}.</p>

                                         <div class="tpproduct__action">
                                            <a class="quckview" href="{{ route('front.product.single',$product->product_slug) }}"><i class="fal fa-eye"></i></a>
                                            <a class="wishlist" href="javascript:void(0)"><i class="fal fa-heart"></i></a>
                                            <a class="wishlist" href="javascript:void(0)"><i class="fal fa-shopping-cart"></i></a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                            @empty
                            <div class="row mb-40">
                                <div class="col-lg-4 col-md-12">
                                   <div class="tpproduct__thumb">
                                      <div class="tpproduct__thumbitem p-relative">
                                         <a href="shop-details.html">
                                            <img src="{{ asset('frontend') }}/assets/img/product/home-two/product-21.jpg" alt="product-thumb">
                                            <img class="thumbitem-secondary" src="{{ asset('frontend') }}/assets/img/product/home-two/product-22.jpg" alt="">
                                         </a>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                   <div class="filter-product ml-20 pt-30">
                                      <h3 class="filter-product-title"><a href="shop-details.html">Miko Wooden Bluetooth Shirt</a></h3>
                                      <div class="tpproduct__ammount">
                                         <span>$31.00</span>
                                         <del>$25.00</del>
                                      </div>
                                      <div class="tpproduct__rating mb-15">
                                         <ul>
                                            <li>
                                               <a href="#"><i class="fas fa-star"></i></a>
                                               <a href="#"><i class="fas fa-star"></i></a>
                                               <a href="#"><i class="fas fa-star"></i></a>
                                               <a href="#"><i class="fas fa-star"></i></a>
                                               <a href="#"><i class="far fa-star"></i></a>
                                            </li>
                                            <li>
                                               <span>(81)</span>
                                            </li>
                                         </ul>
                                      </div>
                                      <p>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accusa ntium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volup tatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volup tatem sequi nesciunt.</p>
                                      <p>Once that's determined, you need to come up with a name and set up a legal structure, such as a corporation. Next, set an ecommerce site with a payment gateway. For instance, a small business owner who runs a dress shop can set up a website promoting their clothing and other related products online and allow customers to make payments with a credit card or through a payment processing service, such as PayPal.</p>
                                      <div class="tpproduct__action">
                                         <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                         <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                         <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                         <a class="wishlist" href="cart.html"><i class="fal fa-shopping-cart"></i></a>
                                      </div>
                                   </div>
                                </div>
                             </div>
                            @endforelse

                         </div>
                         <div class="tab-pane fade show" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                            <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct">
                               @forelse ($products as $product)
                                <div class="col" style="z-index: -1;">
                                   <div class="tpproduct tpproductitem mb-15 p-relative">
                                      <div class="tpproduct__thumb">
                                         <div class="tpproduct__thumbitem p-relative">
                                            <a href="{{ route('front.product.single',$product->product_slug) }}">
                                               <img src="{{ asset('uploads/product') }}/{{ $product->product_thumbnail }}" alt="product-thumb">
                                               <img class="thumbitem-secondary" src="{{ asset('uploads/product') }}/{{ $product->product_thumbnail }}" alt="product-thumb">
                                            </a>
                                         </div>
                                      </div>
                                      <div class="tpproduct__content-area">
                                         <h3 class="tpproduct__title mb-5"><a href="{{ route('front.product.single',$product->product_slug) }}">{{ $product->product_name }}</a></h3>
                                         <div class="tpproduct__priceinfo p-relative">
                                            <div class="tpproduct__ammount">
                                            @php
                                                $total = $product->selling_price;
                                                if($product->discount_type == 'flat'){
                                                    $total = $product->selling_price - $product->discount_price;
                                                }
                                                if($product->discount_type == 'percentage'){
                                                    $percen = ($product->selling_price * $product->discount_price) / 100;
                                                    $total = $product->selling_price - $percen;
                                                }
                                            @endphp
                                                @if ($product->discount_price)
                                                    <del class="tpproduct__priceinfo-list-oldprice">৳{{ $product->selling_price }}</del>
                                                    <span>৳{{ $total }}</span>
                                                @else
                                                    <span>৳{{ $total }}</span>
                                                @endif
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                               @empty
                               <div class="col" style="z-index: -1;">
                                <div class="tpproduct tpproductitem mb-15 p-relative">
                                   <div class="tpproduct__thumb">
                                      <div class="tpproduct__thumbitem p-relative">
                                         <a href="shop-details-2.html">
                                            <img src="{{ asset('frontend') }}/assets/img/product/home-two/product-21.jpg" alt="product-thumb">
                                            <img class="thumbitem-secondary" src="{{ asset('frontend') }}/assets/img/product/home-two/product-22.jpg" alt="product-thumb">
                                         </a>
                                         <div class="tpproduct__thumb-bg">
                                            <div class="tpproductactionbg">
                                               <a href="cart.html"><i class="fal fa-shopping-basket"></i></a>
                                               <a href="#"><i class="fal fa-exchange"></i></a>
                                               <a href="#"><i class="fal fa-eye"></i></a>
                                               <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="tpproduct__content-area">
                                      <h3 class="tpproduct__title mb-5"><a href="shop-details.html">Purab Enormous Miranda Bottle</a></h3>
                                      <div class="tpproduct__priceinfo p-relative">
                                         <div class="tpproduct__ammount">
                                            <span>$31.00</span>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="tpproduct__ratingarea">
                                      <div class="d-flex align-items-center justify-content-between">
                                         <div class="tpproductdot">
                                            <a class="tpproductdot__variationitem" href="shop-details.html">
                                               <div class="tpproductdot__termshape">
                                                  <span class="tpproductdot__termshape-bg"></span>
                                                  <span class="tpproductdot__termshape-border"></span>
                                               </div>
                                            </a>
                                            <a class="tpproductdot__variationitem" href="shop-details.html">
                                               <div class="tpproductdot__termshape">
                                                  <span class="tpproductdot__termshape-bg red-product-bg"></span>
                                                  <span class="tpproductdot__termshape-border red-product-border"></span>
                                               </div>
                                            </a>
                                            <a class="tpproductdot__variationitem" href="shop-details.html">
                                               <div class="tpproductdot__termshape">
                                                  <span class="tpproductdot__termshape-bg orange-product-bg"></span>
                                                  <span class="tpproductdot__termshape-border orange-product-border"></span>
                                               </div>
                                            </a>
                                            <a class="tpproductdot__variationitem" href="shop-details.html">
                                               <div class="tpproductdot__termshape">
                                                  <span class="tpproductdot__termshape-bg purple-product-bg"></span>
                                                  <span class="tpproductdot__termshape-border purple-product-border"></span>
                                               </div>
                                            </a>
                                         </div>
                                         <div class="tpproduct__rating">
                                            <ul>
                                               <li>
                                                  <a href="#"><i class="fas fa-star"></i></a>
                                                  <a href="#"><i class="fas fa-star"></i></a>
                                                  <a href="#"><i class="fas fa-star"></i></a>
                                                  <a href="#"><i class="fas fa-star"></i></a>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                               </li>
                                               <li>
                                                  <span>(81)</span>
                                               </li>
                                            </ul>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                               @endforelse
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-xxl-12">
                      <div class="basic-pagination text-center pb-50">
                         <nav>
                            <ul>
                               <li>
                                  <a href="shop-2.html">
                                     <i class="fal fa-long-arrow-left"></i>
                                  </a>
                               </li>
                               <li>
                                  <a href="shop-2.html">01</a>
                               </li>
                               <li>
                                  <span class="current">02</span>
                               </li>
                               <li>
                                  <a href="shop-2.html">- - -</a>
                               </li>
                               <li>
                                  <a href="shop-2.html">07</a>
                               </li>
                               <li>
                                  <a href="shop-2.html">08</a>
                               </li>
                               <li>
                                  <a href="shop-2.html">
                                     <i class="fal fa-long-arrow-right"></i>
                                  </a>
                               </li>
                            </ul>
                          </nav>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-12">
             <div class="tpsidebar product-sidebar__product-category">
                <div class="product-sidebar">
                   <div class="product-sidebar__widget mb-30">
                      <div class="product-sidebar__info product-info-list">
                         <h4 class="product-sidebar__title mb-25">Category</h4>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                               Kids (10)
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                               Mens (23)
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                            <label class="form-check-label" for="flexCheckChecked3">
                               Womens (14)
                            </label>
                         </div>
                      </div>
                   </div>
                   <div class="product-sidebar__widget mb-30">
                      <div class="product-sidebar__info product-info-list">
                         <h4 class="product-sidebar__title mb-30">Filter
                         </h4>
                         <div class="productsidebar">
                            <div class="productsidebar__head">
                            </div>
                            <div class="productsidebar__range">
                               <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 50%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 50%;"></span></div>
                               <div class="price-filter mt-10"><input type="text" id="amount">
                            </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-sidebar__widget mb-30">
                      <div class="product-sidebar__info product-info-list">
                         <h4 class="product-sidebar__title mb-20">Category</h4>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                            <label class="form-check-label" for="flexCheckDefault5">
                               Spring &amp; Autumn
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6">
                            <label class="form-check-label" for="flexCheckChecked6">
                               Summer
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked7">
                            <label class="form-check-label" for="flexCheckChecked7">
                               Winter
                            </label>
                         </div>
                      </div>
                   </div>
                   <div class="product-sidebar__widget mb-30 d-none">
                      <div class="product-sidebar__info product-info-list">
                         <h4 class="product-sidebar__title mb-20">Color</h4>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                            <label class="form-check-label" for="flexCheckDefault8">
                               Spring &amp; Autumn
                            </label>
                            <span class="f-right"><i class="far fa-angle-down"></i></span>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked9">
                            <label class="form-check-label" for="flexCheckChecked9">
                               Summer
                            </label>
                            <span class="f-right"><i class="far fa-angle-down"></i></span>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked10">
                            <label class="form-check-label" for="flexCheckChecked10">
                               Winter
                            </label>
                            <span class="f-right"><i class="far fa-angle-down"></i></span>
                         </div>
                      </div>
                   </div>
                   <div class="product-sidebar__widget mb-30">
                      <div class="product-sidebar__info">
                         <h4 class="product-sidebar__title mb-20">Color</h4>
                         <div class="form-check">
                            <input class="form-check-input black-input" type="checkbox" value="" id="flexCheckDefault12">
                            <label class="form-check-label" for="flexCheckDefault12">
                               Black
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input blue-input" type="checkbox" value="" id="flexCheckChecked13">
                            <label class="form-check-label" for="flexCheckChecked13">
                               Blue
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input grey-input" type="checkbox" value="" id="flexCheckChecked14">
                            <label class="form-check-label" for="flexCheckChecked14">
                               Gray
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input green-input" type="checkbox" value="" id="flexCheckChecked15">
                            <label class="form-check-label" for="flexCheckChecked15">
                               Green
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input red-input" type="checkbox" value="" id="flexCheckChecked16">
                            <label class="form-check-label" for="flexCheckChecked16">
                               Red
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input yellow-input" type="checkbox" value="" id="flexCheckChecked17">
                            <label class="form-check-label" for="flexCheckChecked17">
                               Yellow
                            </label>
                         </div>
                      </div>
                   </div>
                   <div class="product-sidebar__widget mb-30">
                      <div class="product-sidebar__brand">
                         <h4 class="product-sidebar__title mb-20">Brand</h4>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckDefault12">
                               <a href="#">Alexander McQueen</a>
                            </label>
                         </div>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckChecked13">
                               <a href="#">Adidas</a>
                            </label>
                         </div>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckChecked14">
                               <a href="#">Balenciaga</a>
                            </label>
                         </div>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckChecked15">
                               <a href="#">Balmain</a>
                            </label>
                         </div>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckChecked16">
                               <a href="#">Burberry</a>
                            </label>
                         </div>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckChecked17">
                               <a href="#">Chloé</a>
                            </label>
                         </div>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckChecked17">
                               <a href="#">Dsquared2</a>
                            </label>
                         </div>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckChecked17">
                               <a href="#">Givenchy</a>
                            </label>
                         </div>
                         <div class="form-check">
                            <label class="form-check-label" for="flexCheckChecked17">
                               <a href="#">Kenzo</a>
                            </label>
                         </div>
                      </div>
                   </div>
                   <div class="product-sidebar__widget mb-30">
                      <div class="product-sidebar__info product-info-list product-color-list">
                         <h4 class="product-sidebar__title mb-20">Price</h4>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18">
                            <label class="form-check-label" for="flexCheckDefault18">
                               $10.00 - $49.00
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked19">
                            <label class="form-check-label" for="flexCheckChecked19">
                               $10.00 - $49.00
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked20">
                            <label class="form-check-label" for="flexCheckChecked20">
                               $10.00 - $49.00
                            </label>
                         </div>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked21">
                            <label class="form-check-label" for="flexCheckChecked21">
                               $10.00 - $49.00
                            </label>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
