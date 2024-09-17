<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    public function index(){
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->where('status','pending')->take(5)->get();
        }else{
            $carts=[];
        }
        $categories = Category::latest()->get();
        return view('frontend.profile.index',compact('categories','carts'));
    }
    public function logout(Request $request){
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
