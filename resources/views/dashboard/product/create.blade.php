@extends('layouts.backmaster')

@section('contant')
<x-back-page-header title="Product Create Page"></x-back-page-header>


<div class="row">
    <div class="col-lg-12">
        @if (session('update_info'))
        <div class="alert alert-outline-success" role="alert">
            <strong>Well done!</strong> {{session('update_info')}}.
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <picture class="form-control d-flex justify-content-center">
                        <img id="product_image" src="{{ asset('uploads/default/default.png') }}" alt="img" style="width: 200px; height:200px; object-fit:cover;">
                    </picture>
                    <label class="form-label mt-2" for="setFullName">Product Thumbnail</label>
                    <input onchange="document.getElementById('product_image').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="setFullName" name="thumbnail">
                    <label class="form-label mt-2" for="setFullName">Select Category</label>
                    <select class="form-select" name="category_id">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Select Tag</label>
                    <select class="form-select" multiple name="tag_ids[]">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                        @foreach ($tags as $tag)
                            <option class="mx-2 badge bg-danger text-bold text-white" value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Product Title</label>
                    <input type="text" class="form-control" id="setFullName" placeholder="Full Title" name="title">
                    <label class="form-label mt-2" for="setEmail">Product Slug</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug">
                    <label class="form-label mt-2" for="setEmail">Product Code</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Code" name="code">
                    <label class="form-label mt-2" for="setEmail">Product unit</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter unit" name="unit">
                    <label class="form-label mt-2" for="setEmail">Product Short Description</label>
                    <textarea id="mytextareaproduct" type="text" class="form-control" id="setEmail" name="shortdescription"></textarea>
                    <label class="form-label mt-2" for="setEmail">Product Description</label>
                    <textarea id="mytextareaproduct" type="text" class="form-control" id="setEmail" name="description"></textarea>
                    <label class="form-label mt-2" for="setEmail">Product Purchase Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Purchase Price" name="purchase_price">
                    <label class="form-label mt-2" for="setEmail">Product Selling Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Selling Price" name="selling_price">
                    <label class="form-label mt-2" for="setEmail">Product Discount Type</label>
                    <select class="form-select" name="discount_type">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="none">None</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">percentage</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="flat">flat</option>
                    </select>
                    <label class="form-label mt-2" for="setEmail">Product Discount Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Discount Price" name="discount_price">
                    <label class="form-label mt-2" for="setEmail">Product Shipping Type</label>
                    <select class="form-select" name="shipping_type">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="None">None</option>
                            <option class="mx-2 badge bg-danger text-bold text-white" value="inner">Inner Country</option>
                            <option class="mx-2 badge bg-danger text-bold text-white" value="outer">Outer Country</option>
                    </select>
                    <label class="form-label mt-2" for="setEmail">Product Shipping Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Shipping Price" name="shipping_price">
                    <label class="form-label mt-2" for="setEmail">Product Vat</label>
                    <select class="form-select" name="vat_tax">
                        <option class="mx-2 badge bg-danger text-bold text-white">Select Type</option>
                            @for ($i=1 ; $i <= 10; $i++)
                                <option class="mx-2 badge bg-danger text-bold text-white" value="{{$i}}">{{ $i }}%</option>
                            @endfor
                    </select>

                    <div class="form-check form-switch form-switch-info mt-3">
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
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                </form> <!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div>
</div>


<script>
    tinymce.init({
        selector: '#mytextareaproduct'
      });
</script>

@endsection
