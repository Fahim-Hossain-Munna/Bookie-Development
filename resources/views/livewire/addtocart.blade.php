<div>
    {{-- Stop trying to control. --}}
    {{ $model }}
    <select wire:model='model'>
        <option value="1">fawfwqfqwf</option>
        <option value="2">fawfwqfqwf</option>
    </select>

    <div class="tpproduct-details__count d-flex align-items-center flex-wrap mb-25">
       <div class="tpproduct-details__quantity">
          <span class="cart-minus"><i class="far fa-minus"></i></span>
          <input class="tp-cart-input" type="text" value="1">
          <span class="cart-plus"><i class="far fa-plus"></i></span>
       </div>
       <div class="tpproduct-details__cart ml-20">
          <button><i class="fal fa-shopping-cart"></i> Add To Cart</button>
       </div>
       <div class="tpproduct-details__wishlist ml-20">
          <button><i class="fal fa-heart"></i></button>
       </div>
    </div>
</div>
