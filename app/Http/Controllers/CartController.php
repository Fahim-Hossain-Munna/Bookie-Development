<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->get();
        return view('frontend.cart.index',compact('categories','carts'));
    }
}
