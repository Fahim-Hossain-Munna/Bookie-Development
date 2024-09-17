<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Inventory;
use App\Models\Oder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OderController extends Controller
{
    public function order_now(Request $request){
        $request->validate([
            "*" => 'required',
        ]);
       if($request->cod){

        $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->where('status','pending')->get();

        foreach($carts as $cart){

            Oder::insert([
               "customer_id" => Auth::guard('customer')->user()->id,
               "product_id" => $cart->product_id,
               "size_id" => $cart->size_id,
               "color_id" => $cart->color_id,
               "firstname" => $request->firstname,
               "lastname" => $request->lastname,
               "email" =>   $request->email,
               "phone" =>   $request->phone,
               "address" => $request->address,
               "city" =>    $request->city,
               "country" => $request->country,
               "zipcode" => $request->zipcode,
               "quantity" => $cart->quantity,
               "oder_total" => session('all_total'),
               "payment_method" => "cod",
               "created_at" => now(),
            ]);

            Cart::find($cart->id)->update([
                'status' => 'done',
                'updated_at' => now(),
            ]);

            Inventory::where([
                'product_id' => $cart->product_id,
                'size_id' => $cart->size_id,
                'color_id' => $cart->color_id,
            ])->decrement('quantity',$cart->quantity);

        }
        Session::flash('cod_done', 'Order Successfully Complete,Thank You!!');
         return back();

       }
    //    cod proccess


    }
}
