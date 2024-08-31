<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
                    'today_deal' => $request->today_sale,
                    'feature' => $request->feature,
                    'status' => $request->status,
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
                    'today_deal' => $request->today_sale,
                    'feature' => $request->feature,
                    'status' => $request->status,
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
