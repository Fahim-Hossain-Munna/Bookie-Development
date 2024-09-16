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
        if(Auth::guard('customer')->check()){

            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->get();
        }else{
            $carts = [];
        }
        return view('frontend.cart.index',compact('categories','carts'));
    }

    public function checkout(){
        $categories = Category::latest()->get();
        if(Auth::guard('customer')->check()){

            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->get();
        }else{
            $carts = [];
        }
        return view('frontend.checkout.index',compact('categories','carts'));
    }
}
