<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Boostquantity extends Component
{

    public $cart;

    public function increment($id){
         $cart = Cart::find($id);
         $cart->quantity = $cart->quantity + 1;
         $cart->save();

         $this->cart = Cart::find($id);
    }

    public function decrement($id){
         $cart = Cart::find($id);
         if($cart->quantity > 1){
             $cart->quantity = $cart->quantity - 1;
             $cart->save();
         }

         $this->cart = Cart::find($id);
    }
    public function render()
    {
        return view('livewire.boostquantity');
    }
}
