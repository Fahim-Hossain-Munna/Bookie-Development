<div>
    {{-- The Master doesn't talk, he acts. --}}

        <span class="py-2 px-4" wire:click="decrement({{ $cart->id }})">
            <i class="fa-solid fa-minus"></i>
        </span>
        <input class="cart-input" type="text" value="{{ $cart->quantity }}">
        <span class="py-2 px-4 "  wire:click="increment({{ $cart->id }})">
            <i class="fa-solid fa-plus"></i>
        </span>

</div>
