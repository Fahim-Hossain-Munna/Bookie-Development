<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('dashboard.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('dashboard.blog.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     '*' => 'required',
        // ]);

        $manager = new ImageManager(new Driver());

        if($request->hasFile('image')){
            $newname = auth()->id().'-'.$request->title.'-'.now()->format('d-m-Y').'-'.rand(0,9999).'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image->toPng()->save(base_path('public/uploads/blog/'.$newname),80);

            if($request->slug){
                $blog = Blog::create([
                    'user_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug,'-'),
                    'description' => $request->description,
                    'image' => $newname,
                    'created_at' =>now(),
                ]);
                $blog->manywithtags()->attach($request->tag_ids);
                $blog->save();

                return redirect()->route('blog.index')->with('blog_success','New Blog Create Successfull');
            }else{

                $blog = Blog::create([
                    'user_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'title' => $request->title,
                    'slug' => Str::slug($request->title,'-'),
                    'description' => $request->description,
                    'image' => $newname,
                    'created_at' =>now(),
                ]);
                $blog->manywithtags()->attach($request->tag_ids);
                $blog->save();
                return redirect()->route('blog.index')->with('blog_success','New Blog Create Successfull');
            }


        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('dashboard.blog.edit',compact('categories','tags','blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $manager = new ImageManager(new Driver());

        if($request->hasFile('image')){
            $newname = auth()->id().'-'.$request->title.'-'.now()->format('d-m-Y').'-'.rand(0,9999).'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image->toPng()->save(base_path('public/uploads/blog/'.$newname),80);
            if($blog->image){
                $oldpath = base_path('public/uploads/blog/'.$blog->image);
                if(file_exists($oldpath)){
                    unlink($oldpath);
                }
            }
            if($request->slug){
                $blog = Blog::findOrFail($blog->id);
                $blog->user_id =  auth()->user()->id;
                    $blog->category_id =  $request->category_id;
                    $blog->title =  $request->title;
                    $blog->slug =  Str::slug($request->slug,'-');
                    $blog->description =  $request->description;
                    $blog->image =  $newname;
                    $blog->created_at = now();
                $blog->manywithtags()->sync($request->tag_ids);
                $blog->save();

                return redirect()->route('blog.index')->with('blog_success','New Blog Create Successfull');
            }else{
                $blog = Blog::findOrFail($blog->id);
                $blog->user_id =  auth()->user()->id;
                    $blog->category_id =  $request->category_id;
                    $blog->title =  $request->title;
                    $blog->slug =  Str::slug($request->slug,'-');
                    $blog->description =  $request->description;
                    $blog->image =  $newname;
                    $blog->created_at = now();
                $blog->manywithtags()->sync($request->tag_ids);
                $blog->save();
                return redirect()->route('blog.index')->with('blog_success','New Blog Create Successfull');
            }


        }else{
            if($request->slug){
                $blog = Blog::findOrFail($blog->id);
                $blog->user_id =  auth()->user()->id;
                    $blog->category_id =  $request->category_id;
                    $blog->title =  $request->title;
                    $blog->slug =  Str::slug($request->slug,'-');
                    $blog->description =  $request->description;
                    $blog->created_at = now();

                $blog->manywithtags()->sync($request->tag_ids);
                $blog->save();

                return redirect()->route('blog.index')->with('blog_success','New Blog Create Successfull');
            }else{
                $blog = Blog::findOrFail($blog->id);
                $blog->user_id =  auth()->user()->id;
                    $blog->category_id =  $request->category_id;
                    $blog->title =  $request->title;
                    $blog->slug =  Str::slug($request->slug,'-');
                    $blog->description =  $request->description;
                    $blog->created_at = now();
                $blog->manywithtags()->sync($request->tag_ids);
                $blog->save();
                return redirect()->route('blog.index')->with('blog_success','New Blog Create Successfull');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

        Blog::findOrFail($blog->id)->delete();
        return redirect()->route('blog.index')->with('blog_success','Blog Delete Successfull!!');

    }


    public function status($slug)
    {
        $blog = Blog::where('slug',$slug)->first();

        if($blog->status == 'deactive'){
            Blog::find($blog->id)->update([
                'status' => 'active',
                'created_at' => now(),
            ]);
            return redirect()->route('blog.index')->with('blog_success','Blog Status Update Successfull!!');

        }else{
            Blog::find($blog->id)->update([
                'status' => 'deactive',
                'created_at' => now(),
            ]);
            return redirect()->route('blog.index')->with('blog_success','Blog Status Update Successfull!!');
        }
    }
}
