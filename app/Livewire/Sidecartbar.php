<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidecartbar extends Component
{
    public $carts = [];
    protected $listeners = ['cartUpdated' => 'updateCartCount'];

    public function mount()
    {
        $this->updateCartCount();
    }

    public function updateCartCount()
    {
        if(Auth::guard('customer')->check()){
            $this->carts = Cart::where('auth_id', Auth::guard('customer')->user()->id)->where('status','pending')->get();
        }
    }

    public function render()
    {
        return view('livewire.sidecartbar');
    }
}
