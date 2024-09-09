<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('dashboard.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();
        return view('dashboard.product.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manager = new ImageManager(new Driver());


        if($request->hasFile('thumbnail')){
            $new_name = auth()->user()->id .'-'. $request->title .'-'. rand(1111,9999) .'-'.now()->format('d-m-Y').'.'.$request->file('thumbnail')->getClientOriginalExtension();
            $image = $manager->read($request->file('thumbnail'));
            $image->toPng()->save(base_path('public/uploads/product/'.$new_name),80);

            if($request->slug){
                $product = Product::create($request->except('_token')+[
                    'user_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'product_thumbnail' => $new_name,
                    'product_name' => $request->title,
                    'product_slug' => Str::slug($request->slug),
                    'product_code' => $request->code,
                    'product_unit' => $request->unit,
                    'product_short_description' => $request->shortdescription,
                    'product_description' => $request->description,
                    'purchase_price' => $request->purchase_price,
                    'selling_price' => $request->selling_price,
                    'discount_type' => $request->discount_type,
                    'discount_price' => $request->discount_price,
                    'shipping_type' => $request->shipping_type,
                    'shipping_rate' => $request->shipping_price,
                    'vat_tax' => $request->vat_tax,
                    'created_at' => now(),
                ]);

                $product->manywithtags()->attach($request->tag_ids);
                $product->save();
                return redirect()->route('product.index')->with('product_status','Product Added Successfully Complete');

            }else{
                $product = Product::create($request->except('_token')+[
                    'user_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'product_thumbnail' => $new_name,
                    'product_name' => $request->title,
                    'product_slug' => Str::slug($request->title),
                    'product_code' => $request->code,
                    'product_unit' => $request->unit,
                    'product_short_description' => $request->shortdescription,
                    'product_description' => $request->description,
                    'purchase_price' => $request->purchase_price,
                    'selling_price' => $request->selling_price,
                    'discount_type' => $request->discount_type,
                    'discount_price' => $request->discount_price,
                    'shipping_type' => $request->shipping_type,
                    'shipping_rate' => $request->shipping_price,
                    'vat_tax' => $request->vat_tax,
                    'created_at' => now(),
                ]);

                $product->manywithtags()->attach($request->tag_ids);
                $product->save();
                return redirect()->route('product.index')->with('product_status','Product Added Successfully Complete');

            }

        }else{
            if($request->slug){
                $product = Product::create($request->except('_token')+[
                    'user_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'product_thumbnail' => $new_name,
                    'product_name' => $request->title,
                    'product_slug' => Str::slug($request->slug),
                    'product_code' => $request->code,
                    'product_unit' => $request->unit,
                    'product_short_description' => $request->shortdescription,
                    'product_description' => $request->description,
                    'purchase_price' => $request->purchase_price,
                    'selling_price' => $request->selling_price,
                    'discount_type' => $request->discount_type,
                    'discount_price' => $request->discount_price,
                    'shipping_type' => $request->shipping_type,
                    'shipping_rate' => $request->shipping_price,
                    'vat_tax' => $request->vat_tax,
                    'created_at' => now(),
                ]);

                $product->manywithtags()->attach($request->tag_ids);
                $product->save();
                return redirect()->route('product.index')->with('product_status','Product Added Successfully Complete');

            }else{
                $product = Product::create($request->except('_token')+[
                    'user_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'product_thumbnail' => $new_name,
                    'product_name' => $request->title,
                    'product_slug' => Str::slug($request->title),
                    'product_code' => $request->code,
                    'product_unit' => $request->unit,
                    'product_short_description' => $request->shortdescription,
                    'product_description' => $request->description,
                    'purchase_price' => $request->purchase_price,
                    'selling_price' => $request->selling_price,
                    'discount_type' => $request->discount_type,
                    'discount_price' => $request->discount_price,
                    'shipping_type' => $request->shipping_type,
                    'shipping_rate' => $request->shipping_price,
                    'vat_tax' => $request->vat_tax,
                    'created_at' => now(),
                ]);

                $product->manywithtags()->attach($request->tag_ids);
                $product->save();
                return redirect()->route('product.index')->with('product_status','Product Added Successfully Complete');
            }

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::latest()->get();
        $tags = Tag::latest()->get();

        // return $product->manywithtags->pluck('id')->toArray();
        return view('dashboard.product.edit',compact('product','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $manager = new ImageManager(new Driver());
        if($request->hasFile('thumbnail')){
            if($product->product_thumbnail){
                $old_path = base_path('public/uploads/product/'.$product->product_thumbnail);
                if(file_exists($old_path)){
                    unlink($old_path);
                }
            }
            $new_name = auth()->user()->id .'-'. $request->title .'-'. rand(1111,9999) .'-'.now()->format('d-m-Y').'.'.$request->file('thumbnail')->getClientOriginalExtension();
            $image = $manager->read($request->file('thumbnail'));
            $image->toPng()->save(base_path('public/uploads/product/'.$new_name),80);

            $product = Product::findOrFail($product->id);
            if($request->slug){
                $product->category_id = $request->category_id;
                    $product->product_thumbnail = $new_name;
                    $product->product_name = $request->title;
                    $product->product_slug = Str::slug($request->slug);
                    $product->product_code = $request->code;
                    $product->product_unit = $request->unit;
                    $product->product_short_description = $request->shortdescription;
                    $product->product_description = $request->description;
                    $product->purchase_price = $request->purchase_price;
                    $product->selling_price = $request->selling_price;
                    $product->discount_type = $request->discount_type;
                    $product->discount_price = $request->discount_price;
                    $product->shipping_type = $request->shipping_type;
                    $product->shipping_rate = $request->shipping_price;
                    $product->vat_tax = $request->vat_tax;
                    $product->updated_at = now();
                    $product->manywithtags()->sync($request->tag_ids);
                    $product->save();
                    return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');

            }else{
                $product->category_id = $request->category_id;
                    $product->product_thumbnail = $new_name;
                    $product->product_name = $request->title;
                    $product->product_slug = Str::slug($request->title);
                    $product->product_code = $request->code;
                    $product->product_unit = $request->unit;
                    $product->product_short_description = $request->shortdescription;
                    $product->product_description = $request->description;
                    $product->purchase_price = $request->purchase_price;
                    $product->selling_price = $request->selling_price;
                    $product->discount_type = $request->discount_type;
                    $product->discount_price = $request->discount_price;
                    $product->shipping_type = $request->shipping_type;
                    $product->shipping_rate = $request->shipping_price;
                    $product->vat_tax = $request->vat_tax;
                    $product->updated_at = now();
                    $product->manywithtags()->sync($request->tag_ids);
                    $product->save();
                    return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
            }

        }else{
            if($request->slug){
                    $product->category_id = $request->category_id;
                    $product->product_name = $request->title;
                    $product->product_slug = Str::slug($request->slug);
                    $product->product_code = $request->code;
                    $product->product_unit = $request->unit;
                    $product->product_short_description = $request->shortdescription;
                    $product->product_description = $request->description;
                    $product->purchase_price = $request->purchase_price;
                    $product->selling_price = $request->selling_price;
                    $product->discount_type = $request->discount_type;
                    $product->discount_price = $request->discount_price;
                    $product->shipping_type = $request->shipping_type;
                    $product->shipping_rate = $request->shipping_price;
                    $product->vat_tax = $request->vat_tax;
                    $product->updated_at = now();
                    $product->manywithtags()->sync($request->tag_ids);
                    $product->save();
                    return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
            }else{
                $product->category_id = $request->category_id;
                    $product->product_name = $request->title;
                    $product->product_slug = Str::slug($request->title);
                    $product->product_code = $request->code;
                    $product->product_unit = $request->unit;
                    $product->product_short_description = $request->shortdescription;
                    $product->product_description = $request->description;
                    $product->purchase_price = $request->purchase_price;
                    $product->selling_price = $request->selling_price;
                    $product->discount_type = $request->discount_type;
                    $product->discount_price = $request->discount_price;
                    $product->shipping_type = $request->shipping_type;
                    $product->shipping_rate = $request->shipping_price;
                    $product->vat_tax = $request->vat_tax;
                    $product->updated_at = now();
                    $product->manywithtags()->sync($request->tag_ids);
                    $product->save();
                    return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::findOrFail($product->id)->delete();
        return redirect()->route('product.index')->with('product_status','Product Delete Successfull!!');
    }

    public function status(Request $request,$id)
    {
        $product = Product::where('id',$id)->first();

        if($product->status == 'deactive'){
            Product::findOrFail($product->id)->update([
                'status' => 'active',
                'updated_at' => now(),
            ]);
            return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
        }else{
            Product::findOrFail($product->id)->update([
                'status' => 'deactive',
                'updated_at' => now(),
            ]);
            return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
        }
    }

    public function todaydeal($id)
    {
        $product = Product::where('id',$id)->first();

        if($product->today_deal == 'deactive'){
            Product::findOrFail($product->id)->update([
                'today_deal' => 'active',
                'updated_at' => now(),
            ]);
            return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
        }else{
            Product::findOrFail($product->id)->update([
                'today_deal' => 'deactive',
                'updated_at' => now(),
            ]);
            return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
        }
    }
    public function feature($id)
    {
        $product = Product::where('id',$id)->first();

        if($product->feature == 'deactive'){
            Product::findOrFail($product->id)->update([
                'feature' => 'active',
                'updated_at' => now(),
            ]);
            return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
        }else{
            Product::findOrFail($product->id)->update([
                'feature' => 'deactive',
                'updated_at' => now(),
            ]);
            return redirect()->route('product.index')->with('product_status','Product Update Successfully Complete');
        }
    }


    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view('dashboard.product.trash',compact('products'));
    }
    public function restore($id)
    {
        Product::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('product.index')->with('product_status','Product Restore Successfull!!');
    }
    public function pdelete_product($id)
    {
        $product = Product::withTrashed()->where('id',$id)->first();
        $galleries = Gallery::where('product_id',$id)->get();

        foreach($galleries as $gal){
            if($gal->image){
                $old_path = base_path('public/uploads/gallery/'.$gal->image);
                if(file_exists($old_path)){
                    unlink($old_path);
                }
            }
        }

        if($product->product_thumbnail){
            $old_path = base_path('public/uploads/product/'.$product->product_thumbnail);
            if(file_exists($old_path)){
                unlink($old_path);
            }
        }
        Product::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('product.index')->with('product_status','Product Parmanent Delete Successfull!!');
    }
}
