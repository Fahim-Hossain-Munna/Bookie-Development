<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $inventories = Inventory::where('product_id',$id)->get();
        $sizes = Size::latest()->get();
        $colors = Color::latest()->get();
        return view('dashboard.inventory.index',compact('id','sizes','colors','inventories'));
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
    public function store(Request $request,$id)
    {
        $product = Product::where('id',$id)->first();

        Inventory::create([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'size_id' => $request->size_id,
            'color_id' => $request->color_id,
            'quantity' => $request->quantity,
            'created_at' => now(),
        ]);
        return redirect()->route('inventory.index',$id)->with('inventory_status','Inventory Insert Successfully Complete');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,$pid)
    {
        $inventory = Inventory::where('id',$id)->first();
        $sizes = Size::latest()->get();
        $colors = Color::latest()->get();
        return view('dashboard.inventory.edit',compact('inventory','pid','sizes','colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id,$pid)
    {
        $inventory = Inventory::where('id',$id)->first();

        Inventory::findOrFail($inventory->id)->update([
            'product_id' => $pid,
            'size_id' => $request->size_id,
            'color_id' => $request->color_id,
            'quantity' => $request->quantity,
            'updated_at' => now(),
        ]);
        return redirect()->route('inventory.index',$pid)->with('inventory_status','Inventory Update Successfully Complete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,$pid)
    {
        Inventory::findOrFail($id)->delete();
        return redirect()->route('inventory.index',$pid)->with('inventory_status','Inventory Delete Successfully Complete');
    }
    public function status($id,$pid)
    {
        $inventory = Inventory::where('id',$id)->first();

        if($inventory->status == 'deactive'){
            Inventory::findOrFail($inventory->id)->update([
                'status' => 'active',
                'updated_at' => now(),
            ]);
            return redirect()->route('inventory.index',$pid)->with('inventory_status','Inventory Status Successfully Complete');
        }else{
            Inventory::findOrFail($inventory->id)->update([
                'status' => 'deactive',
                'updated_at' => now(),
            ]);
            return redirect()->route('inventory.index',$pid)->with('inventory_status','Inventory Status Successfully Complete');
        }

    }
}
