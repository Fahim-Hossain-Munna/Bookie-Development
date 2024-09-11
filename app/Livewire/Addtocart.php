<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Inventory;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Addtocart extends Component
{
    public $product_id;
    public $quantity = 1;
    public $size_dropdown;
    public $color_dropdown;
    public $size_id;
    public $color_id;
    public $stock = 0;
    public $colors;

    public function increment(){
        $this->quantity++;
    }
    public function decrement(){
        if($this->quantity > 1){
            $this->quantity--;
        }
    }

    public function updatedSizeDropdown($sizeval){
        $this->size_id = $sizeval;
        session()->flash('cart_update','');
        $this->colors = Inventory::where('product_id',$this->product_id)->where('size_id',$sizeval)->get();
    }
    public function updatedColorDropdown($colorval){
        $this->color_id = $colorval;
        $stock_inven = Inventory::where('product_id',$this->product_id)->where('size_id',$this->size_id)->where('color_id',$colorval)->first();
        $this->stock = $stock_inven->quantity;
    }

    public function addtocart(){
        if($this->product_id && $this->quantity && $this->size_id && $this->color_id){
            $existingCartItem = Cart::where('auth_id', Auth::guard('customer')->user()->id)
                                ->where('product_id', $this->product_id)
                                ->where('size_id', $this->size_id)
                                ->where('color_id', $this->color_id)
                                ->first();
                if($existingCartItem){
                    $existingCartItem->update([
                        'quantity' => $existingCartItem->quantity + $this->quantity,
                        'updated_at' => now(),
                    ]);
                    session()->flash('cart_update', 'Thank You Sir, Your Cart is Store.');
                    return back();
                }else{
                    Cart::create([
                        'auth_id' => Auth::guard('customer')->user()->id,
                        'product_id' => $this->product_id,
                        'size_id' => $this->size_id,
                        'color_id' => $this->color_id,
                        'quantity' => $this->quantity,
                        'created_at' => now(),
                    ]);
                    session()->flash('cart_update', 'Thank You Sir, Your Cart is Store.');
                    return back();
                }
        }else{
            session()->flash('cart_error', 'Sorry Sir, Please Select All Necessary Field.');
            return back();
        }
    }



    public function render()
    {
        $sizes = Inventory::where('product_id',$this->product_id)->get();
        return view('livewire.addtocart',compact('sizes'));
    }
}
