@extends('layouts.frontmaster')


@section('content')

<x-front-header-title title="{{ $product->product_name }} Details"></x-front-header-title>

<section class="product-area pt-80 pb-50">
    <div class="container">
       <div class="row">
          <div class="col-lg-5 col-md-12">
             <div class="tpproduct-details__list-img">
                <div class="tpproduct-details__list-img-item">
                   <img src="{{ asset('uploads/product') }}/{{ $product->product_thumbnail }}" alt="">
                </div>
             </div>
          </div>
          <div class="col-lg-5 col-md-7">
             <div class="tpproduct-details__content tpproduct-details__sticky">
                <div class="tpproduct-details__tag-area d-flex align-items-center mb-5">
                   <span class="tpproduct-details__tag">{{ $product->singlewithcategory->title }}</span>
                   <div class="tpproduct-details__rating">
                      <a href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                   </div>
                   <a class="tpproduct-details__reviewers">10 Reviews</a>
                </div>
                <div class="tpproduct-details__title-area d-flex align-items-center flex-wrap mb-5">
                   <h3 class="tpproduct-details__title">{{ $product->product_name }}</h3>
                   <span class="tpproduct-details__stock">In Stock</span>
                </div>
                <div class="tpproduct-details__price mb-30">
                    @php
                    if($product->discount_type == 'flat'){
                        $totalprice = $product->selling_price - $product->discount_price;
                    }
                    if($product->discount_type == 'percentage'){
                        $percen = ($product->selling_price * $product->discount_price) / 100;
                        $totalprice = $product->selling_price - $percen;
                    }
                @endphp
                @if ($product->discount_price)
                    <del class="tpproduct__priceinfo-list-oldprice">৳{{ $product->selling_price }}</del>
                    <span>৳{{ $totalprice }}</span>
                @else
                    <span>৳{{ $product->selling_price }}</span>
                @endif
                   {{-- <del>$9.35</del>
                   <span>$7.25</span> --}}
                </div>
                <div class="tpproduct-details__pera" style="width: 500px !important; text-align: justify;">
                   <p>
                    {!! $product->product_short_description !!}
                   </p>
                </div>

                @livewire('addtocart', ['product_id' => $product->id])

                <div class="tpproductdot mb-30">
                    {{-- faka --}}
                </div>

                <div class="tpproduct-details__information tpproduct-details__code">
                   <p>SKU:</p><span>{{ $product->product_code }}</span>
                </div>
                <div class="tpproduct-details__information tpproduct-details__categories">
                   <p>Category:</p>
                   <span><a href="#">{{ $product->singlewithcategory->title }},</a></span>
                </div>
                <div class="tpproduct-details__information tpproduct-details__tags">
                   <p>Tags:</p>
                   @foreach ($product->manywithtags as $tag)
                    <span><a href="#">{{ $tag->title }}</a></span>
                   @endforeach
                </div>
                <div class="tpproduct-details__information tpproduct-details__social">
                   <p>Share:</p>
                   <a href="#"><i class="fab fa-facebook-f"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-behance"></i></a>
                   <a href="#"><i class="fab fa-youtube"></i></a>
                   <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-5">
             <div class="tpproduct-details__condation">
                <ul>
                   <li>
                      <div class="tpproduct-details__condation-item d-flex align-items-center">
                         <div class="tpproduct-details__condation-thumb">
                            <img src="{{ asset('frontend') }}/assets/img/icon/product-det-1.png" alt="" class="tpproduct-details__img-hover">
                         </div>
                         <div class="tpproduct-details__condation-text">
                            <p>Free Shipping apply to all<br>orders over $100</p>
                         </div>
                      </div>
                   </li>
                   <li>
                      <div class="tpproduct-details__condation-item d-flex align-items-center">
                         <div class="tpproduct-details__condation-thumb">
                            <img src="{{ asset('frontend') }}/assets/img/icon/product-det-2.png" alt="" class="tpproduct-details__img-hover">
                         </div>
                         <div class="tpproduct-details__condation-text">
                            <p>Guranteed 100% Organic<br>from natural farmas</p>
                         </div>
                      </div>
                   </li>
                   <li>
                      <div class="tpproduct-details__condation-item d-flex align-items-center">
                         <div class="tpproduct-details__condation-thumb">
                            <img src="{{ asset('frontend') }}/assets/img/icon/product-det-3.png" alt="" class="tpproduct-details__img-hover">
                         </div>
                         <div class="tpproduct-details__condation-text">
                            <p>1 Day Returns if you change<br>your mind</p>
                         </div>
                      </div>
                   </li>
                   <li>
                      <div class="tpproduct-details__condation-item d-flex align-items-center">
                         <div class="tpproduct-details__condation-thumb">
                            <img src="{{ asset('frontend') }}/assets/img/icon/product-det-4.png" alt="" class="tpproduct-details__img-hover">
                         </div>
                         <div class="tpproduct-details__condation-text">
                            <p>Covid-19 Info: We keep<br>delivering.</p>
                         </div>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>


 {{-- 1st part end --}}


 <div class="product-setails-area">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="tpproduct-details__navtab mb-60">
                <div class="tpproduct-details__nav mb-30">
                   <ul class="nav nav-tabs pro-details-nav-btn" id="myTabs" role="tablist">
                      <li class="nav-item" role="presentation">
                         <button class="nav-links active" id="home-tab-1" data-bs-toggle="tab" data-bs-target="#home-1" type="button" role="tab" aria-controls="home-1" aria-selected="true">Description</button>
                      </li>
                      {{-- <li class="nav-item" role="presentation">
                         <button class="nav-links" id="information-tab" data-bs-toggle="tab" data-bs-target="#additional-information" type="button" role="tab" aria-controls="additional-information" aria-selected="false">Additional information</button>
                      </li> --}}
                      <li class="nav-item" role="presentation">
                         <button class="nav-links" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (2)</button>
                      </li>
                   </ul>
                </div>
                <div class="tab-content tp-content-tab" id="myTabContent-2">
                   <div class="tab-para tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                      <p class="mb-30">{!! $product->product_description !!}.</p>
                   </div>
                   {{-- <div class="tab-pane fade" id="additional-information" role="tabpanel" aria-labelledby="information-tab">
                      <div class="product__details-info table-responsive">
                         <table class="table table-striped">
                            <tbody>
                               <tr>
                                  <td class="add-info">Weight</td>
                                  <td class="add-info-list"> 2 lbs</td>
                               </tr>
                               <tr>
                                  <td class="add-info">Dimensions</td>
                                  <td class="add-info-list"> 12 × 16 × 19 in</td>
                               </tr>
                               <tr>
                                  <td class="add-info">Product</td>
                                  <td class="add-info-list"> Purchase this product on rag-bone.com</td>
                               </tr>
                               <tr>
                                  <td class="add-info">Color</td>
                                  <td class="add-info-list"> Gray, Black</td>
                               </tr>
                               <tr>
                                  <td class="add-info">Size</td>
                                  <td class="add-info-list"> S, M, L, XL</td>
                               </tr>
                               <tr>
                                  <td class="add-info">Model</td>
                                  <td class="add-info-list"> Model </td>
                               </tr>
                               <tr>
                                  <td class="add-info">Shipping</td>
                                  <td class="add-info-list"> Standard shipping: $5,95L</td>
                               </tr>
                               <tr>
                                  <td class="add-info">Care Info</td>
                                  <td class="add-info-list"> Machine Wash up to 40ºC/86ºF Gentle Cycle</td>
                               </tr>
                               <tr>
                                  <td class="add-info">Brand</td>
                                  <td class="add-info-list">  Kazen</td>
                               </tr>
                            </tbody>
                        </table>
                      </div>
                   </div> --}}
                   <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                      <div class="product-details-review">
                         <h3 class="tp-comments-title mb-35">3 reviews for “Wide Cotton Tunic extreme hammer”</h3>
                         <div class="latest-comments mb-55">
                            <ul>
                               <li>
                                  <div class="comments-box d-flex">
                                     <div class="comments-avatar mr-25">
                                        <img src="{{ asset('frontend') }}/assets/img/shop/reviewer-01.png" alt="">
                                     </div>
                                     <div class="comments-text">
                                        <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                           <div class="avatar-name">
                                              <b>Siarhei Dzenisenka</b>
                                              <div class="comments-date mb-20">
                                                 <span>March 27, 2018 9:51 am</span>
                                              </div>
                                           </div>
                                           <div class="user-rating">
                                              <ul>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fal fa-star"></i></a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <p class="m-0">This is cardigan is a comfortable warm classic piece. Great to layer with a light top and you can dress up or down given the jewel buttons. I'm 5'8” 128lbs a 34A and the Small fit fine.</p>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="comments-box d-flex">
                                     <div class="comments-avatar mr-25">
                                        <img src="{{ asset('frontend') }}/assets/img/shop/reviewer-02.png" alt="">
                                     </div>
                                     <div class="comments-text">
                                        <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                           <div class="avatar-name">
                                              <b>Tommy Jarvis </b>
                                              <div class="comments-date mb-20">
                                                 <span>March 27, 2018 9:51 am</span>
                                              </div>
                                           </div>
                                           <div class="user-rating">
                                              <ul>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fal fa-star"></i></a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <p class="m-0">This is cardigan is a comfortable warm classic piece. Great to layer with a light top and you can dress up or down given the jewel buttons. I'm 5'8” 128lbs a 34A and the Small fit fine.</p>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="comments-box d-flex">
                                     <div class="comments-avatar mr-25">
                                        <img src="{{ asset('frontend') }}/assets/img/shop/reviewer-03.png" alt="">
                                     </div>
                                     <div class="comments-text">
                                        <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                           <div class="avatar-name">
                                              <b>Johnny Cash</b>
                                              <div class="comments-date mb-20">
                                                 <span>March 27, 2018 9:51 am</span>
                                              </div>
                                           </div>
                                           <div class="user-rating">
                                              <ul>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                 <li><a href="#"><i class="fal fa-star"></i></a></li>
                                              </ul>
                                           </div>
                                        </div>
                                        <p class="m-0">This is cardigan is a comfortable warm classic piece. Great to layer with a light top and you can dress up or down given the jewel buttons. I'm 5'8” 128lbs a 34A and the Small fit fine.</p>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                         </div>
                         <div class="product-details-comment">
                            <div class="comment-title mb-20">
                               <h3>Add a review</h3>
                               <p>Your email address will not be published. Required fields are marked*</p>
                            </div>
                            <div class="comment-rating mb-20 d-flex">
                               <span>Overall ratings</span>
                               <ul>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fal fa-star"></i></a></li>
                               </ul>
                            </div>
                            <div class="comment-input-box">
                               <form action="#">
                                  <div class="row">
                                     <div class="col-xxl-12">
                                        <div class="comment-input">
                                           <textarea placeholder="Your review..."></textarea>
                                        </div>
                                     </div>
                                     <div class="col-xxl-6">
                                        <div class="comment-input">
                                           <input type="text" placeholder="Your Name*">
                                        </div>
                                     </div>
                                     <div class="col-xxl-6">
                                        <div class="comment-input">
                                           <input type="email" placeholder="Your Email*">
                                        </div>
                                     </div>
                                     <div class="col-xxl-12">
                                        <div class="comment-submit">
                                           <button type="submit" class="tp-btn pro-submit">Submit</button>
                                        </div>
                                     </div>
                                  </div>
                               </form>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


 {{-- 2nd part end --}}


 <div class="related-product-area pt-65 pb-50 related-product-border">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-sm-6">
             <div class="tpsection mb-40">
                <h4 class="tpsection__title">Related Products</h4>
             </div>
          </div>
          <div class="col-sm-6">
             <div class="tprelated__arrow d-flex align-items-center justify-content-end mb-40">
                <div class="tprelated__prv" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-0b826d7c261910004"><i class="far fa-long-arrow-left"></i></div>
                <div class="tprelated__nxt" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-0b826d7c261910004"><i class="far fa-long-arrow-right"></i></div>
             </div>
          </div>
       </div>
       <div class="swiper-container related-product-active swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
          <div class="swiper-wrapper" id="swiper-wrapper-0b826d7c261910004" aria-live="off" style="transform: translate3d(-1375.2px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="1 / 16" style="width: 199.2px; margin-right: 30px;">
                <div class="tpproduct pb-15 mb-30">
                   <div class="tpproduct__thumb p-relative">
                      <a href="shop-details.html">
                         <img src="{{ asset('frontend') }}/assets/img/product/home-one/product-3.jpg" alt="product-thumb">
                         <img class="product-thumb-secondary" src="{{ asset('frontend') }}/assets/img/product/home-one/product-4.jpg" alt="">
                      </a>
                      <div class="tpproduct__thumb-action">
                         <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                         <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                         <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                      </div>
                   </div>
                   <div class="tpproduct__content">
                      <h3 class="tpproduct__title"><a href="shop-details-2.html">Gorgeous Wooden Gloves</a></h3>
                      <div class="tpproduct__priceinfo p-relative">
                         <div class="tpproduct__priceinfo-list">
                            <span>$31.00</span>
                         </div>
                         <div class="tpproduct__cart">
                            <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>





             @foreach ($related_product as $item)
             <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="10 / 16" style="width: 199.2px; margin-right: 30px;">
                    <div class="tpproduct pb-15 mb-30">
                       <div class="tpproduct__thumb p-relative">
                          <a href="shop-details-2.html">
                             <img src="{{ asset('uploads/product') }}/{{ $item->product_thumbnail }}" alt="product-thumb">
                             <img class="product-thumb-secondary" src="{{ asset('uploads/product') }}/{{ $item->product_thumbnail }}" alt="">
                          </a>
                          <div class="tpproduct__thumb-action">
                             <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                             <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                             <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                          </div>
                       </div>
                       <div class="tpproduct__content">
                          <h3 class="tpproduct__title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a></h3>
                          <div class="tpproduct__priceinfo p-relative">
                             <div class="tpproduct__priceinfo-list">
                                <span>$31.00</span>
                                <span class="tpproduct__priceinfo-list-oldprice">$39.00</span>
                             </div>
                             <div class="tpproduct__cart">
                                <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                             </div>
                          </div>
                       </div>
                    </div>
                </div>
                @endforeach

          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="12 / 16" style="width: 199.2px; margin-right: 30px;">
                <div class="tpproduct pb-15 mb-30">
                   <div class="tpproduct__thumb p-relative">
                      <a href="shop-details-2.html">
                         <img src="{{ asset('frontend') }}/assets/img/product/home-one/product-1.jpg" alt="product-thumb">
                         <img class="product-thumb-secondary" src="{{ asset('frontend') }}/assets/img/product/home-one/product-2.jpg" alt="">
                      </a>
                      <div class="tpproduct__thumb-action">
                         <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                         <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                         <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                      </div>
                   </div>
                   <div class="tpproduct__content">
                      <h3 class="tpproduct__title"><a href="shop-details.html">Miko Wooden Bluetooth Speaker</a></h3>
                      <div class="tpproduct__priceinfo p-relative">
                         <div class="tpproduct__priceinfo-list">
                            <span>$31.00</span>
                         </div>
                         <div class="tpproduct__cart">
                            <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="13 / 16" style="width: 199.2px; margin-right: 30px;">
                <div class="tpproduct pb-15 mb-30">
                   <div class="tpproduct__thumb p-relative">
                      <a href="shop-details.html">
                         <img src="{{ asset('frontend') }}/assets/img/product/home-one/product-3.jpg" alt="product-thumb">
                         <img class="product-thumb-secondary" src="{{ asset('frontend') }}/assets/img/product/home-one/product-4.jpg" alt="">
                      </a>
                      <div class="tpproduct__thumb-action">
                         <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                         <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                         <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                      </div>
                   </div>
                   <div class="tpproduct__content">
                      <h3 class="tpproduct__title"><a href="shop-details-2.html">Gorgeous Wooden Gloves</a></h3>
                      <div class="tpproduct__priceinfo p-relative">
                         <div class="tpproduct__priceinfo-list">
                            <span>$31.00</span>
                         </div>
                         <div class="tpproduct__cart">
                            <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="14 / 16" style="width: 199.2px; margin-right: 30px;">
                <div class="tpproduct pb-15 mb-30">
                   <div class="tpproduct__thumb p-relative">
                      <a href="shop-details-2.html">
                         <img src="{{ asset('frontend') }}/assets/img/product/home-one/product-5.jpg" alt="product-thumb">
                         <img class="product-thumb-secondary" src="{{ asset('frontend') }}/assets/img/product/home-one/product-6.jpg" alt="">
                      </a>
                      <div class="tpproduct__thumb-action">
                         <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                         <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                         <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                      </div>
                   </div>
                   <div class="tpproduct__content">
                      <h3 class="tpproduct__title"><a href="shop-details.html">Pinkol Enormous Granite Bottle</a></h3>
                      <div class="tpproduct__priceinfo p-relative">
                         <div class="tpproduct__priceinfo-list">
                            <span>$31.00</span>
                         </div>
                         <div class="tpproduct__cart">
                            <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="15 / 16" style="width: 199.2px; margin-right: 30px;">
                <div class="tpproduct pb-15 mb-30">
                   <div class="tpproduct__thumb p-relative">
                      <span class="tpproduct__thumb-topsall">On Sale</span>
                      <a href="shop-details-2.html">
                         <img src="{{ asset('frontend') }}/assets/img/product/home-one/product-7.jpg" alt="product-thumb">
                         <img class="product-thumb-secondary" src="{{ asset('frontend') }}/assets/img/product/home-one/product-8.jpg" alt="">
                      </a>
                      <div class="tpproduct__thumb-action">
                         <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                         <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                         <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                      </div>
                   </div>
                   <div class="tpproduct__content">
                      <h3 class="tpproduct__title"><a href="shop-details-2.html">Gorgeous Aluminum Table</a></h3>
                      <div class="tpproduct__priceinfo p-relative">
                         <div class="tpproduct__priceinfo-list">
                            <span>$31.00</span>
                         </div>
                         <div class="tpproduct__cart">
                            <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="16 / 16" style="width: 199.2px; margin-right: 30px;">
                <div class="tpproduct pb-15 mb-30">
                   <div class="tpproduct__thumb p-relative">
                      <a href="shop-details-2.html">
                         <img src="{{ asset('frontend') }}/assets/img/product/home-one/product-9.jpg" alt="product-thumb">
                         <img class="product-thumb-secondary" src="{{ asset('frontend') }}/assets/img/product/home-one/product-10.jpg" alt="">
                      </a>
                      <div class="tpproduct__thumb-action">
                         <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                         <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                         <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                      </div>
                   </div>
                   <div class="tpproduct__content">
                      <h3 class="tpproduct__title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a></h3>
                      <div class="tpproduct__priceinfo p-relative">
                         <div class="tpproduct__priceinfo-list">
                            <span>$31.00</span>
                            <span class="tpproduct__priceinfo-list-oldprice">$39.00</span>
                         </div>
                         <div class="tpproduct__cart">
                            <a href="cart.html"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div></div>
       <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
 </div>


@endsection


@section('script')

  @if (session('cart_update'))
  <script>
    Toastify({
      text: "{{ session('cart_update') }}",
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

  @if (session('cart_error'))
  <script>
    Toastify({
      text: "{{ session('cart_error') }}",
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: "right", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: "linear-gradient(to right, #E01C34, #ACABB0)",
        transition: "opacity 0.5s ease",
      },
      onClick: function(){} // Callback after click
    }).showToast();

    </script>
  @endif

@endsection



