<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->where('status','pending')->take(5)->get();
        }else{
            $carts=[];
        }
        $categories = Category::latest()->get();
        return view('frontend.auth.login',compact('categories' , 'carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->where('status','pending')->take(5)->get();
        }else{
            $carts=[];
        }
        $categories = Category::latest()->get();
        return view('frontend.auth.register',compact('categories' , 'carts'));
    }
    public function register_post(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now(),
        ]);

        return redirect()->route('front.customer.auth.login')->with('register_success','Register Complete Successfully');
    }

    public function login_post(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $customer = Customer::where('email',$request->email)->first();
        if(Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])){
            Session::flash('customer_welcome',"Mr. $customer->name welcome to our Bookie Community");
            return redirect()->route('front.customer.profile');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
