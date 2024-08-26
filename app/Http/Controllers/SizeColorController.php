<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SizeColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::latest()->get();
        $colors = Color::latest()->get();
        return view('dashboard.sizecolor.index',compact('sizes','colors'));
    }
    public function trash()
    {
        $sizes = Size::onlyTrashed()->get();
        $colors = Color::onlyTrashed()->get();
        return view('dashboard.sizecolor.trash',compact('sizes','colors'));
    }

    public function store_size(Request $request)
    {
           $request->validate([
                'size_title' => 'required',
                'size' => 'required',
           ]);

           Size::create([
                "user_id" => auth()->id(),
                "size_title" => Str::lower($request->size_title),
                "size" => Str::lower($request->size),
                "created_at" => now(),
           ]);

           Session::flash('size_status', 'New Size Create Successfully Complete.');
           return back();

    }

    public function update_size(Request $request,$id)
    {
           $request->validate([
                'size_title' => 'required',
                'size' => 'required',
           ]);

           Size::findOrFail($id)->update([
                "size_title" => Str::lower($request->size_title),
                "size" => Str::lower($request->size),
                "updated_at" => now(),
           ]);

           Session::flash('size_status', 'Size Update Successfully Complete.');
           return back();

    }

    public function delete_size($id)
    {
           Size::findOrFail($id)->delete();
           Session::flash('size_status', 'Size Delete Successfully Complete.');
           return back();

    }
    public function restore_size($id)
    {
           Size::withTrashed()->findOrFail($id)->restore();
           Session::flash('size_status', 'Size Restore Successfully Complete.');
           return redirect()->route('size&color.index');

    }
    public function pdelete_size($id)
    {
           Size::withTrashed()->findOrFail($id)->forceDelete();
           Session::flash('size_status', 'Size Parmanently Delete Successfully Complete.');
           return redirect()->route('size&color.index');
    }

    public function color_store(Request $request)
    {

            $request->validate([
                 'color_title' => 'required',
                 'color' => 'required',
            ]);

            Color::create([
                 "user_id" => auth()->id(),
                 "color_title" => Str::lower($request->color_title),
                 "color" => Str::lower($request->color),
                 "created_at" => now(),
            ]);

            Session::flash('color_status', 'New Color Create Successfully Complete.');
            return back();
    }
    public function color_update(Request $request,$id)
    {
            $request->validate([
                 'color_title' => 'required',
                 'color' => 'required',
            ]);

            Color::findOrFail($id)->update([
                 "color_title" => Str::lower($request->color_title),
                 "color" => Str::lower($request->color),
                 "updated_at" => now(),
            ]);

            Session::flash('color_status', 'Color Update Successfully Complete.');
            return back();
    }

    public function color_delete($id)
    {
           Color::findOrFail($id)->delete();
           Session::flash('color_status', 'Color Delete Successfully Complete.');
           return back();

    }
    public function color_restore($id)
    {
           Color::withTrashed()->findOrFail($id)->restore();
           Session::flash('color_status', 'Color Restore Successfully Complete.');
           return redirect()->route('size&color.index');

    }
    public function color_pdelete($id)
    {
           Color::withTrashed()->findOrFail($id)->forceDelete();
           Session::flash('color_status', 'Color Parmanent Delete Successfully Complete.');
           return back();

    }

}
