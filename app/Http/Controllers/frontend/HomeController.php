<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        $categories = Category::latest()->get();
        return view('frontend.home.index',compact('categories','blogs'));
    }
    public function blog()
    {
        $blogs = Blog::latest()->paginate(2);
        $recentBlogs = Blog::latest()->take(4)->get();
        $categories = Category::latest()->get();
        $tags= Tag::latest()->get();
        return view('frontend.blog.index',compact('categories','blogs','tags','recentBlogs'));
    }

    public function blog_details($blogid)
    {
        $comments = Comment::with('hasmanyreplies')->where('blog_id',$blogid)->whereNull('parent_id')->get();
        $blog = Blog::where('id',$blogid)->first();
        $categories = Category::latest()->get();
        $tags= Tag::latest()->get();
        $recentBlogs = Blog::latest()->take(4)->get();
        return view('frontend.blog.blogsingle',compact('categories','tags','recentBlogs','blog','comments'));
    }

    public function cat_blog($cat_slug)
    {
        $category = Category::where('slug',$cat_slug)->first();
        $blogs = Blog::where('category_id',$category->id)->paginate(2);
        $tags= Tag::latest()->get();
        $categories = Category::latest()->get();
        $recentBlogs = Blog::latest()->take(4)->get();
        return view('frontend.blog.categoryblog',compact('blogs','tags','categories','recentBlogs'));
    }

    public function tag_blog($tag_slug)
    {
        $Tag = Tag::with('manywithblogs')->where('slug',$tag_slug)->first();
        $blogs = $Tag->manywithblogs()->paginate(2);;
        $tags= Tag::latest()->get();
        $categories = Category::latest()->get();
        $recentBlogs = Blog::latest()->take(4)->get();
        return view('frontend.blog.tagblog',compact('blogs','tags','categories','recentBlogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
