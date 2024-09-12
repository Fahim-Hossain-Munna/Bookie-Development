<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cartcount extends Component
{
    public $cartcount;

    protected $listeners = ['cartUpdated' => 'updateCartCount'];

    public function mount()
    {
        $this->updateCartCount();
    }

    public function updateCartCount()
    {
        if(Auth::guard('customer')->check()){
            $this->cartcount = Cart::where('auth_id', Auth::guard('customer')->user()->id)->count();
        }
    }

    public function render()
    {
        return view('livewire.cartcount');
    }
}
