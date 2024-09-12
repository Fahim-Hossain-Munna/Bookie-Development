<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Boostquantity extends Component
{

    public $carts;

    public function mount($carts)
    {
        $this->carts = $carts;
    }

    public function increment($id){
         $cart = Cart::find($id);
         $cart->quantity = $cart->quantity + 1;
         $cart->save();

         $this->carts->find($id)->quantity = $cart->quantity; 
    }

    public function decrement($id){
         $cart = Cart::find($id);
         if($cart->quantity > 1){
             $cart->quantity = $cart->quantity - 1;
             $cart->save();
         }
         $this->carts->find($id)->quantity = $cart->quantity;
    }
    public function render()
    {
        return view('livewire.boostquantity');
    }
}
