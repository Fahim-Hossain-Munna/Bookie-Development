<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::latest()->get();
        return view('dashboard.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ]);

            if($request->slug){
                Tag::create([
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug, '-'),
                    'created_at' => now(),
                ]);
            }else{
                Tag::create([
                    'title' => $request->title,
                    'slug' => Str::slug($request->title, '-'),
                    'created_at' => now(),
                ]);
            }
            return redirect()->route('tag.index')->with('tag_success','New Tag Create Successfull!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('dashboard.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'title' => 'required',
        ]);

            if($request->slug){
                Tag::find($tag->id)->update([
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug, '-'),
                    'created_at' => now(),
                ]);
            }else{
                Tag::find($tag->id)->update([
                    'title' => $request->title,
                    'slug' => Str::slug($request->title, '-'),
                    'created_at' => now(),
                ]);
            }
            return redirect()->route('tag.index')->with('tag_success','Tag update Successfull!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag::findOrfail($tag->id)->delete();
        return redirect()->route('tag.index')->with('tag_success','Tag Delete Successfull!!');
    }

    public function status($slug)
    {

        $tag = Tag::where('slug',$slug)->first();

        if($tag->status == 'deactive'){
            Tag::find($tag->id)->update([
                'status' => 'active',
                'created_at' => now(),
            ]);
            return redirect()->route('tag.index')->with('tag_success','Tag Status Update Successfull!!');

        }else{
            Tag::find($tag->id)->update([
                'status' => 'deactive',
                'created_at' => now(),
            ]);
            return redirect()->route('tag.index')->with('tag_success','Tag Status Update Successfull!!');
        }

    }

    public function trash(){

        $tags = Tag::onlyTrashed()->get();

        return view('dashboard.tag.trash',compact('tags'));

    }
    public function trash_restore($id){

        $tags = Tag::withTrashed()->find($id)->restore();
        return redirect()->route('tag.index')->with('tag_success','Tag Restore Update Successfull!!');

    }
    public function trash_delete($id){

        $tags = Tag::withTrashed()->findOrFail($id)->forceDelete();

        return redirect()->route('tag.trash')->with('tag_success','Tag Permanently Delete Successfull!!');
    }


}
