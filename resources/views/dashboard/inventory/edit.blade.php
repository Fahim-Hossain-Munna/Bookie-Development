@extends('layouts.backmaster')

@section('contant')
<x-back-page-header title="Inventory Edit Page"></x-back-page-header>


<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Edit Inventory</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('inventory.update',[$inventory->id,$pid]) }}" method="post">
                    @csrf
                    <label class="form-label mt-2" for="setFullName">Select Size</label>
                    <select class="form-select" name="size_id">
                        <option class="py-2">Select Size</option>
                        @foreach ($sizes as $size)
                            <option {{ $inventory->size_id == $size->id ? 'selected' : '' }} class="py-2" value="{{ $size->id }}">{{ $size->size_title }} - ({{ $size->size }})</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Select Color</label>
                    <select class="form-select" name="color_id">
                        <option class="py-2">Select Color</option>
                        @foreach ($colors as $color)
                            <option {{ $inventory->color_id == $color->id ? 'selected' : '' }} class="py-2" value="{{ $color->id }}">{{ $color->color_title }} - ({{ $color->color }})</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Product Quantity</label>
                    <input type="number" class="form-control" id="setFullName" placeholder="Product Quantity" name="quantity" value="{{ $inventory->quantity }}">
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>

@endsection
