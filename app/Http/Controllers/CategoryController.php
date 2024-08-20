<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('dashboard.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manager = new ImageManager(new Driver());

        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
        ]);

        if($request->hasFile('image')){
            $newcatimgname = auth()->user()->id.'-'.$request->title.'-'.now()->format('d-m-Y').'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image->toPng()->save(base_path('public/uploads/category/'.$newcatimgname),80);

            if($request->slug){
                Category::insert([
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug, '-'),
                    'image' => $newcatimgname,
                    'created_at' => now(),
                ]);
            }else{
                Category::create([
                    'title' => $request->title,
                    'slug' => Str::slug($request->title, '-'),
                    'image' => $newcatimgname,
                    'created_at' => now(),
                ]);
            }
            return redirect()->route('category.index')->with('category_create','New Category Create Successfull!!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $manager = new ImageManager(new Driver());

        if($request->hasFile('image')){
            $existingImage = base_path('public/uploads/category/'.$category->image);
            if(file_exists($existingImage)){
                unlink($existingImage);
                $newcatimgname = auth()->user()->id.'-'.$request->title.'-'.now()->format('d-m-Y').'.'.$request->file('image')->getClientOriginalExtension();
                $image = $manager->read($request->file('image'));
                $image->toPng()->save(base_path('public/uploads/category/'.$newcatimgname),80);
                    Category::find($category->id)->update([
                        'title' => $request->title,
                        'slug' => Str::slug($request->slug, '-'),
                        'image' => $newcatimgname,
                        'created_at' => now(),
                    ]);

                return redirect()->route('category.index')->with('category_create','Category Update Successfull!!');
            }
        }else{
            Category::find($category->id)->update([
                'title' => $request->title,
                'slug' => Str::slug($request->slug, '-'),
                'created_at' => now(),
            ]);

            return redirect()->route('category.index')->with('category_create','Category Update Successfull!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::find($category->id)->delete();
        return redirect()->route('category.index')->with('category_create','Category Delete Successfull!!');
    }

    public function status($slug)
    {
        $category = Category::where('slug',$slug)->first();

        if($category->status == "deactive"){
            Category::find($category->id)->update([
                'status' => 'active',
                'created_at' => now(),
            ]);
            return redirect()->route('category.index')->with('category_create','Status Update Successfull!!');

        }else{
            Category::find($category->id)->update([
                'status' => 'deactive',
                'created_at' => now(),
            ]);
            return redirect()->route('category.index')->with('category_create','Status Update Successfull!!');
        }
    }
}
