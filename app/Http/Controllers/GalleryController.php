<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $galleries = Gallery::where('user_id',auth()->id())->where('product_id',$id)->latest()->get();
        return view('dashboard.gallery.index',compact('galleries','id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('dashboard.gallery.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $manager = new ImageManager(new Driver());
        if($request->hasFile('image')){
            $new_name = auth()->user()->id .'-'. $request->title .'-'. rand(1111,9999) .'-'.now()->format('d-m-Y').'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image->toPng()->save(base_path('public/uploads/gallery/'.$new_name),80);
            Gallery::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'title' => $request->title,
                'image' => $new_name,
                'created_at' => now(),
            ]);
            return redirect()->route('gallery.index',$id)->with('gallery_status','Gallery Image Insert Successfully Complete');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,$pid)
    {
        $gallery = Gallery::where('id',$id)->first();

        return view('dashboard.gallery.edit',compact('gallery','pid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id,$pid)
    {
        $gallery = Gallery::where('id',$id)->first();

        $manager = new ImageManager(new Driver());
        if($request->hasFile('image')){

            if($gallery->image){
                $old_path = base_path('public/uploads/gallery/'.$gallery->image);
                if(file_exists($old_path)){
                    unlink($old_path);
                }
            }

            $new_name = auth()->user()->id .'-'. $request->title .'-'. rand(1111,9999) .'-'.now()->format('d-m-Y').'.'.$request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image->toPng()->save(base_path('public/uploads/gallery/'.$new_name),80);
            Gallery::findOrFail($gallery->id)->update([
                'title' => $request->title,
                'image' => $new_name,
                'updated_at' => now(),
            ]);
            return redirect()->route('gallery.index',$pid)->with('gallery_status','Gallery Image Update Successfully Complete');
        }else{
            Gallery::findOrFail($gallery->id)->update([
                'title' => $request->title,
                'updated_at' => now(),
            ]);
            return redirect()->route('gallery.index',$pid)->with('gallery_status','Gallery Image Update Successfully Complete');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,$pid)
    {
        $gallery = Gallery::where('id',$id)->first();
        if($gallery->image){
            $old_path = base_path('public/uploads/gallery/'.$gallery->image);
            if(file_exists($old_path)){
                unlink($old_path);
            }
        }

        Gallery::findOrFail($id)->delete();
        return redirect()->route('gallery.index',$pid)->with('gallery_status','Gallery Image Delete Successfully Complete');
    }
    public function status($id,$pid)
    {
        $gallery = Gallery::where('id',$id)->first();

        if($gallery->status == 'deactive'){
            Gallery::findOrFail($id)->update([
                'status' => 'active',
                'updated_at' => now(),
            ]);
            return redirect()->route('gallery.index',$pid)->with('gallery_status','Gallery Image Status Successfully Complete');
        }else{
            Gallery::findOrFail($id)->update([
                'status' => 'deactive',
                'updated_at' => now(),
            ]);
            return redirect()->route('gallery.index',$pid)->with('gallery_status','Gallery Image Status Successfully Complete');
        }

    }
}
