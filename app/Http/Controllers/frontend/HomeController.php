<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->take(5)->get();
        }else{
            $carts=[];
        }
        $blogs = Blog::latest()->get();
        $categories = Category::latest()->get();
        $products = Product::where('status','active')->latest()->take(15)->get();
        $feature_products = Product::where('feature','active')->latest()->take(15)->get();
        return view('frontend.home.index',compact('categories','blogs','products','feature_products','carts'));
    }
    public function blog()
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->take(5)->get();
        }else{
            $carts=[];
        }
        $blogs = Blog::latest()->paginate(2);
        $recentBlogs = Blog::latest()->take(4)->get();
        $categories = Category::latest()->get();
        $tags= Tag::latest()->get();
        return view('frontend.blog.index',compact('categories','blogs','tags','recentBlogs','carts'));
    }

    public function blog_details($blogid)
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->take(5)->get();
        }else{
            $carts=[];
        }
        $comments = Comment::with('hasmanyreplies')->where('blog_id',$blogid)->whereNull('parent_id')->get();
        $blog = Blog::where('id',$blogid)->first();
        $categories = Category::latest()->get();
        $tags= Tag::latest()->get();
        $recentBlogs = Blog::latest()->take(4)->get();
        return view('frontend.blog.blogsingle',compact('categories','tags','recentBlogs','blog','comments','carts'));
    }

    public function cat_blog($cat_slug)
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->take(5)->get();
        }else{
            $carts=[];
        }
        $category = Category::where('slug',$cat_slug)->first();
        $blogs = Blog::where('category_id',$category->id)->paginate(2);
        $tags= Tag::latest()->get();
        $categories = Category::latest()->get();
        $recentBlogs = Blog::latest()->take(4)->get();
        return view('frontend.blog.categoryblog',compact('blogs','tags','categories','recentBlogs','carts'));
    }

    public function tag_blog($tag_slug)
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->take(5)->get();
        }else{
            $carts=[];
        }
        $Tag = Tag::with('manywithblogs')->where('slug',$tag_slug)->first();
        $blogs = $Tag->manywithblogs()->paginate(2);;
        $tags= Tag::latest()->get();
        $categories = Category::latest()->get();
        $recentBlogs = Blog::latest()->take(4)->get();
        return view('frontend.blog.tagblog',compact('blogs','tags','categories','recentBlogs','carts'));
    }


    public function product_single($slug)
    {
        if(Auth::guard('customer')->check()){
            $carts = Cart::where('auth_id',Auth::guard('customer')->user()->id)->take(5)->get();
        }else{
            $carts=[];
        }
        $categories = Category::latest()->get();
        $product = Product::where('product_slug',$slug)->first();
        $related_product = Product::where('category_id',$product->category_id)->get();
        return view('frontend.product.single',compact('product','categories','related_product','carts'));
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
