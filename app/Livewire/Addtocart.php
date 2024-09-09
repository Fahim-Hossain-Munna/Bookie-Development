<?php

namespace App\Livewire;

use App\Models\Inventory;
use Livewire\Component;

class Addtocart extends Component
{
    public $product_id;
    public $size_dropdown;
    public $model;

    public function mount(){
        $this->model = "hello";
    }

    public function render()
    {
        $sizes = Inventory::where('product_id',$this->product_id)->get();
        return view('livewire.addtocart',compact('sizes'));
    }
}
