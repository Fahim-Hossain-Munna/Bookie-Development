<div>
    {{-- Stop trying to control. --}}
    <div class="tpproductdot pb-30">
        <div class="tpproductdot__variationitem mr-20">
           <select class="form-select" wire:model.change='size_dropdown'>
                <option>Select Option</option>
                @foreach ($sizes as $size)
                    <option value="{{ $size->size_id }}">{{ $size->hasonewithsize->size_title }} - ({{ $size->hasonewithsize->size }})</option>
                @endforeach
           </select>
        </div>
            <div class="tpproductdot__variationitem">
            @if ($colors)
            <select class="form-select" wire:model.change='color_dropdown'>
                 <option>Select Option</option>
                 @foreach ($colors as $color)
                 <option value="{{ $color->color_id }}">{{ $color->hasonewithcolor->color_title }}</option>
                 @endforeach
                </select>
                @endif
            </div>
        </div>

    <div class="mb-20">Available Stock : {{ $stock }}</div>
    <div class="tpproduct-details__count d-flex align-items-center flex-wrap mb-25">
       <div class="tpproduct-details__quantity">
          <span style="cursor: pointer; padding: 10px 15px; margin-right:10px;" class="" wire:click="decrement"><i class="far fa-minus"></i></span>
          <input class="tp-cart-input" type="text" wire:model="quantity" readonly>
          <span style="cursor: pointer; padding: 10px 15px; margin-left:10px;" class="" wire:click="increment"><i class="far fa-plus"></i></span>
       </div>
       <div class="tpproduct-details__cart ml-20">
          <button wire:click="addtocart"><i class="fal fa-shopping-cart"></i> Add To Cart</button>
       </div>
       <div class="tpproduct-details__wishlist ml-20">
          <button><i class="fal fa-heart"></i></button>
       </div>
    </div>
</div>
