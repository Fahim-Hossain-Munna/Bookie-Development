<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->where('status','pending')->take(5)->get();
        }else{
            $carts=[];
        }
        $categories = Category::latest()->get();
        $products = Product::where('status','active')->latest()->paginate(8);
        return view('frontend.product.index',compact('categories','products','carts'));
    }

    public function single($slug)
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->where('status','pending')->take(5)->get();
        }else{
            $carts=[];
        }
        $categories = Category::latest()->get();
        $product = Product::where('product_slug',$slug)->first();
        $related_product = Product::where('category_id',$product->category_id)->get();
        return view('frontend.product.single',compact('product','categories','related_product','carts'));
    }
}
