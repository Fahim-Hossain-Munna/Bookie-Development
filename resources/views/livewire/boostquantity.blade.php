<div>
    {{-- The Master doesn't talk, he acts. --}}

    <td class="product-quantity">
        <span wire:click="decrement">-</span>
        <input class="cart-input" type="text" value="{{ $cart->quantity }}">
        {{-- <span  wire:click="increment({{ $cart->id }})">+</span> --}}
        <h1 wire:click="increment({{ $cart->id }})" >hello</h1>
  </td>
</div>
