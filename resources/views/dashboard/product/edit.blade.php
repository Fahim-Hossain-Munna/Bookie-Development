@extends('layouts.backmaster')

@section('contant')
<x-back-page-header title="Product Create Page"></x-back-page-header>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <picture class="form-control d-flex justify-content-center">
                        <img id="product_image" src="{{ asset('uploads/product') }}/{{ $product->product_thumbnail }}" alt="img" style="width: 200px; height:200px; object-fit:cover;">
                    </picture>
                    <label class="form-label mt-2" for="setFullName">Product Thumbnail</label>
                    <input onchange="document.getElementById('product_image').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="setFullName" name="thumbnail">
                    <label class="form-label mt-2" for="setFullName">Select Category</label>
                    <select class="form-select" name="category_id">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                        @foreach ($categories as $category)
                            <option {{ $product->category_id == $category->id ? 'selected' : ''  }} value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Select Tag</label>
                    <select class="form-select" multiple name="tag_ids[]">
                            @foreach ($tags as $tag)
                                <option @foreach ($product->manywithtags as $t) @if ($t->id == $tag->id)
                                    selected
                                @endif @endforeach class="py-2" value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Product Title</label>
                    <input type="text" class="form-control" id="setFullName" placeholder="Full Title" name="title" value="{{ $product->product_name }}">
                    <label class="form-label mt-2" for="setEmail">Product Slug</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug" value="{{ $product->product_slug }}">
                    <label class="form-label mt-2" for="setEmail">Product Code</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Code" name="code" value="{{ $product->product_code }}">
                    <label class="form-label mt-2" for="setEmail">Product unit</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter unit" name="unit" value="{{ $product->product_unit }}">
                    <label class="form-label mt-2" for="setEmail">Product Short Description</label>
                    <textarea id="mytextareaproductshort" type="text" class="form-control" id="setEmail" name="shortdescription">{{ $product->product_short_description }}</textarea>
                    <label class="form-label mt-2" for="setEmail">Product Description</label>
                    <textarea id="mytextareaproductlong" type="text" class="form-control" id="setEmail" name="description">{{ $product->product_description }}</textarea>
                    <label class="form-label mt-2" for="setEmail">Product Purchase Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Purchase Price" name="purchase_price" value="{{ $product->purchase_price }}">
                    <label class="form-label mt-2" for="setEmail">Product Selling Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Selling Price" name="selling_price" value="{{ $product->selling_price }}">
                    <label class="form-label mt-2" for="setEmail">Product Discount Type</label>
                    <select class="form-select" name="discount_type">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                        <option {{ $product->discount_type == "none" ? 'selected' : '' }} class="mx-2 badge bg-danger text-bold text-white" value="none">None</option>
                        <option {{ $product->discount_type == "percentage" ? 'selected' : '' }} class="mx-2 badge bg-danger text-bold text-white" value="percentage">percentage</option>
                        <option {{ $product->discount_type == "flat" ? 'selected' : '' }} class="mx-2 badge bg-danger text-bold text-white" value="flat">flat</option>
                    </select>
                    <label class="form-label mt-2" for="setEmail">Product Discount Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Discount Price" name="discount_price" value="{{ $product->discount_price }}">
                    <label class="form-label mt-2" for="setEmail">Product Shipping Type</label>
                    <select class="form-select" name="shipping_type">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                        <option {{ $product->discount_type == "none" ? 'selected' : '' }} class="mx-2 badge bg-danger text-bold text-white" value="none">None</option>
                            <option {{ $product->discount_type == "inner" ? 'selected' : '' }} class="mx-2 badge bg-danger text-bold text-white" value="inner">Inner Country</option>
                            <option {{ $product->discount_type == "outer" ? 'selected' : '' }} class="mx-2 badge bg-danger text-bold text-white" value="outer">Outer Country</option>
                    </select>
                    <label class="form-label mt-2" for="setEmail">Product Shipping Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Shipping Price" name="shipping_price" value="{{ $product->shipping_rate }}">
                    <label class="form-label mt-2" for="setEmail">Product Vat</label>
                    <select class="form-select" name="vat_tax">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                            @for ($i=1 ; $i <= 10; $i++)
                                <option {{ $product->vat_tax == $i ? 'selected' : '' }} class="mx-2 badge bg-danger text-bold text-white" value="{{$i}}">{{ $i }}%</option>
                            @endfor
                    </select>

                    {{-- <div class="form-check form-switch form-switch-info mt-3">
                        <input class="form-check-input" type="checkbox" id="customSwitchInfof" name="feature" value="active">
                        <label class="form-check-label" for="customSwitchInfof">Feature</label>
                    </div>
                    <div class="form-check form-switch form-switch-info mt-3">
                        <input class="form-check-input" type="checkbox" id="customSwitchInfot" name="today_sale" value="active">
                        <label class="form-check-label" for="customSwitchInfot">Today Sale</label>
                    </div>
                    <div class="form-check form-switch form-switch-info mt-3" name="status">
                        <input class="form-check-input" type="checkbox" id="customSwitchInfos" name="status" value="active">
                        <label class="form-check-label" for="customSwitchInfos">Status</label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>


<script>
    tinymce.init({
        selector: '#mytextareaproductshort'
      });
    tinymce.init({
        selector: '#mytextareaproductlong'
      });
</script>

@endsection
