<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('frontend.profile.index',compact('categories'));
    }
    public function logout(Request $request){
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
