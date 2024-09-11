<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Boostquantity extends Component
{

    public $cart;

    public function increment($cartId){
        $cart = Cart::find($cartId);
        if ($cart) {
            $cart->quantity += 1; // Increment quantity
            $cart->save(); // Save changes
        }
    }
    public function render()
    {
        return view('livewire.boostquantity');
    }
}
