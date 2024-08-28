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
                <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <picture class="form-control d-flex justify-content-center">
                        <img id="blog_img" src="{{ asset('uploads/default/default.png') }}" alt="img" style="width: 200px; height:200px; object-fit:cover;">
                    </picture>
                    <label class="form-label mt-2" for="setFullName">Product Thumbnail</label>
                    <input onchange="document.getElementById('blog_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="setFullName" name="image">
                    <label class="form-label mt-2" for="setFullName">Select Category</label>
                    <select class="form-select" name="category_id">
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">Select Type</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Select Tag</label>
                    <select class="form-select" multiple name="tag_ids[]">
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">Select Type</option>
                        @foreach ($tags as $tag)
                            <option class="mx-2 badge bg-danger text-bold text-white" value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                    <label class="form-label mt-2" for="setFullName">Product Title</label>
                    <input type="text" class="form-control" id="setFullName" placeholder="Full Title" name="title">
                    <label class="form-label mt-2" for="setEmail">Product Slug</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug">
                    <label class="form-label mt-2" for="setEmail">Product Code</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug">
                    <label class="form-label mt-2" for="setEmail">Product unit</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug">
                    <label class="form-label mt-2" for="setEmail">Description</label>
                    <textarea id="mytextareaproduct" type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="description"></textarea>
                    <label class="form-label mt-2" for="setEmail">Product Purchase Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug">
                    <label class="form-label mt-2" for="setEmail">Product Selling Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug">
                    <label class="form-label mt-2" for="setEmail">Product Discount Price</label>
                    <input type="text" class="form-control" id="setEmail" placeholder="Enter Slug" name="slug">
                    <label class="form-label mt-2" for="setEmail">Product Discount Type</label>
                    <select class="form-select" name="">
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">Select Type</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">None</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">percentage</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="flat">flat</option>
                    </select>
                    <label class="form-label mt-2" for="setEmail">Product Shipping Type</label>
                    <select class="form-select" name="">
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">Select Type</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">None</option>
                            <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">Inner Country</option>
                            <option class="mx-2 badge bg-danger text-bold text-white" value="flat">Outer Country</option>
                    </select>
                    <label class="form-label mt-2" for="setEmail">Product Shipping Price</label>
                    <select class="form-select" name="">
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">Select Type</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">None</option>
                            <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">100Tk</option>
                            <option class="mx-2 badge bg-danger text-bold text-white" value="flat">250Tk</option>
                    </select>
                    <label class="form-label mt-2" for="setEmail">Product Discount Type</label>
                    <select class="form-select" name="">
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">Select Type</option>
                        <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">None</option>
                            <option class="mx-2 badge bg-danger text-bold text-white" value="percentage">percentage</option>
                            <option class="mx-2 badge bg-danger text-bold text-white" value="flat">flat</option>
                    </select>

                    <div class="form-check form-switch form-switch-info mt-3">
                        <input class="form-check-input" type="checkbox" id="customSwitchInfo">
                        <label class="form-check-label" for="customSwitchInfo">Feature</label>
                    </div>
                    <div class="form-check form-switch form-switch-info mt-3">
                        <input class="form-check-input" type="checkbox" id="customSwitchInfo">
                        <label class="form-check-label" for="customSwitchInfo">Today Sale</label>
                    </div>
                    <div class="form-check form-switch form-switch-info mt-3">
                        <input class="form-check-input" type="checkbox" id="customSwitchInfo">
                        <label class="form-check-label" for="customSwitchInfo">Status</label>
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
